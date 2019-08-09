<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequests extends FormRequest
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
            'email'=> 'required|max:40|email',
            'name' => 'required|max:60',
            'city_id' => 'required',
            'courir' => 'required',
            'number' => 'required|number',
            'zip' => 'required|number',
            'alamat' => 'required',
        ];
    }
}
