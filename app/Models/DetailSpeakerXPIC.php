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
        return $this->belongsTo(InventorySpeaker::class,  'speaker_id','id_speaker');
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
}