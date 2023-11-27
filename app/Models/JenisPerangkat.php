<?php

namespace App\Models;

use App\Models\InventoryMonitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisPerangkat extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public function monitor():HasOne{
        return $this->hasOne(InventoryMonitor::class);
    }

    protected $fillable =[
        'jenisperangkat_id',
        'jenisperangkat',
        'keterangan',
    ];
}