<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Specilities;

class Clinic extends Model
{
    protected $table='clinics';
    public $timestamps=false;

    public function specilities()
    {
    	return $this->belongsToMany(Specilities::class,'clinic_speciality','clinic_id','speciality_id');
    }
}
