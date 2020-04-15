@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Admin UKM
      </h1>
    </section>

    <!-- @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      Data Berhasil Diinput!
    </div>
    @endif

    @if(session('hapus'))
    <div class="alert alert-danger" role="alert">
      Data Berhasil Dihapus!
    </div>
    @endif -->
    <!-- Main content -->
    <section class="content ml-2">
          <div class="box float-left">
            <!-- /.box-header -->
            <div class="box-body">
            
            <!-- tambah form -->
            <div class="pull-right">
            <button type="button" class="btn btn-success float-right btn-sm" data-toggle="modal" data-target="#akunModal"><i class="fa fa-plus"></i></button>
            </div>

<!-- Anggota Modal -->
<div class="modal fade" id="akunModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data <b>Anggota</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        
      <form action="/admin/akun/tambah" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" class="col-md-4 control-label">Name</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>
          <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
          <label for="level" class="col-md-4 control-label">Level</label>
          <div class="col-md-6">
          <select class="form-control" name="level" required="">
              <option value="admin">Admin</option>
          </select>
          </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-4 control-label">Password</label>
          <div class="col-md-6">
              <input id="password" type="password" class="form-control" onkeyup='check();' name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>
                  
      <div class="form-group">
          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
          <div class="col-md-6">
              <input id="confirm_password" type="password" onkeyup="check()" class="form-control" name="password_confirmation" required>
              <span id='message'></span>
          </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--             
            <div class="pull-right">
            <form class="form-inline float-right" action="/anggota/cari" method="GET">
              <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Search" aria-label="Search" value="{{ old('cari') }}">
              <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" value="cari">Search</button>
            </form>
            </div> -->
            
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Created At</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                @foreach($datas as $data)
                <tbody>
                <tr>
                  <td>{{ $loop -> iteration }}</td>
                  <td>{{ $data -> name }}</td>
                  <td>{{ $data -> email }}</td>
                  <td>{{ $data -> created_at }}</td>
                  <td>
                  @if($data -> level == 'superadmin')
                    <b><i>Super Admin</i></b>
                  @endif  
                  @if($data -> level == 'admin')  
                    <a href="/admin/akun/edit/{{ $data -> id }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                  @endif

                  @if($data -> level == 'admin')
                      <a href="/admin/akun/hapus/{{ $data -> id }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i></a></td>
                  @endif
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  @endsection
