<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model{

    protected $table = 'tblpage';

    protected $primaryKey = 'id';

    protected $fillable = [
        'PageType',
        'PageTitle',
        'PageDescription',
        'Email',
        'MobileNumber',
        'OpenningTime',
        'Address'
    ];
}