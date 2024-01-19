<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Software;
use App\Models\Workstation;
use App\Models\InventoryCpu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailCpuXPIC extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'detail_cpu_x_p_i_c_s';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'cpu_id',
        'pic_id',
        'vendor_id',
        'workstation_id',
    ];

    public function cpu(){
        return $this->belongsTo(InventoryCpu::class, 'cpu_id');
    }
    public function pic():BelongsTo{
        return $this->belongsTo(Pic::class, 'pic_id', 'id');
    }
    public function workstation():BelongsTo{
    return $this->belongsTo(Workstation::class, 'workstation_id', 'id');
    }
    public function vendor():BelongsTo{
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
    public function scopeSearch($query, $keyword){
    return $query->select('detail_cpu_x_p_i_c_s.*', 'im.id_cpu', 'w.hostname', 'w.no_ip_address', 's.status', 'im.tanggal_input')
        ->join('inventory_cpus as im', 'detail_cpu_x_p_i_c_s.cpu_id', '=', 'im.id_cpu')
        ->join('pics as p', 'detail_cpu_x_p_i_c_s.pic_id', '=', 'p.id')
        ->join('vendors as v', 'detail_cpu_x_p_i_c_s.vendor_id', '=', 'v.id')
        ->leftJoin('workstations as w', 'detail_cpu_x_p_i_c_s.workstation_id', '=', 'w.id')
        ->join('statuses as s', 'im.status_id', '=', 's.id')
        ->where('im.id_cpu', 'like', '%' . $keyword . '%')
        ->orWhere('p.nama_pic', 'like', '%' . $keyword . '%')
        ->orWhere('w.no_ip_address', 'like', '%' . $keyword . '%');
    }
}