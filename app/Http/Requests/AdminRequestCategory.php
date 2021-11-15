<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //change false -> true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required | unique:categories,c_name,'.$this->id //$this->>id để khi ta edit sẽ loại bỏ chính cái id phần tử mà ta đang edit
//            'icon'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên danh mục không được để trống.',
            'name.unique' => 'Tên danh mục đã tồn tại.',
//            'icon.required'=>'Tên icon không được để trống.'
        ];
    }
}
