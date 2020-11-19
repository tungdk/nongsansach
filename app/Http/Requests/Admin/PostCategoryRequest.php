<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostCategoryRequest extends FormRequest
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
                'name' => 'required|unique:post_categories,name,'.$this->id
            ];
            return $rules;
        }
        $rules = [
            'name' => 'required|unique:post_categories,name|max:50',
        ];
        return $rules;
    }
}
