<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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

            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'is_active' => 'required',
            'password' => 'required',

        ];
    }



    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'email.required'  => 'An email is required',
            'role_id.required'  => 'A role is required',
            'is_active.required'  => 'A status is required',
            'password.required'  => 'A password is required',
        ];
    }


}
