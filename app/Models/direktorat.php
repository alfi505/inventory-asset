<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}