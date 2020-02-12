@extends('layouts.main')
@section('content')
@section('title', 'Home')
<!-- intro area -->
<div id="app">

<example-component></example-component>

</div>

<div id="intro">
    <div class="intro-text">
        <div class="container">
            <div class="row">


                <div class="col-md-12">

                    <div class="brand">
                        <h1><a href="http://www.del.ac.id/">IT DEL</a></h1>
                        <div class="line-spacer"></div>
                        <p><span>Badan Eksekutif Mahasiswa</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Ketua dan Wakil ketua -->
<section id="ketua_wakil" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Ketua dan Wakil Ketua</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/ketua.jpg') }}" alt="" class="img-responsive" />
                        <h4>Alek Sander Simbolon</h4>
                        <p>Ketua BEM IT Del</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4" data-wow-delay="0.3s">
                    <div class="box-team wow bounceInDown">
                        <img src="{{ asset('img/wakil-ketua.jpg') }}" alt="" class="img-responsive" />
                        <h4>Sogumontar Hendra Simangunsong</h4>
                        <p>Wakil Ketua BEM IT Del</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>

<!-- Sektretaris -->
<hr>
<section id="sekretaris" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Sektretaris</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/sekretaris_1.jpg') }}" alt="" class="img-responsive" />
                        <h4>Heppy Maria Simanungkalit</h4>
                        <p>Sekretaris 1 BEM IT Del</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4" data-wow-delay="0.3s">
                    <div class="box-team wow bounceInDown">
                        <img src="{{ asset('img/sekretaris_2.jpg') }}" alt="" class="img-responsive" />
                        <h4>Sweta Marito Hutauruk</h4>
                        <p>Sekretaris 2 BEM IT Del</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>

    <!-- Bendahara -->
    <hr>
<section id="bendahara" class="home-section bg-white">
    
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Bendahara</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/bendahara_1.jpg') }}" alt="" class="img-responsive" />
                        <h4>Donda Natalia R Simanjuntak</h4>
                        <p>Bendahara 1 BEM IT Del</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4" data-wow-delay="0.3s">
                    <div class="box-team wow bounceInDown">
                        <img src="{{ asset('img/bendahara_2.jpg') }}" alt="" class="img-responsive" />
                        <h4>Shintya Angelica Simatupang</h4>
                        <p>Bendahara 2 BEM IT Del</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>

   <!-- Kepala Departemen -->
   <hr>
   <section id="kepala_departemen" class="home-section bg-white">
    
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Kepala Departemen</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/samuel.jpg') }}" alt="" class="img-responsive" />
                        <h4>Samuel Sanjaya Siahaan</h4>
                        <p>Kepala Departemen Ilmu Pengetahuan dan Teknologi</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/juanda.jpg') }}" alt="" class="img-responsive" />
                        <h4>Juanda Antonius Pakpahan</h4>
                        <p>Kepala Departemen Agama dan Sosial</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4" data-wow-delay="0.3s">
                    <div class="box-team wow bounceInDown">
                        <img src="{{ asset('img/cindy.jpg') }}" alt="" class="img-responsive" />
                        <h4>Cindy Andini Yuliana Sitorus</h4>
                        <p>Kepala Departemen Dalam Kampus</p>
                    </div>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/kristopel.jpg') }}" alt="" class="img-responsive" />
                        <h4>Kristopel Lumbantoruan</h4>
                        <p>Kepala Departemen Komunikasi dan Informasi</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/david.jpg') }}" alt="" class="img-responsive" />
                        <h4>David Sihotang</h4>
                        <p>Kepala Departemen Hubungan Masyarakat</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4" data-wow-delay="0.3s">
                    <div class="box-team wow bounceInDown">
                        <img src="{{ asset('img/alvin.jpg') }}" alt="" class="img-responsive" />
                        <h4>Alvin Prawiro Silaen</h4>
                        <p>Kepala Departemen Olahraga</p>
                    </div>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/jonathan.jpg') }}" alt="" class="img-responsive" />
                        <h4>Jhonathan Simatupang</h4>
                        <p>Kepala Departemen Sarana dan Prasarana</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/januar.jpg') }}" alt="" class="img-responsive" />
                        <h4>Januard Lumbangaol</h4>
                        <p>Kepala Departemen Seni dan Budaya</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-4" data-wow-delay="0.3s">
                    <div class="box-team wow bounceInDown">
                        <img src="{{ asset('img/ekis.jpg') }}" alt="" class="img-responsive" />
                        <h4>Ekis Naomi Lasma</h4>
                        <p>Kepala Departemen Ketertiban dan Kedisiplinan</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection