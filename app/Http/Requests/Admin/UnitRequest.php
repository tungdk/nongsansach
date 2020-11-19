<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UnitRequest extends FormRequest
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
        if($this->id){
            $rules = [
                'name' => 'required|unique:units,name,'.$this->id
            ];
            return $rules;
        }
        $rules = [
            'name' => 'required|unique:units,name|max:50',
        ];
        return $rules;
    }
}
