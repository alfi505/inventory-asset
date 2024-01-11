<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Workstation;
use App\Models\InventoryKeyboard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        return $this->belongsTo(InventoryKeyboard::class, 'keyboard_id', 'id_keyboard');
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

}