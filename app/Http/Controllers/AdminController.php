<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request,
            ['username'=>'required'],
            ['password'=>'required']
        );
 
        $user = $request->input('username');
        $pass = $request->input('password');        
 
        $users = DB::table('admin')->where(['username'=> $user])->first();
        
                if(count($users)==0){
                   return redirect('/admin.login')->with('failed','Login gagal');
                } else
               
                if($users->username == $user AND Hash::check($pass, $users->password) ){
                   Session::put('login', 'Selamat anda berhasil login');
                   return redirect('/admin.login');
                } else {
                   return redirect('/admin.login')->with('failed','Login gagal');
                }
    }
}
