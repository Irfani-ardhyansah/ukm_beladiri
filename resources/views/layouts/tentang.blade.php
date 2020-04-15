@extends('layouts.app')


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
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
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
            <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <h2>
               Sejarah Singkat
                </h2>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                </p>
            </div>
            <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                <h2 class="item_title">
                Pendiri UKM
                </h2>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                </p>
            </div>
            <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                <h2 class="item_title">
                Lokasi Sekretariat
                </h2>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                </p>
            </div>
        </div>
    </div>
</section>




        <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-1.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-2.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-3.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-4.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-5.jpg')}}" alt="">
                            </div>
                             <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-1.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-2.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-3.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-4.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset ('timerFree/images/clients/logo-5.jpg')}}" alt="">
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
