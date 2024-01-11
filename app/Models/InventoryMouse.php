<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\Status;
use App\Models\JenisPerangkat;
use App\Models\DetailMouseXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryMouse extends Model
{
    use HasFactory;

    protected $guarded = ['id_mouse'];
    protected $primaryKey = 'id_mouse';
    protected $table = 'inventory_mice';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_mouse',
        'no_mouse',
        'merk_id',
        'jenisperangkat_id',
        'serial_number',
        'model_mouse',
        'admin',
        'tanggal_input',
        'keterangan',
        'status_id',
    ];

    public function detailmouse():HasMany{
        return $this->hasMany(DetailMouseXPIC::class);
    }

    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class);
    }

    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }

    public function status():BelongsTo{
        return $this->belongsTo(Status::class);
    }

}