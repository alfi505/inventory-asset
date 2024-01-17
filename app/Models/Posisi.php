<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany(Pic::class, 'posisi_id', 'id');
    }
}