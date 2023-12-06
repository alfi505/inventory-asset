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

    public function detailmonitor():HasMany{
        return $this->hasMany(DetailMonitorXPIC::class);
    }

    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class);
    }

    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }

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
}
