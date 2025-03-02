<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'email'=>'required|unique:users,email',
            'username'=>'required|unique:users,username',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password',



        ];
    }
}
