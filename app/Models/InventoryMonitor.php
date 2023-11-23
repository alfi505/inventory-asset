<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryMonitor extends Model
{
    use HasFactory;

    // @var array<int, string>

    // protected $table = 'inventory_monitors';
    protected $primaryKey = 'id_monitor';

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
        'status',
    ];
}