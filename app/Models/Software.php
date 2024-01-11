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

class Software extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'software';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_software',
    ];

    public function monitor():HasMany{
        return $this->hasMany(DetailMonitorXPIC::class, 'id', 'detailmonitorxoic_id');
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
}