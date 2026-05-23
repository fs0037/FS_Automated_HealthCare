<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $fillable = [
        'userid', 'specilization', 'doctorName', 'address', 'docFees', 'contactno', 'docEmail', 'password'
    ];

    public static function generateDoctorId()
    {
        $latestDoctor = self::orderBy('id', 'desc')->first();

        if (!$latestDoctor || empty($latestDoctor->userid)) {
            return 'DOC-1001';
        }

        $lastIdNumber = (int) str_replace('DOC-', '', $latestDoctor->userid);
        return 'DOC-' . ($lastIdNumber + 1);
    }
}
