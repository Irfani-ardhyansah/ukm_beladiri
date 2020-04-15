<?php

namespace App\Exports;

use App\Anggota;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlumniExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Anggota::where('status' ,'=', 'Alumni')->select(['id_anggota','nama_anggota', 'alamat', 'angkatan', 'no_hp'])->get();
    }
}
