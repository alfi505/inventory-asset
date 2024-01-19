<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Status;
use App\Models\DetailCpuXPIC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryCpu extends Model
{
    use HasFactory;

    // protected $guarded = ['id_cpu'];
    protected $guarded = ['id_cpu'];
    protected $primaryKey = 'id_cpu';
    protected $table = 'inventory_cpus';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_cpu',
        'hostname',
        'jenisperangkat_id',
        'merk_id',
        'zona',
        'kategori',
        'serial_number',
        'os',
        'processor',
        'mainboard',
        'ram',
        'rom',
        'vga',
        'soundcard',
        'cdroom',
        'nic',
        'mac',
        'casing',
        'admin',
        'tanggal_input',
        'status_id',
    ];

    public function pic(){
        return $this->belongsTo(Pic::class);
    }
    public function detailcpu():HasMany{
        return $this->hasMany(DetailCpuXPIC::class);
    }
    public function merk():BelongsTo{
        return $this->belongsTo(Merk::class, 'merk_id', 'id');
    }
    public function jenisperangkat():BelongsTo{
        return $this->belongsTo(JenisPerangkat::class);
    }
    public function status():BelongsTo{
        return $this->belongsTo(Status::class);
    }
    public function scopeSearch($query, $keyword)
    {
        return $query->where('id_cpu', 'like', '%' . $keyword . '%')
            ->orWhereHas('merk', function ($query) use ($keyword) {
                $query->where('merk', 'like', '%' . $keyword . '%');
            })
            ->orWhereHas('jenisperangkat', function ($query) use ($keyword) {
                $query->where('jenisperangkat', 'like', '%' . $keyword . '%');
            })
            ->orWhereHas('status', function ($query) use ($keyword) {
                $query->where('status', 'like', '%' . $keyword . '%');
            });
    }
}