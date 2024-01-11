<?php

namespace App\Models;

use App\Models\InventoryMouse;
use App\Models\InventoryMonitor;
use App\Models\InventoryNetwork;
use App\Models\InventoryPrinter;
use App\Models\InventorySpeaker;
use App\Models\InventoryKeyboard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisPerangkat extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'jenis_perangkats';
    protected $fillable =[
        'id_detail',
        'jenisperangkat',
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
    public function network():HasOne{
        return $this->hasOne(InventoryNetwork::class);
    }
    public function printer():HasOne{
        return $this->hasOne(InventoryPrinter::class);
    }
    public function speaker():HasOne{
        return $this->hasOne(InventorySpeaker::class);
    }

}