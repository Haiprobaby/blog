<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
    public function getlogin()
    {
    	return view('login');
    }

    public function postlogin(Request $request)
    {
    	
    	$this->validate($request,[
            'email'=>'required|max:50|min:3|email',
            'password'=>'required|max:50|min:3'
        ],[
            'email.required'=>'Bạn chưa nhập username',
            'password.required'=>'Bạn chưa nhập mật khẩu'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
                return redirect('/');
        }
        else
        {
             return redirect('user/login')->with('thongbao','Sai tên tài khoản hoặc mật khẩu');;
        }
    }

    public function getsignup()
    {
    	return view ('signup');
    }

    public function postsignup(Request $request)
    {
    	$this->validate($request,[
            'name'=>'required|max:50|min:5',
            'password'=>'required|max:50|min:5',
            'email'=>'required|max:50|min:5|email|unique:users',
            'phone'=>'required|max:11|min:10',
        ],[
            'name.required'=>'Bạn chưa nhập username',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'email.required'=>'Bạn chưa nhập email',
            'phone.required'=>'Bạn chưa nhập số điện thoại',

        ]);

        $signup = new User;
        $signup->name = $request->name;
        $signup->email = $request->email;
        $signup->password = bcrypt($request->password);
        $signup->phone = $request->phone;
        $signup->address = $request->Address;
        $signup->save();
        return redirect('user/login')->with('thongbao','Đăng kí thành công');
    }

    public function getlogout()
    {
        Auth::Logout();
        return redirect ('user/login');
    }
}
