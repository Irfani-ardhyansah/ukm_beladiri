<?php

namespace App\Http\Controllers;

use App\Pengurus;
use App\Prestasi;
use App\Anggota;
use Illuminate\Http\Request;

class UserAnggotaController extends Controller
{
    public function index() 
    {
        $data_anggota = Anggota::all();
        return view('pengguna.data',['data_anggota' => $data_anggota]);
    }
    
    public function info($id_anggota) 
    {
        $data_anggota = Anggota::find($id_anggota);
        return view('pengguna.info', ['data_anggota' => $data_anggota]);
    }

    public function prestasi()
    {
        $data_prestasi = Prestasi::all();
        return view('pengguna.prestasi',['data_prestasi' => $data_prestasi]);
    }

    public function struktur()
    {
        $data_pengurus = Pengurus::all();
        return view('pengguna.struktur',['data_pengurus' => $data_pengurus]);
    }
}
