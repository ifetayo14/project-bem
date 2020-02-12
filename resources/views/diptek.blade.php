@extends('layouts.main')
@section('content')
@section('title', 'Departemen')

<!-- intro area -->
<div id="intro">
    <div class="intro-text">
        <div class="container">
            <div class="row">


                <div class="col -md-12">

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

<!-- Departemen Ilmu Pengetahuan dan Teknologi -->
<section id="depkom" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Departemen Ilmu Pengetahuan dan Teknologi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-8">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/samuel.jpg') }}" alt="" class="img-responsive" />
                        
                    </div>
                    <p style="text-align: justify">Departemen Ilmu Pengetahuan dan Teknologi bergerak di bidang Ilmu 
                    Pengetahuan dan Teknologi yang membantu menyediakan informasi terbaru yang dibutuhkan mahasiswa/i 
                    IT Del seperti perkembangan ilmu pengetahuan dan teknologi serta membantu mahasiswa/i IT Del dalam 
                    yang memiliki kesulitan dalam akademik.</p>
                    <p style="text-align: justify">Daftar pengurus Departemen Ilmu Pengetahuan dan Teknologi 
                    adalah sebagai berikut :</p>
                    <div>
                        <table style="text-align: left">
                            <tr>
                                <td>Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Samuel Sanjaya Siahaan (11417025)</td>
                            </tr>
                            <tr>
                                <td>Wakil Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Yohan Sihite (14S17018)</td>
                            </tr>
                            <tr>
                                <td>Sektretaris</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Jessica Marpaung (21S17008)</td>
                            </tr>
                            <tr>
                                <td>Bendahara</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Maria Zanissa Hutagalung (11S17021)</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>

@endsection