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

<!-- Departemen Hubungan Masyarakat -->
<section id="humas" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Departemen Hubungan Masyarakat</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-8">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/david.jpg') }}" alt="" class="img-responsive" />
                        
                    </div>
                    <p style="text-align: justify">Departemen Hubungan Masyarakat adalah 
                    salah satu departemen yang bertugas untuk memimpin acara-acara yang 
                    diadakan oleh BEM, mendokumentasikan kegiatan yang diadakan oleh BEM 
                    serta menangani hubungan BEM ke luar kampus</p>
                    <p style="text-align: justify">Daftar pengurus Departemen Hubungan Masyarakat 
                    adalah sebagai berikut :</p>
                    <div>
                        <table style="text-align: left">
                            <tr>
                                <td>Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>David Sitohang (14S17036)</td>
                            </tr>
                            <tr>
                                <td>Wakil Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Albert Manurung (11S18006)</td>
                            </tr>
                            <tr>
                                <td>Sektretaris</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Evi Fanny Dear Sidabutar (12S17045)</td>
                            </tr>
                            <tr>
                                <td>Sektretaris 2</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Dita L. Sastri Sihombing (12S18020)</td>
                            </tr>
                            <tr>
                                <td>Bendahara</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Minarti Ruth Adisya (21S17029)</td>
                            </tr>
                            <tr>
                                <td>Bendahara 2</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Paulus Richardo R P S (12S18068)</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>

@endsection