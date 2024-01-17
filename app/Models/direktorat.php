<?php

namespace App\Models;

use App\Models\Posisi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Direktorat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'direktorats';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'direktorat',
        'keterangan',
    ];

    public function posisi(){
        return $this->hasMany(Posisi::class, 'direktorat_id', 'id');
    }
}