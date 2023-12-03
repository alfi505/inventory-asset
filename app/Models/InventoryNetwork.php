<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\JenisPerangkat;
use App\Models\DetailNetworkXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryNetwork extends Model
{
    use HasFactory;

    public function detailnetwork():HasMany{
        return $this->hasMany(DetailNetworkXPIC::class);
    }

    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class);
    }

    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }

    protected $primaryKey = 'id_network';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_network',
        'id_merk',
        'id_jenisperangkat',
        'serial_number',
        'model_network',
        'admin',
        'tanggal_input',
        'keterangan',
        'id_status',
    ];
}