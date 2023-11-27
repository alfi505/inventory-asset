<?php

namespace App\Models;

use App\Models\InventoryMonitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public function monitor():HasOne{
        return $this->hasOne(InventoryMonitor::class);
    }

    protected $fillable =[
        'vendor_id',
        'nama',
        'perusahaan',
        'jabatan',
        'alamat',
        'kota',
        'daerah',
        'kode_pos',
        'no_telpon',
        'fax',
        'tambahan',
    ];
}
