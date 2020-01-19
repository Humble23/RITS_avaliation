<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'name', 
        'email',
        'phone',
        'motivation',
        'linkedin_link', 
        'github_link',
        'english_level', 
        'salary',
        'curriculum'
    ];
}
