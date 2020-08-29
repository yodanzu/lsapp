<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserStoreFormRequest extends FormRequest
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
            'firstName' => 'required|unique:users,firstName|string|max:100',
            'lastName' => 'required|unique:users,lastName|string|max:100',
            'birthDate' => 'required',
            'address' => 'required|unique:users,address|string|max:100',
            'phoneNumber' => 'required|unique:users,phoneNumber|integer|max:11',
            'userType' => 'required',
            'email' => 'required|unique:users,email|string|max:100',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'firstName.required' => 'This field is required!',
            'lastName.required' => 'This field is required!',
            'birthDate.required' => 'This field is required!',
            'address.required' => 'This field is required!',
            'phoneNumber.required' => 'This field is required!',
            'userType.required' => 'This field is required!',
            'email.required' => 'This field is required!',
            'password.required' => 'This field is required!',

            'firstName.unique' => 'This is already exists please change it!',
            'lastName.unique' => 'This is already exists please change it!',
            'address.unique' => 'This is already exists please change it!',
            'phoneNumber.unique' => 'This is already exists please change it!',
            'email.unique' => 'This is already exists please change it!'

        ];
    }

    public function getData()
    {
        $data = $this->only([
            'firstName',
            'lastName',
            'birthDate',
            'address',
            'phoneNumber',
            'userType',
            'email',
            'password'
        ]);

        return $data;

    }
}
