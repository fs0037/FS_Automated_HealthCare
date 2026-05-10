<?php

namespace App\Models\Patient;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
    use Notifiable;

    protected $table = 'patients';

    protected $fillable = [
        'userid',
        'name', 
        'email',  
        'phone', 
        'address', 
        'gender', 
        'age', 
        'role',
        'password'
    ];

    public static function generatePatientId()
    {
        $lastUser = self::orderBy('id', 'desc')->first();

        if (!$lastUser) {
            $number = 1;
        } else {
            $lastIdNumber = intval(substr($lastUser->userid, 5)); 
            $number = $lastIdNumber + 1;
        }

        return 'SF' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

}