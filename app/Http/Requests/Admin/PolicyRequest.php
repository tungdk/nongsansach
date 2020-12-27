<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PolicyRequest extends FormRequest
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
            'policy_content'=>'required',
            'status' => 'boolean'
        ];
        if ($this->id) {
            $rules['name'] = "required|unique:policies,name," . $this->id;
            return $rules;
        }
        $rules['name'] = "required|unique:policies,name";
        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['messages'=>$validator->errors()], 422));
    }
}
