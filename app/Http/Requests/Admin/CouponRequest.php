<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
        $rules = [
          'name' => 'required',
          'sale' => 'required|numeric',
          'count' => 'required|numeric'
        ];
        if($this->id){
            $rules['code'] = 'required|unique:coupons,code,'.$this->id;
        }
        $rules['code'] = 'required|unique:coupons,code';
        return $rules;
    }

}
