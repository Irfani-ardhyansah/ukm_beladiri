
@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Info Kegiatan
        <small>UKM Pencak IAIN</small>
      </h1>
    </section>

    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      Data Berhasil Diinput!
    </div>
    @endif
    
    @if(session('hapus'))
    <div class="alert alert-danger" role="alert">
      Data Berhasil Dihapus!
    </div>
    @endif
    <!-- Main content -->
    <section class="content ml-2">
          <div class="box float-left">

            <!-- /.box-header -->
            <div class="box-body">
                <img class="profile-user-img img-responsive" style="height: 450px; width: 450px; display: block; margin: auto; " src="{{url('/data_kegiatan/'.$data_kegiatan -> foto)}}" alt="User profile picture">
                <figcaption>
                   <font color="#00FFFF"> <h2>
                    {{$data_kegiatan -> nama_kegiatan}}
                    </h2></font>
                    <p>
                    <small>{{$data_kegiatan -> tempat}} - {{$data_kegiatan -> tanggal}}</small>
                    </p>
                    <p>
                    {{$data_kegiatan -> deskripsi}}
                    </p>
                </figcaption>  
           </td>
      </tr>

          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <a href="/admin/kegiatan" type="button" class="btn btn-secondary">Kembali</a>
        </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  
  @endsection
