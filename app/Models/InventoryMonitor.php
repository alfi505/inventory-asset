<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\Status;
use App\Models\JenisPerangkat;
use App\Models\DetailMonitorXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        // 'no_monitor',
        'merk_id',
        'jenisperangkat_id',
        'serial_number',
        'model_monitor',
        'admin',
        'tanggal_input',
        'keterangan',
        'status_id',
    ];

    public function detailmonitor(){
        return $this->hasMany(DetailMonitorXPIC::class, 'monitor_id');
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
    public function workstation():BelongsTo{
        return $this->belongsTo(Workstation::class);
    }
}