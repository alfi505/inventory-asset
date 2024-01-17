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
    protected $table = 'statuses';
    protected $fillable =[
        'status',
        'keterangan',
    ];
    public function monitor():HasOne{
        return $this->hasOne(InventoryMonitor::class);
    }
    public function keyboard():HasOne{
        return $this->hasOne(InventoryKeyboard::class);
    }
    public function mouse():HasOne{
        return $this->hasOne(InventoryMouse::class);
    }
    public function cpu():HasOne{
        return $this->hasOne(InventoryCpu::class);
    }
    public function printer():HasOne{
        return $this->hasOne(InventoryPrinter::class);
    }
    public function speaker():HasOne{
        return $this->hasOne(InventorySpeaker::class);
    }
    public function network():HasOne{
        return $this->hasOne(InventoryNetwork::class);
    }
}