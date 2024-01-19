<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Workstation;
use App\Models\InventoryKeyboard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailKeyboardXPIC extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'detail_keyboard_x_p_i_c_s';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'keyboard_id',
        'pic_id',
        'vendor_id',
        'workstation_id',
    ];

    public function keyboard(){
        return $this->belongsTo(InventoryKeyboard::class, 'keyboard_id');
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
        return $query->select('detail_keyboard_x_p_i_c_s.*', 'ik.id_keyboard', 'w.hostname', 'w.no_ip_address', 's.status', 'ik.tanggal_input')
        ->join('inventory_keyboards as ik', 'detail_keyboard_x_p_i_c_s.keyboard_id', '=', 'ik.id_keyboard')
        ->join('pics as p', 'detail_keyboard_x_p_i_c_s.pic_id', '=', 'p.id')
        ->join('vendors as v', 'detail_keyboard_x_p_i_c_s.vendor_id', '=', 'v.id')
        ->leftJoin('workstations as w', 'detail_keyboard_x_p_i_c_s.workstation_id', '=', 'w.id')
        ->join('statuses as s', 'ik.status_id', '=', 's.id')
        ->where('ik.id_keyboard', 'like', '%' . $keyword . '%')
        ->orWhere('p.nama_pic', 'like', '%' . $keyword . '%')
        ->orWhere('w.no_ip_address', 'like', '%' . $keyword . '%');
    }
}