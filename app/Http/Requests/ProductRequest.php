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

            'name'=>'required|max:255',
            'price'=>'required',
            'qty '=>'required',
            'description '=>'required',

            ];


    }
}
