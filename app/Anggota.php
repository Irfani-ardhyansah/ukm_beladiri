<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $primaryKey = 'id_anggota';
    protected $table = 'anggota';
    public $timestamps = false;
    protected $fillable = ['nama_anggota', 'alamat', 'agama', 'angkatan', 'jenis_kelamin', 'no_hp', 'status','jabatan', 'file', 'kta' ];
}
