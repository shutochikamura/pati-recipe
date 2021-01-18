<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardRequest extends FormRequest
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
            'title' => 'required',
            'material' => 'required',
            'recipe' => 'required'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'お菓子名を入力して下さい',
            'material.required' => '材料名を入力して下さい',
            'recipe.required' => '作り方を入力ください'
        ];
    }

}
