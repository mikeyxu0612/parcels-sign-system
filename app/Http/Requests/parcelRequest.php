<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class parcelRequest extends FormRequest
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
            'A_ID'=>'required|string|min:1|max:100',
            'sign'=>'required|numeric|min:0|max:1',
            'Sign_proof'=>'required|string|min:2|max:100',
        ];
    }
    public function messages()
    {
        return[
          'A_ID.required'=>'住址為必填',
          'sign.required'=>'請填寫是否簽收，已簽收為“1”，否則為“0”。',
            'sign.min'=>'只能填0 and 1',
            'sign.max'=>'只能填0 and 1',
          'Sign_proof.required'=>'簽收人名字為必填',
          'Sign_proof.mix'=>'最少输入两个子元',
        ];
    }
}
