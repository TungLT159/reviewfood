<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $loginRequest)
    {
        $credemtials = $loginRequest->only('email', 'password');
        if (\Auth::attempt($credemtials)) {
//            return redirect()->back()->with(['flash_level' => 'success', 'flash_message' => 'Đăng nhập thành công ! ']);
            \Session::flash('toastr',[
                'type' => 'success',
                'message' => 'Đăng nhập thành công'
            ]);
            return redirect()->route('get.home');
        } else {
//            return redirect()->back()->withInput($loginRequest->only('email', 'remember'))->withErrors([
//                'approve' => 'Wrong password or this account not approved yet.',
//            ]);
//            return redirect()->back()->with(['flash_level' => 'danger', 'flash_message' => 'Đăng nhập không thành công !']);
            \Session::flash('toastr',[
                'type' => 'error',
                'message' => 'Đăng nhập không thành công'
            ]);
            return redirect()->back();
        }
    }
    public function getLogout(){
        \Auth::logout();
        return redirect()->route('get.home');
    }


}
