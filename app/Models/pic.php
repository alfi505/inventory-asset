<?php

namespace App\Models;

use App\Models\DetailMouseXPIC;
use App\Models\DetailMonitorXPIC;
use App\Models\DetailNetworkXPIC;
use App\Models\DetailPrinterXPIC;
use App\Models\DetailSpeakerXPIC;
use App\Models\DetailKeyboardXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pic extends Model
{
    use HasFactory;

    public function monitor():HasMany{
        return $this->hasMany(DetailMonitorXPIC::class);
    }
    public function keyboard():HasMany{
        return $this->hasMany(DetailKeyboardXPIC::class);
    }
    public function mouse():HasMany{
        return $this->hasMany(DetailMouseXPIC::class);
    }
    public function network():HasMany{
        return $this->hasMany(DetailNetworkXPIC::class);
    }
    public function printer():HasMany{
        return $this->hasMany(DetailPrinterXPIC::class);
    }
    public function speaker():HasMany{
        return $this->hasMany(DetailSpeakerXPIC::class);
    }

    protected $primaryKey = 'id_pic';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_pic',
        'nama_komputer',
        'nama_pic',
        'kategori',
        'id_zona',
        'id_cpu',
        'id_detailmonitorxpic',
        'id_keyboard',
        'id_mouse',
        'id_printer',
        'id_network',
        'id_speaker',
        'id_posisi',
    ];
}