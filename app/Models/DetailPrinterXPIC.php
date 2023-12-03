<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Workstation;
use App\Models\InventoryPrinter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPrinterXPIC extends Model
{
    use HasFactory;

    public function printer():BelongsTo{
        return $this->belongsTo(InventoryPrinter::class);
    }

    public function pic():BelongsTo{
        return $this->belongsTo(Pic::class);
    }

        public function workstation():BelongsTo{
        return $this->belongsTo(Workstation::class);
    }

    public function vendor():BelongsTo{
        return $this->belongsTo(Vendor::class);
    }

    protected $primaryKey = 'id_detailprinterxpic';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_detailprinterxpic',
        'id_printer',
        'id_pic',
        'id_vendor',
        'id_workstation',
    ];
}
