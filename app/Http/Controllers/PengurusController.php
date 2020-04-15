<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_anggota = Anggota::all();
        return view('layouts.pengurus.pengurus', ['data_anggota' => $data_anggota]);
    }

    // public function tambah(Request $request) 
    // {
    //     // $this->validate($request,[
    //     //     'nama' => 'required',
    //     //     'alamat' => 'required'
    //     // ]);

    //     Pengurus::create($request->all());

    //     return redirect('/admin/pengurus')->with('sukses', 'Data Berhasil Diinput!');
    // } 

    public function info($id_anggota) 
    {
        $data_anggota = Anggota::find($id_anggota);
        return view('layouts.pengurus.pengurus_info', ['data_anggota' => $data_anggota]);
    }

    public function hapus($id_anggota)
    {
        $data_anggota = Anggota::find($id_anggota);
        $data_anggota -> delete();
        return redirect('/admin/pengurus')->with('hapus', 'Data Berhasil Dihapus!');
    }

    public function edit($id_anggota) 
    {
        $data_anggota = Anggota::find($id_anggota);
        return view('layouts.pengurus.pengurus_edit', ['data_anggota' => $data_anggota]);
        return redirect('/admin/pengurus');
    }

    public function update($id_anggota)
    {
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);
        $data_anggota = Anggota::find($id_anggota);
        $data_anggota -> update([
            'jabatan' => ''
        ]);
        alert()->success('Berhasil.','Data telah diUpdate!');
        return redirect('/admin/anggota')->with('sukses', 'Data Berhasil Diupdate!');
    }

}
