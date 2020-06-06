<?php

namespace App\Exports;

use App\Anggota;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AnggotaExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Anggota::where('status' ,'=', 'Aktif')->select(['nama_anggota', 'alamat', 'angkatan', 'no_hp'])->get();
    }

    public function headings(): array 
    {
        return [
            'Nama Anggota',
            'Alamat',
            'Angkatan',
            'No Hp'
        ];
    }
}
