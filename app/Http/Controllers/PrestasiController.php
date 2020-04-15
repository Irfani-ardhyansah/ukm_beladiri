<?php

namespace App\Http\Controllers;

use App\Prestasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PrestasiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_prestasi = Prestasi::all(); 
        return view('layouts.prestasi.prestasi', ['data_prestasi' => $data_prestasi]);
    }

    public function tambah(Request $request)
    {
        Prestasi::create($request->all());
        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect('/admin/prestasi')->with('sukses', 'Data Berhasil Diinput!');
    }

    public function hapus($id_prestasi)
    {
        $data_prestasi = Prestasi::find($id_prestasi);
        $data_prestasi -> delete();
        alert()->warning('Berhasil.','Data telah diHapus!');
        return redirect('/admin/prestasi')->with('hapus', 'Data Berhasil Dihapus!');
    }

    public function edit($id_prestasi) 
    {
        $data_prestasi = Prestasi::find($id_prestasi);
        return view('layouts.prestasi.prestasi_edit', ['data_prestasi' => $data_prestasi]);
        return redirect('/admin/prestasi')->with('sukses', 'Data Berhasil Diinput!');
    }

    public function update($id_prestasi, Request $request)
    {
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);

        $data_prestasi = prestasi::find($id_prestasi);
        $data_prestasi->nama_event = $request->nama_event;
        $data_prestasi->nama_peraih = $request->nama_peraih;
        $data_prestasi->tahun = $request->tahun;
        $data_prestasi->tingkat = $request->tingkat;
        $data_prestasi->kelas = $request->kelas;
        $data_prestasi->kategori = $request->kategori;
        $data_prestasi->keterangan = $request->keterangan;
        $data_prestasi->save();
        alert()->success('Berhasil.','Data telah diUpdate!');
        return redirect('/admin/prestasi');
    }
}
