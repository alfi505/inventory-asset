<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\Status;
use App\Models\JenisPerangkat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryMonitor extends Model
{
    use HasFactory;

    public function status():BelongsTo{
        return $this->belongsTo(Status::class);
    }

    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class);
    }

    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }

    public function vendor():BelongsTo{
        return $this->belongsTo(Vendor::class);
    }

    protected $primaryKey = 'id_monitor';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_monitor',
        'nama_komputer',
        'nama_pic',
        'id_cpu',
        'id_merk',
        'id_jenisperangkat',
        'id_ip',
        'serial_number',
        'model_monitor',
        'id_posisi',
        'admin',
        'id_vendor',
        'keterangan',
        'id_status',
    ];
}
