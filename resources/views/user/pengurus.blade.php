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
                            <h2>Data Pengurus UKM Bela Diri PSHT IAIN Ponorogo</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Data Pengurus</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
       <div class="row">
            <div class="col-md-7 col-md-offset-1">
						<h4 class="m-t-0 header-title"><b>Pengurus Periode 2019/2020</b></h4>
											
								@foreach($data_anggota as $anggota)
                                @if($anggota -> jabatan == 'Ketua')
											<div class="row">
												<div class="col-md-4">
													<div class="thumbnail">
                                                    <center><h3>{{$anggota -> jabatan}}</h3></center>
														<img src="{{url('/data_file/'.$anggota->file)}}" style="height: 200px; width: 200px; display: block; margin: auto;" class="img-responsive" display="block" width="200" height="200">
														<div class="caption">
															<center><h4>{{ $anggota -> nama_anggota }}</h4></center>
															<p>
																<a href="/pengurus/info/{{ $anggota -> id_anggota }}" class="btn btn-primary waves-effect waves-light" role="button">Info</a>
															</p>
														</div>

													</div>
												</div>	
									@endif
                                    @endforeach

								@foreach($data_anggota as $anggota)
                                @if($anggota -> jabatan == 'Wakil')
												<div class="col-md-4">
													<div class="thumbnail">
                                                    <center><h3>{{$anggota -> jabatan}} Ketua</h3></center>
														<img src="{{url('/data_file/'.$anggota->file)}}" style="height: 200px; width: 200px; display: block; margin: auto;" class="img-responsive" display="block" width="200">
														<div class="caption">
															<center><h4>{{$anggota -> nama_anggota}}</h4></center>
															<p>
																<a href="/pengurus/info/{{ $anggota -> id_anggota }}" class="btn btn-primary waves-effect waves-light" role="button">Info</a>
															</p>
														</div>

													</div>
												</div>	
									@endif
                                    @endforeach

								@foreach($data_anggota as $anggota)
                                @if($anggota -> jabatan == 'Sekertaris I')
												<div class="col-md-4">
													<div class="thumbnail">
                                                    <center><h3>{{$anggota -> jabatan}}</h3></center>
														<img src="{{url('/data_file/'.$anggota->file)}}" style="height: 200px; width: 200px; display: block; margin: auto;" class="img-responsive" display="block" width="200">
														<div class="caption">
															<center><h4>{{$anggota -> nama_anggota}}</h4></center>
															<p>
																<a href="/anggota/info/{{ $anggota -> id_anggota }}" class="btn btn-primary waves-effect waves-light" role="button">Info</a>
															</p>
														</div>

													</div>
												</div>	
                                            </div>
								@endif
                                @endforeach

								@foreach($data_anggota as $anggota)
                                @if($anggota -> jabatan == 'Sekertaris II')
												<div class="col-md-4">
													<div class="thumbnail">
                                                    <center><h3>{{$anggota -> jabatan}}</h3></center>
														<img src="{{url('/data_file/'.$anggota->file)}}" style="height: 200px; width: 200px; display: block; margin: auto;" class="img-responsive" display="block" width="200">
														<div class="caption">
															<center><h4>{{$anggota -> nama_anggota}}</h4></center>
															<p>
																<a href="/anggota/info/{{ $anggota -> id_anggota }}" class="btn btn-primary waves-effect waves-light" role="button">Info</a>
															</p>
														</div>

													</div>
												</div>	
                                            </div>
								@endif
                                @endforeach

								@foreach($data_anggota as $anggota)
                                @if($anggota -> jabatan == 'Bendahara I')
												<div class="col-md-4">
													<div class="thumbnail">
                                                    <center><h3>{{$anggota -> jabatan}}</h3></center>
														<img src="{{url('/data_file/'.$anggota->file)}}" style="height: 200px; width: 200px; display: block; margin: auto;" class="img-responsive" display="block" width="200">
														<div class="caption">
															<center><h4>{{$anggota -> nama_anggota}}</h4></center>
															<p>
																<a href="/anggota/info/{{ $anggota -> id_anggota }}" class="btn btn-primary waves-effect waves-light" role="button">Info</a>
															</p>
														</div>

													</div>
												</div>	
                                            </div>
								@endif
                                @endforeach

								@foreach($data_anggota as $anggota)
                                @if($anggota -> jabatan == 'Bendahara II')
												<div class="col-md-4">
													<div class="thumbnail">
                                                    <center><h3>{{$anggota -> jabatan}}</h3></center>
														<img src="{{url('/data_file/'.$anggota->file)}}" style="height: 200px; width: 200px; display: block; margin: auto;" class="img-responsive" display="block" width="200">
														<div class="caption">
															<center><h4>{{$anggota -> nama_anggota}}</h4></center>
															<p>
																<a href="/anggota/info/{{ $anggota -> id_anggota }}"  class="btn btn-primary waves-effect waves-light" role="button">Info</a>
															</p>
														</div>

													</div>
												</div>	
                                            </div>
								@endif
		
                                @endforeach
									
								



							
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
                                                <img src="ubold/tema/images/users/avatar-2.jpg" class="img-square" alt="profile-image">
                                               </center> 
                                                <p></p>

                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Nama</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" class="form-control" readonly="" value="Afa Lathifah">
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



@endsection