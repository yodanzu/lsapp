<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    protected $table = 'course';


    protected $fillable = [
    	'course_code',
    	'course_description',
    	'status'	
    ];

   	
   	public static $rules = [

        'course_code' => 'required|unique:course,course_code|string|max:100',
        'course_description' => 'required|unique:course,course_description|string|max:100',
        'status' => 'required'
   	];

}
