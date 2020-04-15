<?php

namespace App\Http\Controllers;

use App\Anggota;
use Carbon\Carbon;
use Image;
use File;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use RealRashid\SweetAlert\Facades\Alert;

use App\Exports\AlumniExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class AlumniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function beranda()
    {
        $data_anggota = Anggota::where('status' ,'=', 'Alumni')->get();
        return view('layouts.alumni',['data_anggota' => $data_anggota]);
    }

    public function export_excel()
    {
        return Excel::download(new AlumniExport, 'alumni-ukm.xlsx');
    }

    public function info($id_anggota) 
    {
        $data_anggota = Anggota::find($id_anggota);
        return view('layouts.alumni_info', ['data_anggota' => $data_anggota]);
    }


    public function dataAlumni() 
    {
        $article = Anggota::where('status' ,'=', 'Alumni')->select(['id_anggota','nama_anggota', 'alamat', 'angkatan', 'status']);
        
        return Datatables::of($article)
        ->addColumn('action', function ($article) {
            return '<a href="/admin/alumni/edit/'. $article -> id_anggota.'" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                    <a href="/admin/alumni/hapus/'. $article -> id_anggota.'" onclick="javascript:return confirm(\'Anda Yakin Ingin Menghapus?\');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    <a href="/admin/alumni/info/'.$article -> id_anggota.'" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>';
        })
         ->make(true);
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
     
        if($request->file('kta')) {
            $file = $request->file('kta');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('kta')->move("data_scan", $fileName);
            $scan = $fileName;
        } else {
            $scan = NULL;
        }

        if($request->file('file')) {
            $berkas = $request->file('file');
            $dte = Carbon::now();
            $data  = $berkas->getClientOriginalExtension();
            $fileNama = rand(11111,99999).'-'.$dte ->format('Y-m-d-H-i-s').'.'.$data; 
            $request->file('file')->move("data_file", $fileNama);
            $file = $fileNama;
        } else {
            $file = NULL;
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
        return redirect('/admin/alumni')->with('sukses', 'Data Berhasil Diinput!');
    } 

    public function edit($id_anggota) 
    {
        $data_anggota = Anggota::find($id_anggota);
        return view('layouts.anggota.alumni_edit', ['data_anggota' => $data_anggota]);
        return redirect('/admin/alumni');
    }

    public function update($id_anggota, Request $request)
    {
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);

        $data_anggota = Anggota::find($id_anggota);
        $data_anggota->nama_anggota = $request->nama_anggota;
        $data_anggota->alamat = $request->alamat;
        $data_anggota->agama = $request->agama;
        $data_anggota->angkatan = $request->angkatan;
        $data_anggota->jenis_kelamin = $request->jenis_kelamin;
        $data_anggota->no_hp = $request->no_hp;
        $data_anggota->status = $request->status;
        $data_anggota->kta = $request->kta;
        $data_anggota->file = $request->file;

        if($request->file('file') == "")
    	{
    		$data_anggota->file=$data_anggota->file;
    	}
    	else
    	{
        $dt = Carbon::now();
        $acak  = $data_anggota->file->getClientOriginalExtension();
    	$fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
    	$request->file('file')->move("data_file", $fileName);
	   	$data_anggota->file = $fileName;
       }

       if($request->file('kta') == "")
    	{
    		$data_anggota->kta=$data_anggota->kta;
    	}
    	else
    	{
        $dte = Carbon::now();
        $rand = $data_anggota->kta->getClientOriginalExtension();
    	$fileNama = rand(11111,99999).'-'.$dte->format('Y-m-d-H-i-s').'.'.$rand; 
    	$request->file('kta')->move("data_scan", $fileNama);
	   	$data_anggota->kta = $fileNama;
       }
        $data_anggota->save();
        alert()->success('Berhasil.','Data telah diUpdate!');
        return redirect('/admin/alumni')->with('sukses', 'Data Berhasil Diupdate!');
    }

    public function hapus($id_anggota)
    {
        $gambar = Anggota::where('id_anggota',$id_anggota)->first();
		File::delete('data_file/'.$gambar->file);

        $scan_kta = Anggota::where('id_anggota',$id_anggota)->first();
		File::delete('data_scan/'.$scan_kta->kta);

        $data_anggota = Anggota::find($id_anggota);
        $data_anggota -> delete();
        alert()->warning('Berhasil.','Data telah dihapus!');
        return redirect('/admin/alumni')->with('hapus', 'Data Berhasil Dihapus!');
    }


}
