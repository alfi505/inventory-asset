<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\JenisPerangkat;
use App\Models\DetailSpeakerXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventorySpeaker extends Model
{
    use HasFactory;

    public function detailspeaker():HasMany{
        return $this->hasMany(DetailSpeakerXPIC::class);
    }

    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class);
    }

    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }

    protected $primaryKey = 'id_speaker';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_speaker',
        'id_merk',
        'id_jenisperangkat',
        'serial_number',
        'model_speaker',
        'admin',
        'tanggal_input',
        'keterangan',
        'id_status',
    ];
}
