<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class UserRequest extends FormRequest
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
            'user_name' => ['required', 'string'],
            'user_password' => ['required', 'string', Rules\Password::defaults()],
            'user_email' => ['required', 'string', 'email', 'unique:users,email'],
            'role_id' => ['required', 'exists:roles,id']
        ];
    }
}
