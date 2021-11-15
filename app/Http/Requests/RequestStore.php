<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStore extends FormRequest
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
            'st_name'=>'required | unique:stores,st_name,'.$this->id,
            'st_category_id'=>'required',
            'st_area_id'=>'required',
//            'st_avatar'=>'required',
            'st_typeProduct_id'=>'required',
            'st_price' => 'required',
            'st_address' => 'required',
            'st_timeOpen' => 'required',
            'st_typeCook_id'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'st_name.required'=>'Tên sản phẩm không được để trống.',
            'st_name.unique' => 'Tên sản phẩm đã tồn tại.',
            'st_category_id.required'=>'Thể loại sản phẩm không được để trống.',
//            'st_avatar.required'=>'Hình ảnh không được để trống.',
            'st_typeCook_id.required'=>'Loại ẩm thực không được để trống.',
            'st_typeProduct_id.required'=>'Loại sản phẩm không được để trống.',
            'st_price.required'=>'Giá sản phẩm không được để trống.',
            'st_address.required'=>'Địa chỉ không được để trống.',
            'st_timeOpen.required'=>'Thời gian mở cửa không được để trống.',
//            'st_typeQuality_id.required'=>'Hình thức chất lượng không được để trống'
        ];
    }
}
