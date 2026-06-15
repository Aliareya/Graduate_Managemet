<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'code',
        'faculty_id',

        'head_name',
        'head_degree',
        'head_specialization',
        'head_phone',
        'head_email',
        'start_year',

        'location',
        'phone',
        'email',

        'description',

        'status',
        'show_on_homepage',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
