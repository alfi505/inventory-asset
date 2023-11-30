<?php

namespace App\Models;

use App\Models\DetailMonitorXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public function detailmonitor():HasOne{
        return $this->hasOne(DetailMonitorXPIC::class);
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