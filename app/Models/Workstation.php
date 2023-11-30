<?php

namespace App\Models;

use App\Models\DetailMonitorXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Workstation extends Model
{
    use HasFactory;

    public function monitorxpic():HasOne{
        return $this->hasOne(DetailMonitorXPIC::class);
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