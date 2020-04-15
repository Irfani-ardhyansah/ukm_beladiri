<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $primaryKey = 'idPengurus';
    protected $table = 'pengurus';
    public $timestamps = false;
    protected $fillable = ['nama_pengurus', 'jabatan', 'angkatan', 'alamat', 'noHP', 'no_hp'];
}
