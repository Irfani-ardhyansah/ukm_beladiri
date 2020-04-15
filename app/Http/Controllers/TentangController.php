<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_tentang = Tentang::all(); 
        return view('layouts.tentang.tentang', ['data_tentang' => $data_tentang]);
    }

    public function tambah(Request $request)
    {
        Tentang::create($request->all());
        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect('/admin/tentang');
    }

    public function edit($id_tentang) 
    {
        $data_tentang = Tentang::find($id_tentang);
        return view('layouts.tentang.tentang_edit', ['data_tentang' => $data_tentang]);
        return redirect('/admin/tentang');
    }

    public function update($id_tentang, Request $request)
    {
        $data_tentang = Tentang::find($id_tentang);
        $data_tentang->deskripsi = $request->deskripsi;
        $data_tentang->sejarah = $request->sejarah;
        $data_tentang->lokasi = $request->lokasi;
        $data_tentang->jadwal = $request->jadwal;
        $data_tentang->save();
        alert()->success('Berhasil.','Data telah diUpdate!');
        return redirect('/admin/tentang');
    }
}
