<?php

namespace App\Models;

use App\Models\location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded=[];
    

    public function locations(){
        return $this->belongsTo(location::class,'location_id','id');
    }
}
