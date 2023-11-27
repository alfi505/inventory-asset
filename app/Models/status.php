<?php

namespace App\Models;

use App\Models\InventoryMonitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Status extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';
    public function monitor():HasOne{
        return $this->hasOne(InventoryMonitor::class);
    }

    protected $fillable =[
        'status_id',
        'status',
        'keterangan',
    ];
}