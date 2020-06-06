<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\User;
use Carbon\Carbon;
use Image;
use File;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use RealRashid\SweetAlert\Facades\Alert;

use App\Exports\AnggotaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class AnggotaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function beranda()
    {
        $data_user = User::get();
        $data_anggota = Anggota::get();
        return view('layouts.dashboard',['data_user' => $data_user],['data_anggota' => $data_anggota]);
    }

    public function index() 
    {
        $data_anggota = Anggota::where('status' ,'=', 'Aktif')->get();
        return view('layouts.anggota.anggota',['data_anggota' => $data_anggota]);
    }

    public function export_excel()
    {
        $mytime = Carbon::now();
        return Excel::download(new AnggotaExport, $mytime->format('d M Y').'anggota-ukm.xlsx');
    }

    public function dataAnggota() 
    {
        $article = Anggota::where('status' ,'=', 'Aktif')->select(['id_anggota','nama_anggota', 'alamat', 'angkatan', 'status']);
        
        return Datatables::of($article)
        ->addColumn('action', function ($article) {
            return '<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edModal-'. $article->id_anggota .'"><i class="fa fa-pencil"></i></button>
                    <a href="/admin/anggota/hapus/'. $article -> id_anggota.'" onclick="javascript:return confirm(\'Anda Yakin Ingin Menghapus?\');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    <a href="/admin/anggota/info/'.$article -> id_anggota.'" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>';
        })
        ->addIndexColumn()
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
            'status' => 'required|max:13',
        ]);

        try {
            $anggota = Anggota::create([
                'nama_anggota' => $request->nama_anggota,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'no_hp' => $request->no_hp,
                'angkatan' => $request->angkatan,
                'status' => $request->status,
            ]);

            if($request->hasFile('file')){
                $file = $request->file('file');
                $dt = Carbon::now();
                $acak  = $file->getClientOriginalExtension();
                $fileName = $dt->format('Y-m-d').'.'.$acak;
                $request->file('file')->move('data_file/', $fileName);
                $anggota->file = $request->file('file')->getClientOriginalName();
                $anggota->save();
            }

            if($request->hasFile('kta')){
                $file = $request->file('kta');
                $dt = Carbon::now();
                $acak  = $file->getClientOriginalExtension();
                $fileName = $dt->format('Y-m-d').'.'.$acak;
                $request->file('kta')->move('data_kta/', $request->file('kta')->getClientOriginalName());
                $anggota->kta = $request->file('kta')->getClientOriginalName();
                $anggota->save();
            }

            alert()->success('Berhasil','Data Berhasil Ditambah!');
            return redirect('/admin/anggota');
        } catch(\Exception $e) {
            alert()->error('Gagal', $e . 'gagal Ditambah!');
            return redirect('/admin/anggota');
        }
    } 

    // public function edit($id_anggota) 
    // {
    //     $data_anggota = Anggota::find($id_anggota);
    //     return view('layouts.anggota.anggota_edit', ['data_anggota' => $data_anggota]);
    //     return redirect('/admin/anggota');
    // }

    public function modal_update(Request $request, $id_anggota)
    {
        if($request->isMethod('post')) {
            $this->validate($request, [
                'nama_anggota' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'angkatan' => 'required',
                'jenis_kelamin' => 'required',
                'no_hp' => 'required',
                'status' => 'required',
            ]);
            
            try {
                $anggota = Anggota::find($id_anggota);
                $anggota->update([
                    'nama_anggota' => $request->nama_anggota,
                    'alamat' => $request->alamat,
                    'agama' => $request->agama,
                    'angkatan' => $request->angkatan,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'no_hp' => $request->no_hp,
                    'status' => $request->status,
                    'jabatan' => $request->jabatan,
                ]);
        
                if($request->hasFile('file')){
                    $file = $request->file('file');
                    $dt = Carbon::now();
                    $acak  = $file->getClientOriginalExtension();
                    $fileName = $dt->format('Y-m-d').'.'.$acak;
                    $request->file('file')->move('data_file/', $fileName);
                    $anggota->file = $fileName;
                    $anggota->save();
                }
    
                if($request->hasFile('kta')){
                    $file = $request->file('kta');
                    $dt = Carbon::now();
                    $acak  = $file->getClientOriginalExtension();
                    $fileName = $dt->format('Y-m-d').'.'.$acak;
                    $request->file('kta')->move('data_kta/', $fileName);
                    $anggota->kta = $fileName;
                    $anggota->save();
                }
                alert()->success('Berhasil','Data Berhasil DiUbah!');
                return redirect('/admin/anggota');
            } catch(\Exception $e) {
                return redirect('/admin/anggota')->with(['error' => $e->getMessage()]);
            }
        }
    }

    // public function update($id_anggota, Request $request)
    // {
    //     $this->validate($request, [
    //         'nama_anggota' => 'required',
    //         'alamat' => 'required',
    //         'agama' => 'required',
    //         'angkatan' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'no_hp' => 'required',
    //         'status' => 'required',
    //     ]);
        
    //     try {
    //         $anggota = Anggota::find($id_anggota);
    //         $anggota->update([
    //             'nama_anggota' => $request->nama_anggota,
    //             'alamat' => $request->alamat,
    //             'agama' => $request->agama,
    //             'angkatan' => $request->angkatan,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'no_hp' => $request->no_hp,
    //             'status' => $request->status,
    //             'jabatan' => $request->jabatan,
    //         ]);
    
    //         if($request->hasFile('file')){
    //             $file = $request->file('file');
    //             $dt = Carbon::now();
    //             $acak  = $file->getClientOriginalExtension();
    //             $fileName = $dt->format('Y-m-d').'.'.$acak;
    //             $request->file('file')->move('data_file/', $fileName);
    //             $anggota->file = $request->file('file')->getClientOriginalName();
    //             $anggota->save();
    //         }

    //         if($request->hasFile('kta')){
    //             $file = $request->file('kta');
    //             $dt = Carbon::now();
    //             $acak  = $file->getClientOriginalExtension();
    //             $fileName = $dt->format('Y-m-d').'.'.$acak;
    //             $request->file('kta')->move('data_kta/', $request->file('kta')->getClientOriginalName());
    //             $anggota->kta = $request->file('kta')->getClientOriginalName();
    //             $anggota->save();
    //         }
    
    //         alert()->success('Berhasil','Data Berhasil DiUbah!');
    //         return redirect('/admin/anggota');
    //     } catch(\Exception $e) {
    //         return redirect('/admin/anggota')->with(['error' => $e->getMessage()]);
    //     }
    // }

    public function info($id_anggota) 
    {
        $data_anggota = Anggota::find($id_anggota);
        return view('layouts.anggota.anggota_info', ['data_anggota' => $data_anggota]);
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
        return redirect('/admin/anggota');
    }
}
