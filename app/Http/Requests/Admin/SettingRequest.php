<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'map' => 'required',
            'time_work' => 'required',
            'fanpage' => 'required',
            'slogan' => 'required',
            'about_us' => 'required',
        ];
    }
}
