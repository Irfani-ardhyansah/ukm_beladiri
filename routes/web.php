<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route User
Route::get('/app', 'penggunaController@starter');
Route::get('/', 'PenggunaController@beranda');
Route::get('/registerBaru', 'PenggunaController@regBaru');
Route::post('/registerBaru/tambah', 'PenggunaController@tambah');
Route::get('/beranda', 'PenggunaController@beranda');
Route::get('/anggota', 'PenggunaController@data');
Route::get('/anggota/cari', 'PenggunaController@search');
Route::get('/data-anggota', 'PenggunaController@dataAnggota');
Route::get('/anggota/info/{id_anggota}', 'PenggunaController@info');

// Route::post('/anggota/tambah', 'PenggunaController@tambah');
Route::get('/pengurus', 'PenggunaController@dataPengurus');
Route::get('/pengurus/info/{id_anggota}', 'PenggunaController@infoP');
Route::get('/kegiatan', 'PenggunaController@kegiatan');
Route::get('/prestasi', 'PenggunaController@prestasi');
Route::get('/tentang', 'PenggunaController@tentang');
Route::get('/bantuan', 'PenggunaController@bantuan');

Route::get('/alumni', 'PenggunaController@alumni');
Route::get('/alumni/cari', 'PenggunaController@cari');
// Route::get('/alumni/data', 'PenggunaController@tabel');


// Routes Admnin Anggota
Route::get('/admin', 'AnggotaController@beranda');
Route::get('/admin/anggota', 'AnggotaController@index');
Route::get('/admin/anggota/export_excel', 'AnggotaController@export_excel');
Route::get('/admin/data-anggota', 'AnggotaController@dataAnggota');

// Route::get('/admin/anggota/add', 'AnggotaController@add');
Route::post('/admin/anggota/tambah', 'AnggotaController@tambah');
Route::get('/admin/anggota/edit/{id_anggota}', 'AnggotaController@edit');
Route::put('/admin/anggota/update/{id_anggota}', 'AnggotaController@update');
Route::get('/admin/anggota/hapus/{id_anggota}', 'AnggotaController@hapus');
Route::get('/admin/anggota/info/{id_anggota}', 'AnggotaController@info');
Route::get('/admin/anggota/cari', 'AnggotaController@cari');

// Routes Admin Pengurus
Route::get('/admin/pengurus', 'PengurusController@index');
Route::post('/admin/pengurus/tambah', 'PengurusController@tambah');
Route::put('/admin/pengurus/{id_anggota}', 'PengurusController@update');
Route::get('/admin/pengurus/info/{id_anggota}', 'PengurusController@info');

// Route Admin Alumni
Route::get('/admin/alumni', 'AlumniController@beranda');
Route::get('/admin/alumni/export_excel', 'AlumniController@export_excel');
Route::get('/admin/data-alumni', 'AlumniController@dataAlumni');
Route::post('/admin/alumni/tambah', 'AlumniController@tambah');
Route::get('/admin/alumni/info/{id_anggota}', 'AlumniController@info');
Route::get('/admin/alumni/hapus/{id_anggota}', 'AlumniController@hapus');
Route::get('/admin/alumni/edit/{id_anggota}', 'AlumniController@edit');
Route::put('/admin/alumni/update/{id_anggota}', 'AlumniController@update');

// Routue Akun
Route::get('/admin/akun', 'AkunController@index');
Route::post('/admin/akun/tambah', 'AkunController@store');
Route::get('/admin/akun/edit/{id}', 'AkunController@edit');
Route::put('/admin/akun/update/{id}', 'AkunController@update');
Route::get('/admin/akun/hapus/{id}', 'AkunController@hapus');

// Route Admin Login
Route::get('/admin/login', 'AdminController@login');

// Routes Admin Kegiatan
Route::get('/admin/kegiatan', 'KegiatanController@index');
Route::post('/admin/kegiatan/tambah', 'KegiatanController@tambah');
Route::get('/admin/kegiatan/edit/{id_kegiatan}', 'KegiatanController@edit');
Route::put('/admin/kegiatan/update/{id_kegiatan}', 'KegiatanController@update');
Route::get('/admin/kegiatan/info/{id_kegiatan}', 'KegiatanController@info');
Route::get('/admin/kegiatan/hapus/{id_kegiatan}', 'KegiatanController@hapus');

// Routes Admin Prestasi
Route::get('/admin/prestasi', 'PrestasiController@index');
Route::post('/admin/prestasi/tambah', 'PrestasiController@tambah');
Route::get('/admin/prestasi/hapus/{id_prestasi}', 'PrestasiController@hapus');
Route::get('/admin/prestasi/edit/{id_prestasi}', 'PrestasiController@edit');
Route::put('/admin/prestasi/update/{id_prestasi}', 'PrestasiController@update');
Route::get('/admin/prestasi/hapus/{id_prestasi}', 'PrestasiController@hapus');

// Routes Admin Tentang
Route::get('/admin/tentang', 'TentangController@index');
Route::get('/admin/tentang/edit/{id_tentang}', 'TentangController@edit');
Route::put('/admin/tentang/update/{id_tentang}', 'TentangController@update');


Auth::routes();


Route::get('/home', 'AnggotaController@beranda');