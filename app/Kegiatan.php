<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $primaryKey = 'id_kegiatan';
    protected $table = 'kegiatan';
    public $timestamps = false;
    protected $fillable = ['nama_kegiatan', 'deskripsi', 'tanggal', 'tempat', 'foto'];
}
