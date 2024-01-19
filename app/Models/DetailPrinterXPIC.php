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

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'detail_printer_x_p_i_c_s';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'printer_id',
        'pic_id',
        'vendor_id',
        'workstation_id',
    ];

    public function printer(){
        return $this->belongsTo(InventoryPrinter::class,  'printer_id','id_printer');
    }

    public function pic():BelongsTo{
        return $this->belongsTo(Pic::class, 'pic_id', 'id');
    }

    public function workstation():BelongsTo{
    return $this->belongsTo(Workstation::class, 'workstation_id', 'id');
    }

    public function vendor():BelongsTo{
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
    public function scopeSearch($query, $keyword){
    return $query->select('detail_printer_x_p_i_c_s.*', 'ip.id_printer', 'w.hostname', 'w.no_ip_address', 's.status', 'ip.tanggal_input')
        ->join('inventory_printers as ip', 'detail_printer_x_p_i_c_s.printer_id', '=', 'ip.id_printer')
        ->join('pics as p', 'detail_printer_x_p_i_c_s.pic_id', '=', 'p.id')
        ->join('vendors as v', 'detail_printer_x_p_i_c_s.vendor_id', '=', 'v.id')
        ->leftJoin('workstations as w', 'detail_printer_x_p_i_c_s.workstation_id', '=', 'w.id')
        ->join('statuses as s', 'ip.status_id', '=', 's.id')
        ->where('ip.id_printer', 'like', '%' . $keyword . '%')
        ->orWhere('w.hostname', 'like', '%' . $keyword . '%')
        ->orWhere('p.nama_pic', 'like', '%' . $keyword . '%')
        ->orWhere('v.id', 'like', '%' . $keyword . '%')
        ->orWhere('w.no_ip_address', 'like', '%' . $keyword . '%')
        ->orWhere('s.status', 'like', '%' . $keyword . '%')
        ->orWhere('ip.tanggal_input', 'like', '%' . $keyword . '%');
    }
}