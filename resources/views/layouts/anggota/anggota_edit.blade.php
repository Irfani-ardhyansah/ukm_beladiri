@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Form Edit Anggota
  </h1>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
  <div class="col-md-8">
    <div class="box box-info">
      <div class="box-header">
        <div class="box-body pad">
          <div class="container">
            <!-- form start -->
            <form method="POST" class="col-xs-8" action="/admin/anggota/update/{{ $data_anggota->id_anggota }}" enctype="multipart/form-data">

              {{ csrf_field() }}
              {{ method_field('PUT') }}

              <div class="col-xs-9">
                <div class="form-group">
                  <label>Jabatan</label>
                    <select name="jabatan" class="form-control" id="InputAgama">
                        <option value=" " @if($data_anggota -> jabatan == ' ') selected @endif> - </option>
                        @if ($data_anggota->jabatan === TRUE)
                          <option value=""> - </option>
                        @else
                          <option value="Ketua" @if($data_anggota -> jabatan == 'Ketua') selected @endif>Ketua</option>
                          <option value="Wakil" @if($data_anggota -> jabatan == 'Wakil') selected @endif>Wakil</option>
                          <option value="Sekertaris I" @if($data_anggota -> jabatan == 'Sekertaris I') selected @endif>Sekertaris I</option>
                          <option value="Sekertaris II" @if($data_anggota -> jabatan == 'Sekertaris II') selected @endif>Sekertaris II</option>
                          <option value="Bendahara I" @if($data_anggota -> jabatan == 'Bendahara I') selected @endif>Bendahara I</option>
                          <option value="Bendahara II" @if($data_anggota -> jabatan == 'Bendahara II') selected @endif>Bendahara II</option>
                        @endif
                    </select>
                  </div>
              </div>

              <div class="col-xs-5">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input name="nama_anggota" type="text" class="form-control" id="InputNama" value="{{ $data_anggota->nama_anggota }}" placeholder="Masukkan Nama">
                </div>
              </div>

              <div class="col-xs-5">
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" style="resize:none" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat" rows="2">{{ $data_anggota->alamat }}</textarea>
                </div>
              </div>

                <div class="col-xs-5">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                      <select name="jenis_kelamin" class="form-control" id="InputKel">
                          <option value="Pria" @if($data_anggota->jenis_kelamin == 'Pria') selected @endif>Pria</option>
                          <option value="Wanita" @if($data_anggota->jenis_kelamin == 'Wanita') selected @endif>Wanita</option>
                      </select>
                  </div>
                </div>

                <div class="col-xs-5">
                  <div class="form-group">
                    <label>Agama</label>
                      <select name="agama" class="form-control" id="InputAgama">
                        <option value="Islam" @if($data_anggota->agama == 'Islam') selected @endif>Islam</option>
                        <option value="Katolik" @if($data_anggota->agama == 'Katolik') selected @endif>Kristen Katolik</option>
                        <option value="Protestan" @if($data_anggota->agama == 'Protestan') selected @endif>Kristen Protestan</option>
                        <option value="Hindu" @if($data_anggota->agama == 'Hindu') selected @endif>Hindu</option>
                        <option value="Budha" @if($data_anggota->agama == 'Budha') selected @endif>Budha</option>
                        <option value="Konghucu" @if($data_anggota->agama == 'Konghucu') selected @endif>Kong Hu Cu</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-xs-5">
                    <div class="form-group">
                      <label>No. Telp.</label>
                      <input name="no_hp" type="number" class="form-control" id="InputTelp" data-inputmask='"mask": "(999) 999-9999"' placeholder="081xxxxxxxxx" value="{{ $data_anggota->no_hp }}">
                    </div>
                  </div>

                  <div class="col-xs-5">
                    <div class="form-group">
                    <label>Angkatan</label>
                      <input id="angkatan" type="number" maxlength="4" class="form-control" name="angkatan"  placeholder="Tahun Angkatan"  value="{{ $data_anggota -> angkatan }}">
                    </div>
                  </div>

                  <div class="col-xs-5">
                    <div class="form-group">
                    <label>Status</label>
                      <select name="status" class="form-control" id="InputStat">
                        <option value="Aktif" @if($data_anggota->status == 'Aktif') selected @endif>Aktif</option>
                        <option value="Alumni" @if($data_anggota->status == 'Alumni') selected @endif>Alumni</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="foto">Foto Anggota</label>
                      <div class="input-group">
                        <div class="custom-file">
                        <img src="{{ asset('/data_file/'.$data_anggota -> file)}}" id="file_preview" style="height: 200px; width: 200px; display: block;">
                          <input name="file" type="file" id="file">
                          @if ($errors->has('file'))
                            <div class="alert alert-danger">Foto yang anda upload terlalu besar!</div>
                          @endif
                          <label class="custom-file-label" for="foto">Pilih File</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-3">
                    <div class="form-group">
                      <label for="kta">Scan KTA</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="kta" type="file" class="custom-file-input" id="InputKta">
                          @if ($errors->has('kta'))
                              <div class="alert alert-danger">Foto yang anda upload terlalu besar!</div>
                            @endif
                          <label class="custom-file-label" for="kta">Pilih File</label>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>

            <div class="modal-footer">
              <div class="col-xs-9">
                <button type="submit" class="btn btn-primary">Update Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection