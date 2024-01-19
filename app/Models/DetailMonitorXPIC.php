<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Workstation;
use App\Models\InventoryMonitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailMonitorXPIC extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'detail_monitor_x_p_i_c_s';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'monitor_id',
        'pic_id',
        'vendor_id',
        'workstation_id',
    ];

    public function monitor(){
        return $this->belongsTo(InventoryMonitor::class, 'monitor_id');
    }

    public function pic(){
        return $this->belongsTo(Pic::class, 'pic_id', 'id');
    }

    public function workstation(){
        return $this->belongsTo(Workstation::class, 'workstation_id', 'id');
    }

    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }

    public function scopeSearch($query, $keyword){
    return $query->select('detail_monitor_x_p_i_c_s.*', 'im.id_monitor', 'w.hostname', 'w.no_ip_address', 's.status', 'im.tanggal_input')
        ->join('inventory_monitors as im', 'detail_monitor_x_p_i_c_s.monitor_id', '=', 'im.id_monitor')
        ->join('pics as p', 'detail_monitor_x_p_i_c_s.pic_id', '=', 'p.id')
        ->join('vendors as v', 'detail_monitor_x_p_i_c_s.vendor_id', '=', 'v.id')
        ->leftJoin('workstations as w', 'detail_monitor_x_p_i_c_s.workstation_id', '=', 'w.id')
        ->join('statuses as s', 'im.status_id', '=', 's.id')
        ->where('im.id_monitor', 'like', '%' . $keyword . '%')
        ->orWhere('p.nama_pic', 'like', '%' . $keyword . '%')
        ->orWhere('w.no_ip_address', 'like', '%' . $keyword . '%');
    }
}