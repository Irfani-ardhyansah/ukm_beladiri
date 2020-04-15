<?php

namespace App\Http\Controllers;
use App\Kegiatan;
use Carbon\Carbon;
use Image;
use File;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_kegiatan = Kegiatan::all(); 
        return view('layouts.kegiatan.kegiatan', ['data_kegiatan' => $data_kegiatan]);
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
     

        if($request->file('foto')) {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto')->move("data_kegiatan", $fileName);
            $file = $fileName;
        } else {
            $file = NULL;
        }

        Kegiatan::create([
            'nama_kegiatan' => $request->get('nama_kegiatan'),
            'deskripsi' => $request->get('deskripsi'),
            'tanggal' => $request->get('tanggal'),
            'tempat' => $request->get('tempat'),
            'foto' => $file,
        ]);
        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect('/admin/kegiatan')->with('sukses', 'Data Berhasil Diinput!');
    }

    public function hapus($id_kegiatan)
    {
        $gambar = Kegiatan::where('id_kegiatan',$id_kegiatan)->first();
		File::delete('data_kegiatan/'.$gambar->foto);

        $data_kegiatan = Kegiatan::find($id_kegiatan);
        $data_kegiatan -> delete();
        alert()->warning('Berhasil.','Data telah diHapus!');
        return redirect('/admin/kegiatan')->with('hapus', 'Data Berhasil Dihapus!');
    }

    public function edit($id_kegiatan) 
    {
        $data_kegiatan = Kegiatan::find($id_kegiatan);
        return view('layouts.kegiatan.kegiatan_edit', ['data_kegiatan' => $data_kegiatan]);
        return redirect('/admin/kegiatan');
    }

    public function update($id_kegiatan, Request $request)
    {
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);

        $data_kegiatan = Kegiatan::find($id_kegiatan);
        $data_kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $data_kegiatan->deskripsi = $request->deskripsi;
        $data_kegiatan->tanggal = $request->tanggal;
        $data_kegiatan->tempat = $request->tempat;
        $data_kegiatan->foto = $request->foto;

        if($request->file('foto') == "")
    	{
    		$data_kegiatan->foto=$data_kegiatan->foto;
    	}
    	else
    	{
        $dt = Carbon::now();
        $acak  = $data_kegiatan->foto->getClientOriginalExtension();
    	$fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
    	$request->file('foto')->move("data_kegiatan", $fileName);
	   	$data_kegiatan->foto = $fileName;
       }

        $data_kegiatan->save();
        alert()->success('Berhasil.','Data telah diUpdate!');
        return redirect('/admin/kegiatan')->with('sukses', 'Data Berhasil Diinput!');
    }

    public function info($id_kegiatan) 
    {
        $data_kegiatan = Kegiatan::find($id_kegiatan);
        return view('layouts.kegiatan.kegiatan_info', ['data_kegiatan' => $data_kegiatan]);
    }
}
