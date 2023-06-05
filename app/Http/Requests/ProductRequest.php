<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => ['required', 'string'],
            'product_price' => ['required', 'numeric', 'min:1'],
            'product_picture' => ['required', 'file', 'mimes: jpg,png,jpeg', 'max: 2048'],
            'product_weight' => ['required', 'numeric', 'min:1']
        ];
    }
}
