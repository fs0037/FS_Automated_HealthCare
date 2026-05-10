<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model{

    protected $table = 'contact_queries';

    protected $fillable = [
        'fullname',
        'emailid',
        'mobileno',
        'description'
    ];

    public $timestamps = true;
}