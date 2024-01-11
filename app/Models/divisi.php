<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}