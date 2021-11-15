<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'name'     => 'required|max:25',
            'phone'     => 'required|max:11',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Tài khoản chưa nhập',
            'email.email' => 'Email chưa đúng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu chưa nhập',
            'password.min' => 'Mật khẩu phải từ :min kí tự',
            'name.required' => 'Họ và tên chưa nhập',
            'name.max' => 'Họ và tên bạn nhập quá dài',
            'phone.required' => 'Số điện thoại chưa nhập',
            'phone.max' => 'Số điện thoại bạn nhập quá dài'
        ];
    }
}
