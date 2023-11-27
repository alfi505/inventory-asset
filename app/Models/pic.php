<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    use HasFactory;

    public function InventoryCpu(){
        return $this->hasMany(InventoryCpu::class);
    }

    protected $primaryKey = 'id_pic';
    protected $fillable = [
        'id_pic',
        'nama_komputer',
        'nama_pic',
        'kategori',
        'id_zona',
        'id_cpu',
        'id_monitor',
        'id_keyboard',
        'id_mouse',
        'id_printer',
        'id_network',
        'id_speaker',
        'id_posisi',
    ];
}