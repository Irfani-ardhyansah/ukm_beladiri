@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Edit Data Prestasi
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
            <!-- /.box-header -->
              <div class="box-body pad">
                <div class="container">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="/admin/prestasi/update/{{ $data_prestasi->id_prestasi }}">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

    <div class="form-group">
        <label for="nama_kegiatan">Nama Kejuaraan </label>
          <div class="input-group col-xs-4">
            <input name="nama_event" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" value="{{ $data_prestasi -> nama_event }}">
          </div
    </div>

    <div class="form-group">
        <label>Tingkat Kejuaraan</label>
          <div class="input-group col-xs-4">
            <select name="tingkat" class="form-control" id="InputAgama">
                <option value="Nasional" @if($data_prestasi -> tingkat == 'Nasional') selected @endif>Nasional</option>
                <option value="Provinsi" @if($data_prestasi -> tingkat == 'Provinsi') selected @endif>Provinsi</option>
                <option value="Kabupaten/Kota" @if($data_prestasi -> tingkat == 'Kabupaten/Kota') selected @endif>Kabupaten/Kota</option>
            </select>
          </div>
    </div>

    <div class="form-group">
        <label for="nama_kegiatan">Nama Peraih </label>
          <div class="input-group col-xs-4">
            <input name="nama_peraih" type="text" class="form-control" id="InputKegiatan" aria-describedby="emailHelp" value="{{ $data_prestasi -> nama_peraih }}">
          </div>
    </div>
    
    <div class="form-group">
        <label>Keterangan</label>
          <div class="input-group col-xs-4">
            <select name="keterangan" class="form-control" id="InputAgama">
                <option value="Peringkat I" @if($data_prestasi -> keterangan == 'Peringkat I') selected @endif>Peringkat I</option>
                <option value="Peringkat II" @if($data_prestasi -> keterangan == 'Peringkat II') selected @endif>Peringkat II</option>
                <option value="Peringkat III" @if($data_prestasi -> keterangan == 'Peringkat III') selected @endif>Peringkat III</option>
                <option value="Harapan I" @if($data_prestasi -> keterangan == 'Harapan I') selected @endif>Harapan I</option>
                <option value="Harapan II" @if($data_prestasi -> keterangan == 'Harapan II') selected @endif>Harapan II</option>
            </select>
          </div>
    </div>

    <div class="form-group">
        <label>Kelas Kejuaraan</label>
          <div class="input-group col-xs-4">
            <select name="kelas" class="form-control" id="InputAgama">
                <option value="Kelas A" @if($data_prestasi -> kelas == 'Kelas A') selected @endif>Kelas A</option>
                <option value="Kelas B" @if($data_prestasi -> kelas == 'Kelas B') selected @endif>Kelas B</option>
                <option value="Kelas C" @if($data_prestasi -> kelas == 'Kelas C') selected @endif>Kelas C</option>
                <option value="Kelas D" @if($data_prestasi -> kelas == 'Kelas D') selected @endif>Kelas D</option>
                <option value="Kelas E" @if($data_prestasi -> kelas == 'Kelas E') selected @endif>Kelas E</option>
                <option value="Kelas F" @if($data_prestasi -> kelas == 'Kelas F') selected @endif>Kelas F</option>
                <option value="Kelas G" @if($data_prestasi -> kelas == 'Kelas H') selected @endif>Kelas G</option>
                <option value="Kelas H" @if($data_prestasi -> kelas == 'Kelas A') selected @endif>Kelas H</option>
            </select>
          </div>
    </div>


    <div class="form-group">
        <label>Tahun Kejuaraan</label>
          <div class="input-group col-xs-4">
          <input id="angkatan" type="number" maxlength="4" class="form-control" name="tahun"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{ $data_prestasi->tahun }}">
          </div>
      </div>

    
<!-- 
        <div class="form-group">
            <label for="exampleInputFile">Foto Kegiatan</label>
              <div class="input-group col-xs-4">
                <input type="file" id="exampleInputFile">
              </div>
        </div> -->

      </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
              <!-- /.box-body -->
            </form>
          </div>
          </div>
          <!-- /.box -->
@endsection