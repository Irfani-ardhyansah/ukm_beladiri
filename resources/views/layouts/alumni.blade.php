@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 class="text-center">
      Data Alumni UKM
      <button type="button" class="btn btn-success pull-right btn-sm" data-toggle="modal" data-target="#anggotaModal"><i class="fa fa-plus"></i></button>
      <a href="/admin/alumni/export_excel" class="btn btn-primary btn-sm pull-left" target="_blank">EXPORT</a>
    </h1>
    
  </section>

  <!-- Main content -->
  <section class="content ml-2">
    <div class="box float-left">
      <!-- /.box-header -->
      <div class="box-body">
        <table id="table-alumni" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Angkatan</th>
            <th>Status</th>
            <th>Opsi</th>
          </tr>
        </thead>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->

  @foreach($data_anggota as $row)
<!-- Anggota Modal -->
<div class="modal fade" id="edModal-{{ $row->id_anggota }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data <b>Anggota</b></h5>
      </div>

      <div class="modal-body">
        <form action="{{ url('/admin/alumni/edit/' . $row->id_anggota) }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
  
          <div class="col-xs-6">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input name="nama_anggota" type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{ $row->nama_anggota }}" placeholder="Masukkan Nama">
            </div>
          </div>
  
          <div class="col-xs-6">
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea style="resize:none" name="alamat" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" rows="2">{{ $row->alamat }}</textarea>
            </div>
          </div>
  
          <div class="col-xs-6">
            <div class="form-group">
              <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="InputKel">
                  <option> - </option>
                  <option @if($row->jenis_kelamin==='Pria') selected='selected' @endif>Pria</option>
                  <option @if($row->jenis_kelamin==='Wanita') selected='selected' @endif>Wanita</option>
                </select>
            </div>
          </div>
  
          <div class="col-xs-6">
            <div class="form-group">
              <label>Agama</label>
                <select name="agama" class="form-control" id="InputAgama">
                  <option> - </option>
                  <option @if($row->agama==='Islam') selected='selected' @endif>Islam</option>
                  <option @if($row->agama==='Kristen Katolik') selected='selected' @endif>Kristen Katolik</option>
                  <option @if($row->agama==='Kristen Protestan') selected='selected' @endif>Kristen Protestan</option>
                  <option @if($row->agama==='Hindu') selected='selected' @endif>Hindu</option>
                  <option @if($row->agama==='Budha') selected='selected' @endif>Budha</option>
                  <option @if($row->agama==='Kong Hu Cu') selected='selected' @endif>Kong Hu Cu</option>
                </select>
            </div>
          </div>
  
          <div class="col-xs-6">
            <div class="form-group">
              <label>No. Telp.</label>
                <div class="input-group">
                  <input name="no_hp" type="number" class="form-control" id="InputTelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"  placeholder="081xxxxxxxxx" value="{{ $row->no_hp }}" data-mask>
                </div>
            </div>
          </div>
  
          <div class="col-xs-6">
            <div class="form-group">
              <div class="input-group">
                <label>Angkatan</label>
                  <input id="angkatan" type="number" maxlength="4" class="form-control" name="angkatan"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"  placeholder="Tahun Angkatan" value="{{ $row->angkatan }}">
              </div>
              <label><small>*tahun</small></label>
            </div>
          </div>
                      
            <div class="col-xs-6">
              <div class="form-group">
                <label>Status</label>
                  <select name="status" class="form-control" id="InputStat">
                    <option @if($row->status==='Aktif') selected='selected' @endif>Aktif</option>
                    <option @if($row->status==='Alumni') selected='selected' @endif>Alumni</option>
                  </select>
              </div>
            </div>
                      
          <div class="col-xs-6">
            <div class="form-group">
              <label for="foto">Foto Anggota</label>
                <div class="input-group">
                  <div class="custom-file">
                  <img src="{{ asset('/data_file/'.$row -> file)}}" id="file_preview" class="profile-user-img img-responsive pull-left" style="height: 150px; width: 150px; display: block;">
                    <input name="file" type="file"  id="file">
                    @if ($errors->has('file'))
                      <div class="alert alert-danger">Terjadi Kesalahan Saat Upload!</div>
                    @endif
                    <label class="custom-file-label" for="foto"><small>*max ukuran foto 800kb</small></label>
                  </div>
                </div>
            </div>
          </div>
  
          <div class="col-xs-6">
            <div class="form-group">
              <label for="kta">Scan KTA</label>
              <div class="input-group">
                <div class="custom-file">
                  <input name="kta" type="file" class="custom-file-input" id="kta">
                  @if ($errors->has('kta'))
                    <div class="alert alert-danger">Terjadi Kesalahan Saat Upload!</div>
                  @endif
                  <label class="custom-file-label" for="kta"><small>*max ukuran scan KTA 800kb</small></label>
                </div>
              </div>
            </div>
          </div>
          </div>
  
          <div class="modal-footer">
            <div class="col-xs-12">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success">Tambah Data</button>
            </div>
          </div>
  
          </form>
  
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- Anggota Modal -->
<div class="modal fade" id="anggotaModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data <b>Anggota</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="/admin/alumni/tambah" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-xs-6">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input name="nama_anggota" type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Masukkan Nama">
          </div>
        </div>

        <div class="col-xs-6">
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea style="resize:none" name="alamat" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" rows="2"></textarea>
          </div>
        </div>

        <div class="col-xs-6">
          <div class="form-group">
            <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="InputKel">
                  <option>Pria</option>
                  <option>Wanita</option>
                </select>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label>Agama</label>
              <select name="agama" class="form-control" id="InputAgama">
                <option>Islam</option>
                <option>Kristen Katolik</option>
                <option>Kristen Protestan</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kong Hu Cu</option>
              </select>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label>No. Telp.</label>
                <div class="input-group">
                  <input name="no_hp" type="number" class="form-control" id="InputTelp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="081xxxxxxxxx" value="{{ old('no_hp') }}" data-mask>
                </div>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <label>Angkatan</label>
                  <input id="angkatan" type="number" maxlength="4" class="form-control" name="angkatan"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Tahun Angkatan" value="{{ old('angkatan') }}">
                <label><small>*Tahun</small></label>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
              <label>Status</label>
                  <select name="status" class="form-control" id="InputStat">
                    <option>Alumni</option>
                  </select>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <label for="foto">Foto Anggota</label>
                <div class="input-group">
                  <div class="custom-file">
                  <img id="file_preview" class="pull-left profile-user-img img-responsive" style="height: 150px; width: 150px; display: block;">
                    <input name="file" type="file"  id="file">
                    @if ($errors->has('file'))
                      <div class="alert alert-danger">Terjadi Kesalahan Saat Upload!</div>
                    @endif
                    <label class="custom-file-label" for="foto"><small>*max ukuran foto 800kb</small></label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <label for="kta">Scan KTA</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input name="kta" type="file" class="custom-file-input" id="InputKta">
                    @if ($errors->has('kta'))
                      <div class="alert alert-danger">Terjadi Kesalahan Saat Upload!</div>
                    @endif
                    <label class="custom-file-label" for="kta"><small>*max ukuran scan KTA 800kb</small></label>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <div class="col-xs-12">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Tambah Data</button>
          </div>
        </div>
        </form>
    </div>
  </div>
</div>

  @endsection
