<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePromotionRequest extends FormRequest
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
            'nazwa_promocji'=>'required',
          'opis_promocji'=>'required',
           'kod_promocji'=>'required',
           'wartosc_promocji'=>'required',
            'promocja_od'=>'required',
            'promocja_do'=>'required'
              
        ];
    }
}
