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
            'trade_name' => ['required', 'string'],
            'outlet_name' => ['required', 'string', 'unique:customers,outlet_name'],
            'customer_type' => ['required', 'exists:customer_types,id'],
            'customer_npwp' => ['required', 'string'],
            'phone_number' => ['required'],
            'customer_top' => ['required', 'numeric', 'min:1'],
            'street_name' => ['required', 'string'],
            'city' => ['required', 'string'],
            'province' => ['required', 'string'],
            'postal_code' => ['required', 'numeric', 'min: 1']
        ];
    }
}
