<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {

        return [

            'name' => 'required|unique:products|max:255',
            'price'=>'required',
            'qty '=>'required',
            'image '=>'required',
            'description '=>'required',

            ];


    }
}
