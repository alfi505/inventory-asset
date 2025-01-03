<?php

namespace App\Models;

use App\Models\Posisi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Divisi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'divisis';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'divisi',
        'keterangan',
    ];

    public function posisi(){
        return $this->hasMany(Posisi::class, 'divisi_id', 'id');
    }
}