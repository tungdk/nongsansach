<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
        $rules = [];
        if($this->id){
            $rules['name'] = 'required|unique:partners,name,'.$this->id;
            if($this->logo)
                $rules['logo'] = "required|image";
            return $rules;
        }
        $rules['name'] = 'required|unique:partners,name';
        $rules['logo'] = "required|image";
        return $rules;
    }
}
