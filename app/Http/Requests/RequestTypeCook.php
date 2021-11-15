<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTypeCook extends FormRequest
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
            'tc_name' => 'required|unique:type_cooks,tc_name,'.$this->id
        ];
    }
    public function messages()
    {
        return [
            'tc_name.required'=>'Tên loại ẩm thực không được để trống.',
            'tc_name.unique' => 'Tên loại ẩm thực đã tồn tại.',
        ];
    }

}
