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

    protected $guarded = ['id_network'];
    protected $primaryKey = 'id_network';
    protected $table = 'inventory_networks';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id_network',
        'merk_id',
        'jenisperangkat_id',
        'serial_number',
        'model_network',
        'admin',
        'tanggal_input',
        'keterangan',
        'status_id',
    ];

    public function detailnetwork():HasMany{
        return $this->hasMany(DetailNetworkXPIC::class);
    }
    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class);
    }
    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }
    public function status():BelongsTo{
        return $this->belongsTo(Status::class);
    }
}