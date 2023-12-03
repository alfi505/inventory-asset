<?php

namespace App\Models;

use App\Models\DetailMouseXPIC;
use App\Models\DetailMonitorXPIC;
use App\Models\DetailNetworkXPIC;
use App\Models\DetailPrinterXPIC;
use App\Models\DetailSpeakerXPIC;
use App\Models\DetailKeyboardXPIC;
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
    public function detailmouse():HasOne{
        return $this->hasOne(DetailMouseXPIC::class);
    }
    public function detailkeyboard():HasOne{
        return $this->hasOne(DetailKeyboardXPIC::class);
    }
    public function detailnetwork():HasOne{
        return $this->hasOne(DetailNetworkXPIC::class);
    }
    public function detailprinter():HasOne{
        return $this->hasOne(DetailPrinterXPIC::class);
    }
    public function detailspeaker():HasOne{
        return $this->hasOne(DetailSpeakerXPIC::class);
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