<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }
    public  function postLogin(LoginRequest $loginRequest){
        $data = $loginRequest->only('email', 'password');
        if (\Auth::guard('admins')->attempt($data)) {
            \Session::flash('toastr',[
                'type' => 'success',
                'message' => 'Đăng nhập thành công'
            ]);
            return redirect()->route('api-admin.index');
        }
        else {
            \Session::flash('toastr',[
                'type' => 'error',
                'message' => 'Đăng nhập không thành công'
            ]);
            return redirect()->back();
        }
    }
    public function getLogout(){
        \Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
