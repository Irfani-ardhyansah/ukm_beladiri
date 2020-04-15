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
                            <h2>Galeri Kegiatan</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/">
                                        <i class="ion-ios-home"></i>
                                       Beranda
                                    </a>
                                </li>
                                <li class="active">Galeri</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<!--=============================
=            Gallery            =
==============================-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="row">

        @foreach ($data_kegiatan as $kegiatan)
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('/data_kegiatan/'.$kegiatan -> foto)}}" style="height: 300px; width: 300px; display: block; margin: auto; " class="img-responsive" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{asset('/data_kegiatan/'.$kegiatan -> foto)}}">Lihat Foto</a>
                            </div>
                        </div>
                       
                    </div>
                    <figcaption>
                   <font color="#00FFFF"> <h4>
                    {{$kegiatan -> nama_kegiatan}}
                    </h4></font>
                    <p>
                    {{$kegiatan -> deskripsi}}
                    </p>
                    </figcaption>
                </figure>
            </div>
            @endforeach

        </div>
    </div>
</section>   




            
         
            @endsection
