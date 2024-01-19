<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Workstation;
use App\Models\InventoryMouse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailMouseXPIC extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'detail_mouse_x_p_i_c_s';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'mouse_id',
        'pic_id',
        'vendor_id',
        'workstation_id',
    ];

    public function mouse(){
        return $this->belongsTo(InventoryMouse::class,  'mouse_id','id_mouse');
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
    return $query->select('detail_mouse_x_p_i_c_s.*', 'im.id_mouse', 'w.hostname', 'w.no_ip_address', 's.status', 'im.tanggal_input')
        ->join('inventory_mice as im', 'detail_mouse_x_p_i_c_s.mouse_id', '=', 'im.id_mouse')
        ->join('pics as p', 'detail_mouse_x_p_i_c_s.pic_id', '=', 'p.id')
        ->join('vendors as v', 'detail_mouse_x_p_i_c_s.vendor_id', '=', 'v.id')
        ->leftJoin('workstations as w', 'detail_mouse_x_p_i_c_s.workstation_id', '=', 'w.id')
        ->join('statuses as s', 'im.status_id', '=', 's.id')
        ->where('im.id_mouse', 'like', '%' . $keyword . '%')
        ->orWhere('w.hostname', 'like', '%' . $keyword . '%')
        ->orWhere('p.nama_pic', 'like', '%' . $keyword . '%')
        ->orWhere('v.id', 'like', '%' . $keyword . '%')
        ->orWhere('w.no_ip_address', 'like', '%' . $keyword . '%')
        ->orWhere('s.status', 'like', '%' . $keyword . '%')
        ->orWhere('im.tanggal_input', 'like', '%' . $keyword . '%');
    }
}