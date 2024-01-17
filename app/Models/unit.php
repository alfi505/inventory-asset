<?php

namespace App\Models;

use App\Models\Posisi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'units';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'unit',
        'keterangan',
    ];

    public function posisi(){
        return $this->hasMany(Posisi::class, 'unit_id', 'id');
    }
}