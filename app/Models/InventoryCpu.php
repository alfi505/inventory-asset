<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryCpu extends Model
{
    use HasFactory;

    // protected $guarded = ['id_cpu'];
    public function pic(){
        return $this->belongsTo(Pic::class);
    }

    protected $primaryKey = 'id_cpu';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_cpu',
        'nama_komputer',
        'nama_pic',
        'zona',
        'id_ip',
        'kategori',
        'serial_number',
        'os',
        'processor',
        'mainvoard',
        'ram',
        'rom',
        'vga',
        'soundcard',
        'cdroom',
        'nic',
        'mac',
        'casing',
        'id_vendor',
        'id_software',
        'tanggal_input',
        'status',
    ];
}