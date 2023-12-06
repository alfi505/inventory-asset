<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\JenisPerangkat;
use App\Models\DetailKeyboardXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryKeyboard extends Model
{
    use HasFactory;

    public function detailkeyboard():HasMany{
        return $this->hasMany(DetailKeyboardXPIC::class);
    }

    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class);
    }

    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }

    protected $guarded = ['id_keyboard'];
    protected $primaryKey = 'id_keyboard';
    protected $table = 'inventory_keyboards';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_keyboard',
        'id_merk',
        'id_jenisperangkat',
        'serial_number',
        'model_keyboard',
        'admin',
        'tanggal_input',
        'keterangan',
        'id_status',
    ];
}