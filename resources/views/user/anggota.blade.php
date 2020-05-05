@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop

@extends('user.app')


@section('content')    
     
     <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Data Anggota UKM Bela Diri PSHT IAIN Ponorogo</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/beranda">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Data</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=====================================
=            Full Width Blog            =
======================================-->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                <form action="/anggota/cari" method="GET" class="navbar-left app-search pull-left hidden-xs">
                    <div class="col-xs-8">
                        <input type="text" name="cari" id="cari" placeholder="Search..." class="form-control" value="{{ old('search') }}">
                    </div>
                    <button type="submit" class="btn btn-light">
                        <i class="fa fa-search"></i> 
                    </button>
                </form>

                <table id="table" class="table table-striped table-bordered">
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
                        @foreach($data_anggota as $anggota)
                        <tbody>
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td>{{ $anggota -> nama_anggota }}</td>
                                <td>{{ $anggota -> alamat }}</td>
                                <td>{{ $anggota -> angkatan }}</td>
                                <td>
                                @if($anggota -> status == "Aktif")
                                    <span class="btn  btn-xs btn-rounded btn-info disabled">{{$anggota -> status}}</span>
                                @else($anggota -> status == "Alumni")
                                    <span class="btn  btn-xs btn-rounded btn-danger disabled">{{$anggota -> status}}</span>
                                @endif
                                </td>
                                <td>
                                    <a href="/anggota/info/{{ $anggota -> id_anggota }}" class="on-default edit-row btn btn-block btn-custom btn-info">Info</a></td>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data_anggota->links() }}
                </div>
            </div>
        </div>
    </div>
</section>



<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Info Anggota</h4>
            </div>
        <form  method="post" class="form-horizontal" role="form">
            <div class="modal-body">
            <center>
            <img src="ubold/tema/images/users/avatar-2.jpg"  class="img-square" alt="profile-image">
            </center> 
            <p></p>

        <div class="form-group">
                <label class="col-md-2 control-label">Nama</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" readonly="" value="">
                </div>
            </div>       
            <div class="form-group">
                <label class="col-md-2 control-label">Kelas</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" readonly="" value="TI 3A">
                </div>
            </div>       
            <div class="form-group">
                <label class="col-md-2 control-label">NIM</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" readonly="" value="123124214">
                </div>
            </div>       
            <div class="form-group">
                <label class="col-md-2 control-label">Jabatan</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" readonly="" value="Anggota">
                </div>
            </div>       


            </div>                
            <div class="modal-footer">
                
                <button type="button" data-style="slide-right" data-dismiss="modal" class="btn btn-custom btn-default waves-effect waves-light">Tutup</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- <script type="text/javascript">
    $(function() {
        var oTable = $('#table-anggota').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("data-anggota") }}'
            },
            columns: [
                {data: 'nama_anggota', name:'nama_anggota'},
                {data: 'alamat', name:'alamat'},
                {data: 'angkatan', name:'angkatan'},
                {data: 'status', name:'status', orderable: false, searchable:false},
            ],
        });
    });
</script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection