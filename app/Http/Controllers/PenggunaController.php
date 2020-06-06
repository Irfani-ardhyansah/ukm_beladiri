<?php

namespace App\Http\Controllers;
use App\Anggota;
use App\Prestasi;
use App\Kegiatan;
use App\Tentang;
use Carbon\Carbon;
use Image;
use File;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use RealRashid\SweetAlert\Facades\Alert;

class PenggunaController extends Controller
{
    public function starter(){
        return view ('user/app');
    }
    public function beranda(){
        return view ('user/beranda');
    }
    
    public function data(){
        $data_anggota = Anggota::where('status' ,'=', 'Aktif')->orderBy('angkatan', 'asc')->paginate(10);
        return view ("user.anggota", compact('data_anggota'));
    }
    
    public function info_anggota($id_anggota) 
    {
        $data_anggota = Anggota::find($id_anggota);
        return view('user/infoAnggota', ['data_anggota' => $data_anggota]);
    }

    public function cari_anggota(Request $request)
    {
        $cari = $request->get('cari');
        $data_anggota = Anggota::where('status' ,'=','Aktif')->where('nama_anggota','like','%'.$cari.'%')->paginate(5);
        return view('user.anggota',['data_anggota' => $data_anggota]);
    }

    public function regBaru(){
        return view ('user/registerBaru');
    }

    public function tambah(Request $request) 
    {
        $this->validate($request, [
            'nama_anggota' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'no_hp' => 'required',
            'angkatan' => 'required',
            'status' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'kta' => 'required|file|mimes:jpeg,pdf,jpg|max:2048',
        ]);
        if($request->file('file')) {
            $file = $request->file('file');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('file')->move("data_file", $fileName);
            $file = $fileName;
        } else {
            $file = NULL;
        }

        if($request->file('kta')) {
            $fila = $request->file('kta');
            $dte = Carbon::now();
            $acek  = $fila->getClientOriginalExtension();
            $fileNama = rand(11111,99999).'-'.$dte->format('Y-m-d-H-i-s').'.'.$acek; 
            $request->file('kta')->move("data_scan", $fileNama);
            $scan = $fileNama;
        } else {
            $scan = NULL;
        }


        Anggota::create([
            'nama_anggota' => $request->get('nama_anggota'),
            'alamat' => $request->get('alamat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'agama' => $request->get('agama'),
            'no_hp' => $request->get('no_hp'),
            'angkatan' => $request->get('angkatan'),
            'status' => $request->get('status'),
            'kta' => $scan,
            'file' => $file,
        ]);

        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect('/anggota');
    } 

    public function dataPengurus(){
        $data_anggota = Anggota::all();
        return view ('user/pengurus',['data_anggota' => $data_anggota]);
    }

    public function kegiatan(){
        $data_kegiatan = Kegiatan::all();
        return view ("user.kegiatan",['data_kegiatan' => $data_kegiatan]);
    }
    public function prestasi(){
        $data_prestasi = Prestasi::all(); 
        return view ('user/prestasi', ['data_prestasi' => $data_prestasi]);
    }
  
    public function alumni(){
        $data_anggota = Anggota::where('status' ,'=', 'Alumni')->get();
        return view ('user/alumni',['data_anggota' => $data_anggota]);
    }

    public function tabel(){
        $data_anggota = Anggota::where('status' ,'=', 'Alumni')->get();
        return view ('user/tabelAlumni',['data_anggota' => $data_anggota]);
    }

    public function tentang(){
        $data_tentang = Tentang::all();
        return view ('user/tentang', ['data_tentang' => $data_tentang]);
    }

    public function info_pengurus($id_anggota) 
    {
        $data_anggota = Anggota::find($id_anggota);
        return view('user/infoPengurus', ['data_anggota' => $data_anggota]);
    }

    public function cari_alumni(Request $request)
    {
        $cari = $request->get('cari');
        $data_anggota = Anggota::where('status' ,'=','Alumni')->where('nama_anggota','like','%'.$cari.'%')->paginate(5);
        return view('user.tabelAlumni',['data_anggota' => $data_anggota]);
    }

    
}
