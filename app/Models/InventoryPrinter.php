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

    protected $primaryKey = 'id_printer';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_printer',
        'id_merk',
        'id_jenisperangkat',
        'serial_number',
        'model_printer',
        'admin',
        'tanggal_input',
        'keterangan',
        'id_status',
    ];
}