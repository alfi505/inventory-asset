<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Vendor;
use App\Models\Workstation;
use App\Models\InventorySpeaker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailSpeakerXPIC extends Model
{
    use HasFactory;

     protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'detail_speaker_x_p_i_c_s';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'speaker_id',
        'pic_id',
        'vendor_id',
        'workstation_id',
    ];

    public function speaker(){
        return $this->belongsTo(InventorySpeaker::class,  'speaker_id');
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
    return $query->select('detail_speaker_x_p_i_c_s.*', 'is.id_speaker', 'w.hostname', 'w.no_ip_address', 's.status', 'is.tanggal_input')
        ->join('inventory_speakers as is', 'detail_speaker_x_p_i_c_s.speaker_id', '=', 'is.id_speaker')
        ->join('pics as p', 'detail_speaker_x_p_i_c_s.pic_id', '=', 'p.id')
        ->join('vendors as v', 'detail_speaker_x_p_i_c_s.vendor_id', '=', 'v.id')
        ->leftJoin('workstations as w', 'detail_speaker_x_p_i_c_s.workstation_id', '=', 'w.id')
        ->join('statuses as s', 'is.status_id', '=', 's.id')
        ->where('is.id_speaker', 'like', '%' . $keyword . '%')
        ->orWhere('w.hostname', 'like', '%' . $keyword . '%')
        ->orWhere('p.nama_pic', 'like', '%' . $keyword . '%')
        ->orWhere('w.no_ip_address', 'like', '%' . $keyword . '%');
    }
}