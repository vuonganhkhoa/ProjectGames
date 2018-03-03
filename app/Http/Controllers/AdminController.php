<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function getLogin(){
    	return view('login');
    }

    public function postLogin(Request $request){
    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required'
    	], [
    		'username.required' => 'Bạn cần nhập tên đăng nhập.',
    		'password.required' => 'Bạn cần nhập mật khẩu.'
    	]);

    	$loginByName = [
    		'username' => $request->username,
    		'password' => $request->password
    	];
    	$loginByEmail = [
    		'email' => $request->username,
    		'password' => $request->password
    	];

    	if(Auth::attempt($loginByName) || Auth::attempt($loginByEmail)){
    		return redirect()->route('ThongTinAdmin');
    	}
    	else{
    		return redirect()->back()->with('thongbao', 'Tên đăng nhập hoặc mật khẩu không đúng.');
    	}
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('DangNhap');
    }
}
