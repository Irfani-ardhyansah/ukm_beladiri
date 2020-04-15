<?php

namespace App\Exports;

use App\Anggota;
use Maatwebsite\Excel\Concerns\FromCollection;

class AnggotaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Anggota::where('status' ,'=', 'Aktif')->select(['nama_anggota', 'alamat', 'angkatan', 'no_hp'])->get();
    }
}
