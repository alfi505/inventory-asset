<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InventoryMonitor extends Model
{
    use HasFactory;

    public function status():BelongsTo{
        return $this->belongsTo(Status::class);
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
