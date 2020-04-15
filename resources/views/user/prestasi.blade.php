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
                            <h2>Prestasi UKM Bela Diri PSHT IAIN Ponorogo</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Prestasi</li>
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
                        <div class="block wow fadeInDown" data-wow-delay=".3s">
                            <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kejuaraan</th>
                  <th>Nama Peraih</th>
                  <th>Tingkat</th>
                  <th>Kelas</th>
                  <th>Keterangan</th>
                  <th>Kategori</th>
                  <th>Tahun</th>
                </tr>
                </thead>
                @foreach ($data_prestasi as $data)
                <tbody>
                <tr>
                  <td>{{ $loop -> iteration }}</td>
                  <td>{{ $data -> nama_event }}</td>
                  <td>{{ $data -> nama_peraih }}</td>
                  <td>{{ $data -> tingkat }}</td>
                  <td>{{ $data -> kelas }}</td>
                  <td>{{ $data -> keterangan }}</td>
                  <td>{{ $data -> kategori }}</td>
                  <td>{{ $data -> tahun }}</td>
                </tr>
                </tbody>
                @endforeach
                            </table>
                            </div>
                        </div>
                    </div>
                </div>


    </div>
</section>



         
@endsection