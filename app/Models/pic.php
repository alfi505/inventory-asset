<?php

namespace App\Models;

use App\Models\Workstation;
use App\Models\DetailMonitorXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pic extends Model
{
    use HasFactory;

    public function monitor():HasMany{
        return $this->hasMany(DetailMonitorXPIC::class);
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