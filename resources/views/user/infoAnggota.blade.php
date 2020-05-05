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
                            <h2>Info Lengkap Anggota</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Info</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <div class="col-xs-6">
                        <div class="form-group">
                                <label class="col-md-2 control-label">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" readonly="" value="{{$data_anggota -> nama_anggota}}">
                                </div>
                            </div>       
                            <div class="form-group">
                                <label class="col-md-2 control-label">Angkatan</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" readonly="" value="{{ $data_anggota -> angkatan }}">
                                </div>
                            </div>       
                            <div class="form-group">
                                <label class="col-md-2 control-label">Alamat</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" readonly="" value="{{ $data_anggota -> alamat }}">
                                </div>
                            </div>       
                            <div class="form-group">
                                <label class="col-md-2 control-label">No HP</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" readonly="" value="{{ $data_anggota -> no_hp }}">
                                </div>
                            </div>       
                            <a class="btn btn-info" href="/anggota" role="button">Back</a>
                    </div>
                    <div class="col-xs-6">
                        <img class="profile-user-img img-responsive" src="{{url('/data_file/'.$data_anggota->file)}}" style="height: 150px; width: 150px; display: block; margin: auto; class="img-square" alt="profile-image">
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>



            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
        
            @endsection
