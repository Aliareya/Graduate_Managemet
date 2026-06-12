<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'name',
        'code',
        'established_year',
        'logo',
        'dean_name',
        'dean_phone',
        'dean_email',
        'phone',
        'email',
        'location',
        'description',
        'show_on_homepage',
        'is_active',
    ];
}
