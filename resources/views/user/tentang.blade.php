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
                            <h2>Tentang UKM Bela Diri PSHT IAIN Ponorogo</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Tentang</li>
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
@foreach($data_tentang as $data)
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ asset ('timerFree/images/anggota.jpg')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">UKM BELA DIRI PSHT</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        {{$data -> deskripsi}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="block about-feature-3 wow fadeInDown" style="height: 500px;" data-wow-duration="500ms" data-wow-delay=".3s">
            <center><h2 class="item_title">Sejarah Singkat</h2></center>
                <p> {{$data -> sejarah}}
                    </p>
            </div>
            <div class="block about-feature-2 wow fadeInDown" style="height: 500px;" data-wow-duration="500ms" data-wow-delay=".5s">
                <center><h2 class="item_title">
                Jadwal Latihan
                </h2></center>
                <p> {{$data -> jadwal}} </p>
            </div>
            <div class="block about-feature-3 wow fadeInDown" style="height: 500px;" data-wow-duration="500ms" data-wow-delay=".7s">
                <center><h2 class="item_title">
                Lokasi Latihan
                </h2></center>
                <p>{{$data -> lokasi}}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>





            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
        
            @endsection
