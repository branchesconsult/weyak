<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClinicSpecility extends Model
{
     protected $table = 'clinic_speciality';
     public $timestamps=false;
    protected $fillable = ['clinic_id', 'speciality_id'];
}
