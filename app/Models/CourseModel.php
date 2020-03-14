<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    protected $table = 'course';

    protected $fillable = [
    	'course_code',
    	'course_description'
    ];
    
    
    
}
