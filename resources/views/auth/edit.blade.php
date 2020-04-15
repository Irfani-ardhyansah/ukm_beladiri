@section('js')
    <script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })


var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('submit').disabled = false;
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('submit').disabled = true;
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
    </script>
@stop

@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Form Edit Admin
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
            <form action="/admin/akun/update/{{ $data->id }}" method="post" enctype="multipart/form-data">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

      <div class="form-group">
            <label>Nama</label>
                <div class="input-group col-xs-4">
                    <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>
        </div>

        <div class="form-group">
          <label for="nama">Nama</label>
            <div class="input-group col-xs-4">
            <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" required >
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
          <label for="alamat">Password</label>
            <div class="input-group col-xs-4">
            <input id="password" type="password" class="form-control" onkeyup='check();' name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
          <label>Confirm Password</label>
            <div class="input-group col-xs-4">
                <input id="confirm_password" type="password" onkeyup="check()" class="form-control" name="password_confirmation">   
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