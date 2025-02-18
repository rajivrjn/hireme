<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'sector',
        'activities',
        'address',
        'city',
        'office_phone',
        'mobile',
        'fax',
        'email',
        'BRN',
        'company_size',
    ];
}
