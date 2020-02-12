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

<!-- Departemen Ketertiban -->
<section id="depkom" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Departemen Ketertiban</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-8">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/ekis.jpg') }}" alt="" class="img-responsive" />
                        
                    </div>
                    <p style="text-align: justify">Departemen Ketertiban adalah salah satu 
                    departemen yang bertugas untuk melakukan pengawasan pelaksanaan kegiatan di IT Del.</p>
                    <p style="text-align: justify">Daftar pengurus Departemen Ketertiban adalah sebagai berikut :</p>
                    <div>
                        <table style="text-align: left">
                            <tr>
                                <td>Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Ekis Naomi Lasma (12S17059)</td>
                            </tr>
                            <tr>
                                <td>Wakil Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Febriend B.R.C Sigalingging (11317013)</td>
                            </tr>
                            <tr>
                                <td>Sektretaris</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Cicasmi Hasibuan (11317013)</td>
                            </tr>
                            <tr>
                                <td>Bendahara</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Suprianto Hutapea (14S17035)</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>

@endsection