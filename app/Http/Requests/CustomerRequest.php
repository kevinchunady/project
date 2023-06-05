<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'customer_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'customer_type' => ['required', 'exists:customer_types'],
            'customer_npwp' => ['required', 'string'],
            'phone_number' => ['required', 'regex:/^(\+?\d{1,3}[-.])?\(?\d{3}\)?[-.]?\d{3}[-.]?\d{4}$/'],
            'customer_top' => ['required', 'numeric', 'min:1']
        ];
    }
}
