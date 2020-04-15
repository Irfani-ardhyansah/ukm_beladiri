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
                            <h2>Data Alumni</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/beranda">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Data Alumni</li>
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
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Data Alumni </b></h4>
									<p class="text-muted font-13">
										UKM Bela Diri IAIN Ponorogo
									</p>
									
									<table data-toggle="table"
										   data-show-columns="false"
										   data-page-list="[5, 10, 20]"
										   data-page-size="5"
										   data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
                                           <p>
									<a href="/alumni" class="btn btn-custom btn-danger waves-effect waves-light" role="button">Kembali</a>
                                    </p>
										<thead>
											<tr>
												<th data-field="foto" data-switchable="false">Foto</th>
												<th data-field="nama" data-switchable="false">Nama</th>
												<th data-field="alamat">Alamat</th>
												<th data-field="no Hp">No HP</th>
												<th data-field="angkatan">Angkatan</th>
												
											</tr>
										</thead>
										@foreach($data_anggota as $anggota)
										<tbody>
											<tr>
												<td><img class="profile-user-img img-responsive" style="height: 120px; width: 100px; display: block; margin: auto; " src="{{url('/data_file/'.$anggota->file)}}" alt="User profile picture"></td>
												<td>{{$anggota -> nama_anggota}}</td>
												<td>{{$anggota -> alamat}}</td>
												<td>{{$anggota -> no_hp}}</td>
												<td>{{$anggota -> angkatan}}</td>
											</tr>
										</tbody>
										@endforeach
									</table>
									{{ $data_anggota->links() }}
								</div>
							</div>
						</div>


    </div>
</section>




@endsection