<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildingRequest extends FormRequest
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
            'B_Name'=>'required|string|min:1|max:100',
        ];
    }
   public function messages()
   {
      return[
        'B_Name.required'=>'樓層為必填',
          'B_Name.min'=>'至少输入一个子元',
      ];
   }
}
