<?php

namespace App\Models;

use App\Models\Merk;
use App\Models\JenisPerangkat;
use App\Models\DetailPrinterXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryPrinter extends Model
{
    use HasFactory;

    public function detailprinter():HasMany{
        return $this->hasMany(DetailPrinterXPIC::class);
    }

    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class);
    }

    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }

    protected $guarded = ['id_printer'];
    protected $primaryKey = 'id_printer';
    protected $table = 'inventory_printers';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_printer',
        'merk_id',
        'jenisperangkat_id',
        'serial_number',
        'model_printer',
        'admin',
        'tanggal_input',
        'keterangan',
        'status_id',
    ];
}
