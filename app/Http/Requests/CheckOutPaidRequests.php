<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutPaidRequests extends FormRequest
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
            't_name'=> 'required|max:40',
            't_norek' => 'required',
            't_file' => 'required',
            't_total' => 'required',
            'email'=> 'required|max:40|email',
            'name' => 'required|max:60',
            'city' => 'required',
            'courir' => 'required',
            'number' => 'required',
            'zip' => 'required',
            'alamat' => 'required',
        ];
    }
}
