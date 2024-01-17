<?php

namespace App\Models;

use App\Models\Posisi;
use App\Models\Workstation;
use App\Models\DetailCpuXPIC;
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

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'pics';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_pic',
        'posisi_id',
        'id_cpu',
        'id_monitor',
        'id_keyboard',
        'id_mouse',
        'id_printer',
        'id_network',
        'id_speaker',
    ];
    public function monitor():HasMany{
        return $this->hasMany(DetailMonitorXPIC::class, 'id', 'detailmonitorxoic_id');
    }
    public function keyboard():HasMany{
        return $this->hasMany(DetailKeyboardXPIC::class);
    }
    public function cpu():HasMany{
        return $this->hasMany(DetailCpuXPIC::class);
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
    public function posisi(){
        return $this->belongsTo(Posisi::class, 'posisi_id', 'id');
    }
    public function workstation(){
    return $this->belongsTo(Workstation::class, 'workstation_id');
    }
}