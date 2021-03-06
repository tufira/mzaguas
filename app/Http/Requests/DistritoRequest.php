<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistritoRequest extends FormRequest
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
            'nome'=>'required|min:3|max:60',
            'provincia'=>'required|min:4|max:30',
            'user_id'=>'required|integer|min:1'
        ];
    }
}
