<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $primaryKey = 'id_tentang';
    protected $table = 'tentang';
    public $timestamps = false;
    protected $fillable = ['deskripsi', 'sejarah', 'lokasi', 'jadwal'];
}
