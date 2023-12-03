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

class Workstation extends Model
{
    use HasFactory;

    public function monitorxpic():HasOne{
        return $this->hasOne(DetailMonitorXPIC::class);
    }
    public function keyboardxpic():HasOne{
        return $this->hasOne(DetailKeyboardXPIC::class);
    }
    public function mousexpic():HasOne{
        return $this->hasOne(DetailMouseXPIC::class);
    }
    public function networkxpic():HasOne{
        return $this->hasOne(DetailNetworkXPIC::class);
    }
    public function printerxpic():HasOne{
        return $this->hasOne(DetailPrinterXPIC::class);
    }
    public function speakerxpic():HasOne{
        return $this->hasOne(DetailSpeakerXPIC::class);
    }

    // protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable =[
        'no_ip_address',
        'hostname',
    ];
}
