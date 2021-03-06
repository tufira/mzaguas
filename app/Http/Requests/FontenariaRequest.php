<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FontenariaRequest extends FormRequest
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
            'nome'=>'required|min:5|alpha'
            'endereco'=>'required|min:30|alpha'
            'email'=>'required|email|unique:cliente,email'
            'tel1'=>'required|min:5|alpha_num'
            'tel2'=>'required|min:5|alpha_num'
            
        ];
    }
}
