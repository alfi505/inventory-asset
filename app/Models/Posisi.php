<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Unit;
use App\Models\Divisi;
use App\Models\Direktorat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class posisi extends Model
{
    use HasFactory;

    public function dir(){
        return $this->belongsTo(Direktorat::class, 'direktorat_id', 'id');
    }
    public function div(){
        return $this->belongsTo(Divisi::class, 'divisi_id', 'id');
    }
    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
    public function pic(){
        return $this->hasOne(Pic::class, 'posisi_id', 'id');
    }
}