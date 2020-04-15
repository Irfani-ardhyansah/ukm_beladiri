@extends('layouts.app')


@section('content')
<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>UKM BELA DIRI PSHT</span><br>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">IAIN</b>
                        <b>PONOROGO</b>
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                      <b> Jl. Pramuka No. 56 Ponorogo<br></b>
                    </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-info" data-wow-delay=".9s" href="#works" data-section="#works">MULAI</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                   Deksripsi UKM
                    </h2>
                    <p>
                       Unit Kegiatan Mahasiswa yang bergerak di bidang olah raga yaitu bela diri pencak silat PSHT yang berada di IAIN Ponorogo.
                    </p>
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="timerFree/images/anggota2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->



<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offer From Me</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-flask-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Well documented.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Well documented.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-americanfootball-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Free updates</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-keypad-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Solid Support</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Simple Installation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->


@endsection