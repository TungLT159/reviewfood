<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\RegisterRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;



class RegisterController extends AdminController
{
   public function getRegister(){
       return view('auth.register');
   }

    public function postRegister(RegisterRequest $registerRequest)
    {
//        if ($registerRequest->ajax()) {
//            $results = [
//                'id' => false
//            ];
//
//            $id =  User::insertGetId([
//                'name'     => $registerRequest->name,
//                'email'    => $registerRequest->email,
//                'password' => Hash::make($registerRequest->password),
////                'password' => bcrypt($registerRequest->password),
//                'phone'    => $registerRequest->phone
//
//            ]);
//
//            $results['id'] = $id;
//
//            return response()->json($results);
//        }
        $user = New User();
        $user->name = $registerRequest->name;
        $user->email = $registerRequest->email;
        $user->password = bcrypt($registerRequest->password);
        $user->phone = $registerRequest->phone;
        $user->remember_token = $registerRequest->_token;
        $user->save();
        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Đăng ký thành công'
        ]);
        return redirect()->route('get.login');

    }
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
//    }
//
//    /**
//     * Create a new user instance after a valid registration.
//     *
//     * @param  array  $data
//     * @return \App\User
//     */
//    protected function create(array $data)
//    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
//    }
}
