<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    protected $fillable = [
        // Personal
        'first_name',
        'last_name',
        'father_name',
        'gender',
        'birth_date',

        // Contact
        'phone',
        'email',
        'address',

        // Educational
        'student_id',
        'faculty_id',
        'department_id',
        'entry_year',
        'graduation_year',
        'degree',

        // Employment
        'is_employed',
        'company_name',
        'job_title',
        'work_location',
    ];
}