<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product_transjectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'store_id'=>'required|max:255',
            'rack_id'=>'required',
            'box_id'=>'required',
            'product_id'=>'required',
            'qty'=>'required',
            'status'=>'required',
        ];
    }
}
