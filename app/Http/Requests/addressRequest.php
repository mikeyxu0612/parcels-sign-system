<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addressRequest extends FormRequest
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
            //
            'phone'=>'required|string|min:10|max:100',
        ];
    }
    public function messages()
    {
        return[
            'phone.required'=>'電話為必填項目',
            'phone.min'=>'電話應為十個數字號碼',
        ];
    }
}
