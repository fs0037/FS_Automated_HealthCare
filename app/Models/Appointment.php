<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'doctorId', 'userId', 'doctorSpecialization', 
        'appointmentDate', 'appointmentTime', 'userStatus', 'doctorStatus'
    ];
}
