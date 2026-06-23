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
        'head_name',
        'head_phone',
        'head_email',
        'phone',
        'email',
        'location',
        'description',
        'show_on_homepage',
        'is_active',
    ];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function graduates()
    {
        return $this->hasManyThrough(
            Graduate::class,
            Department::class,
            'faculty_id',      // Foreign key on departments table
            'department_id',   // Foreign key on graduates table
            'id',              // Local key on faculties table
            'id'               // Local key on departments table
        );
    }
}
