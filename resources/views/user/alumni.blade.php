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
            <div class="card-box">
                <div class="row">
                    <h4 class="m-t-0 header-title"><b>Masukkan Nama Anggota yang akan dicari </b></h4>
                    <div class="input-group col-xs-4">
                        <form action="/alumni/cari" method="GET">
                            <div class="col-xs-9">
                                <input type="text" name="cari" id="cari" class="form-control input-lg" placeholder="Cari Alumni .." value="{{ old('cari') }}">
                            </div>
                            <button class="btn btn-custom waves-effect waves-light btn-inverse btn-lg" type="submit" value="CARI"><i class="fa fa-search m-r-5"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection