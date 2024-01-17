<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CpuXSoftware extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'CpuXSoftware';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'cpu_id',
        'software_id',
    ];

    public function cpu(){
        return $this->belongsTo(InventoryCpu::class, 'cpu_id', 'id_cpu');
    }
}