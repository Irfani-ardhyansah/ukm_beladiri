*@extends('layouts.app')


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
                          
                            <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kejuaraan</th>
                  <th>Tingkat</th>
                  <th>Nama Peraih</th>
                  <th>Tahun</th>
                  <th>Keterangan</th>
                  <th>Kategori</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Pekan Olahraga Mahasiswa</td>
                  <td>Kabupaten/Kota</td>
                  <td>Alinda</td>
                  <td>2019</td>
                  <td>Juara 2</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pekan Olahraga Mahasiswa</td>
                  <td>Kabupaten/Kota</td>
                  <td>Ayub Rohman</td>
                  <td>2019</td>
                  <td>Juara 3</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Ponorogo Cup</td>
                  <td>Kabupaten/Kota</td>
                  <td>David Hasyim</td>
                  <td>2019</td>
                  <td>Juara 1</td>
                </tr>
                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


    </div>
</section>



            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
@endsection