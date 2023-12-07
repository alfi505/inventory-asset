<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\JenisPerangkat;
use App\Models\DetailMonitorXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InventoryMonitor extends Model
{
    use HasFactory;

    protected $guarded = ['id_monitor'];
    protected $primaryKey = 'id_monitor';
    protected $table = 'inventory_monitors';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_monitor',
        'merk_id',
        'jenisperangkat_id',
        'serial_number',
        'model_monitor',
        'admin',
        'tanggal_input',
        'keterangan',
        'status_id',
    ];

    public function detailmonitor():HasMany{
        return $this->hasMany(DetailMonitorXPIC::class);
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