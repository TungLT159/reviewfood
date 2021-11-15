<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestArea extends FormRequest
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
            'ar_name' => 'required|unique:areas,ar_name,'.$this->id
        ];
    }
    public function messages()
    {
        return [
            'ar_name.required'=>'Tên khu vực không được để trống.',
            'ar_name.unique' => 'Tên khu vực đã tồn tại.',
        ];
    }
}
