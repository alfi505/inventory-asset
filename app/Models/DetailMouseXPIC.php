<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Workstation;
use App\Models\InventoryMouse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailMouseXPIC extends Model
{
    use HasFactory;

    public function mouse():BelongsTo{
        return $this->belongsTo(InventoryMouse::class);
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

    protected $primaryKey = 'id_detailmousexpic';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_detailmousexpic',
        'id_mouse',
        'id_pic',
        'id_vendor',
        'id_workstation',
    ];
}
