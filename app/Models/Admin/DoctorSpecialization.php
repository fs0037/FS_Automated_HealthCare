<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DoctorSpecialization extends Model
{
    protected $table = 'doctor_specializations';
    protected $fillable = ['specilization'];
}

