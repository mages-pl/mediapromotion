<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSliderRequest extends FormRequest
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
            'nazwa_slidera'=>'required',
            // 'obrazek_slidera'=>'mimes:jpg,jpeg',
              'status_slidera'=>'required',
              'link_slidera'=>'required'
        ];
    }
}
