<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required|max:40|email',
            'weight' => 'required|max:60',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'file' => 'required',
            'file.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
