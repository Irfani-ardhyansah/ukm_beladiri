@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        General Form Elements
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
            <form method="POST" action="/pengurus/update/{{ $data_anggota->id_anggota }}">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

      <div class="form-group">
          <label for="nama">Nama</label>
            <div class="input-group col-xs-4">
              <input name="nama_pengurus" type="text" class="form-control" id="InputNama" value="{{ $data_anggota -> nama_pengurus }}" placeholder="Masukkan Nama">
            </div>
        </div>

        <div class="form-group">
            <label>Jabatan</label>
                <div class="input-group col-xs-4">
                    <select name="jabatan" class="form-control" id="InputAgama">
                        <option value="Ketua" @if($data_anggota -> jabatan == 'Ketua') selected @endif>Ketua</option>
                        <option value="Wakil" @if($data_anggota -> jabatan == 'Wakil') selected @endif>Wakil</option>
                        <option value="Sekertaris I" @if($data_anggota -> jabatan == 'Sekertaris I') selected @endif>Sekertaris I</option>
                        <option value="Sekertaris II" @if($data_anggota -> jabatan == 'Sekertaris II') selected @endif>Sekertaris II</option>
                        <option value="Bendahara I" @if($data_anggota -> jabatan == 'Bendahara I') selected @endif>Bendahara I</option>
                        <option value="Bendahara II" @if($data_anggota -> jabatan == 'Bendahara II') selected @endif>Bendahara II</option>
                    </select>
                </div>
        </div>

        <div class="form-group">
                    <label>Angkatan</label>
                    <div class="input-group col-xs-4">
                      <select name="angkatan" class="form-control" id="InputAngkatan">
                        <option value="2000" @if($data_anggota->angkatan == '2000') selected @endif>2000</option>
                        <option value="2001" @if($data_anggota->angkatan == '2001') selected @endif>2001</option>
                        <option value="2002" @if($data_anggota->angkatan == '2002') selected @endif>2002</option>
                        <option value="2003" @if($data_anggota->angkatan == '2003') selected @endif>2003</option>
                        <option value="2004" @if($data_anggota->angkatan == '2004') selected @endif>2004</option>
                        <option value="2005" @if($data_anggota->angkatan == '2005') selected @endif>2005</option>
                        <option value="2006" @if($data_anggota->angkatan == '2006') selected @endif>2006</option>
                        <option value="2007" @if($data_anggota->angkatan == '2007') selected @endif>2007</option>
                        <option value="2008" @if($data_anggota->angkatan == '2008') selected @endif>2008</option>
                        <option value="2009" @if($data_anggota->angkatan == '2009') selected @endif>2009</option>
                        <option value="2010" @if($data_anggota->angkatan == '2010') selected @endif>2010</option>
                        <option value="2011" @if($data_anggota->angkatan == '2011') selected @endif>2011</option>
                        <option value="2012" @if($data_anggota->angkatan == '2012') selected @endif>2012</option>
                        <option value="2013" @if($data_anggota->angkatan == '2013') selected @endif>2013</option>
                        <option value="2014" @if($data_anggota->angkatan == '2014') selected @endif>2014</option>
                        <option value="2015" @if($data_anggota->angkatan == '2015') selected @endif>2015</option>
                        <option value="2016" @if($data_anggota->angkatan == '2016') selected @endif>2016</option>
                        <option value="2017" @if($data_anggota->angkatan == '2017') selected @endif>2017</option>
                        <option value="2018" @if($data_anggota->angkatan == '2018') selected @endif>2018</option>
                        <option value="2019" @if($data_anggota->angkatan == '2019') selected @endif>2019</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                        <div class="input-group col-xs-4">
                        <textarea name="alamat" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat" rows="2">{{ $data_anggota -> alamat }}</textarea>
                        </div>
                    </div>
                  
                    <div class="form-group">
                    <label>No. Telp.</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input name="noHP" type="text" class="form-control" id="InputTelp" data-inputmask='"mask": "(999) 999-9999"' value="{{ $data_anggota -> noHP }}">
                        </div>
                    </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </div>
      </form>
              <!-- /.box-body -->
            </form>
          </div>
          </div>
          <!-- /.box -->
@endsection
