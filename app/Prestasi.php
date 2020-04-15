<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $primaryKey = 'id_prestasi';
    protected $table = 'prestasi';
    public $timestamps = false;
    protected $fillable = ['nama_event', 'nama_peraih', 'tahun', 'tingkat', 'kelas', 'keterangan', 'foto', 'kategori'];
}
