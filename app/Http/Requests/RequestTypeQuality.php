<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTypeQuality extends FormRequest
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
            'tq_name' => 'required|unique:type_qualitys,tq_name,'.$this->id
        ];
    }
    public function messages()
    {
        return [
            'tq_name.required'=>'Tên phần chất lượng không được để trống.',
            'tq_name.unique' => 'Tên phần chất lượng đã tồn tại.',
        ];
    }
}
