<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}