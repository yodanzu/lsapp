<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreCourseFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [  
            'course_code' => 'required|unique:course,course_code|string|max:100',
            'course_description' => 'required|unique:course,course_description|string|max:100',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'course_code.required' => 'This field is required!',
            'course_description.required' => 'This field is required!!',
            'course_code.unique' => 'This is already exists please changed!',
            'course_description.unique' => 'This is already exists please changed!'
        ];
    }

    public function getData()
    {
        $data = $this->only([
            'course_code',
            'course_description',
            'status'
        ]);

        return $data;
    }
}
