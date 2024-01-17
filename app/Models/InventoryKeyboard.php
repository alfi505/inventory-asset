<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\Status;
use App\Models\JenisPerangkat;
use App\Models\DetailKeyboardXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryKeyboard extends Model
{
    use HasFactory;

    protected $guarded = ['id_keyboard'];
    protected $primaryKey = 'id_keyboard';
    protected $table = 'inventory_keyboards';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_keyboard',
        // 'no_keyboard',
        'merk_id',
        'jenisperangkat_id',
        'serial_number',
        'model_keyboard',
        'admin',
        'tanggal_input',
        'keterangan',
        'status_id',
    ];

    public function detailkeyboard(){
        return $this->hasMany(DetailKeyboardXPIC::class, 'keyboard_id');
    }

    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class, 'merk_id', 'id');
    }

    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }
    public function status():BelongsTo{
        return $this->belongsTo(Status::class);
    }
}