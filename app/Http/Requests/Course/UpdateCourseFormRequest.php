<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\CourseModel as Course;
use Illuminate\Validation\Rule;
use Crypt;

class UpdateCourseFormRequest extends FormRequest
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
        
        $id = Crypt::decrypt($this->id);
        return [  
            'course_code' => ['required','string','max:100', Rule::unique('course')->ignore($id)],
            'course_description' => ['required','string','max:100', Rule::unique('course')->ignore($id)],
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'course_code.required' => 'This field is required!',
            'course_description.required' => 'This field is required!!',

            'course_code.unique' => 'This subject code '.Request::input('course_code').' exists please changed!',
            'course_description.unique' => 'This subject description '.Request::input('course_description').' already exists please changed!'

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
