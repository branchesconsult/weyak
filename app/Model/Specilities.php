<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Clinic;

class Specilities extends Model
{
    protected $table = 'specialities';
    public $timestamps=false;
    public function clinic()
    {
    	return $this->belongsToMany(Clinic::class,'clinic_speciality','speciality_id');
    }
}
