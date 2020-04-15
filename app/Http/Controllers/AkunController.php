<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class AkunController extends Controller
{
    public function index()
    {
        if(Auth::user()->level == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/admin');
        }

        $datas = User::get();
        return view('auth.user', compact('datas'));
    }

    public function create()
    {
        if(Auth::user()->level == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $count = User::where('email',$request->input('email'))->count();

        if($count>0){
            Session::flash('message', 'Already exist!');
            Session::flash('message_type', 'danger');
            return redirect()->to('user');
        }

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'level' => $request->input('level'),
            'password' => bcrypt(($request->input('password'))),
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect('/admin/akun');

    }

    public function edit($id)
    {   
        if((Auth::user()->level == 'admin') && (Auth::user()->id != $id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        $data = User::findOrFail($id);

        return view('auth.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $user_data = User::findOrFail($id);


        $user_data->name = $request->input('name');
        $user_data->email = $request->input('email');
        if($request->input('password')) {
        }

        if($request->input('password')) {
            $user_data->password= bcrypt(($request->input('password')));
        
        }

        $user_data->update();

        alert()->success('Berhasil.','Data telah diUpdate!');
        return redirect('/admin/akun');
    }

    public function hapus($id)
    {
        $user_data = User::findOrFail($id);
        $user_data -> delete();
        alert()->warning('Berhasil.','Data telah diHapus!');
        return redirect('/admin/akun')->with('hapus', 'Data Berhasil Dihapus!');
    }
}
