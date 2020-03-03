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

<!-- Departemen Sarana dan Prasarana -->
<section id="depkom" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Departemen Sarana dan Prasarana</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-8">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/jonathan.jpg') }}" alt="" class="img-responsive" />

                    </div>
                    <p style="text-align: justify">Departemen Sarana dan Prasarana adalah salah
                    satu departemen yang bertugas untuk mengurus peralatan yang digunakan dalam kegiatan BEM.</p>
                    <p style="text-align: justify">Daftar pengurus Departemen Sarana dan Prasarana
                    adalah sebagai berikut :</p>
                    <div>
                        <table style="text-align: left">
                            <tr>
                                <td>Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Jhonathan Simatupang (11S17047)</td>
                            </tr>
                            <tr>
                                <td>Sektretaris</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Desriyani Silaen (12S17035)</td>
                            </tr>
                        </table>
                    </div>

                    <br>
                    <div class="program-kerja">
                        <div class="rutin">
                            <p style="text-align: justify; font-weight: bold;">Program Kerja Rutin</p>
                            <p style="text-align: left; font-weight: bold;">Pengadaan peralatan kegiatan antar departemen</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Membantu Departemen lain menyediakan Perlatan untuk acara yang akan dilaksanakan</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dikondisikan dengan kegiatan departemen lain</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyukseskan acara departemen lain dengan cara</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Pelatihan cara pemakaian peralatan</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Melakukan Pelatihan kepada anggota baru untuk Operasional atau penggunaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Peralatan Departemen Sarpras</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>21/09/2019</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ruang Musik</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Agar seluruh anggota dept. sarpras mengetahui cara pemakaian peralatan</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Perawatan Perlatan</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Melakukan Pengecheckan Kondisi Peralatan</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Sekali 2 bulan dimulai bulan September 2019 (Jumat malam)</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ruang Musik</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Agar mengetahui kondisi peralatan & Memperbaiki/mengganti peralatan yang sudah rusak</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Studio Musik</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Penyediaan Sarana Pengembangan  Minat dan Bakat</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Setiap Weekend atau Libur dan Diluar Jam Akademik</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ruang Musik</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Agar Mahasiswa dapat Mengembangkat Minat dan bakat Mereka khususnya Dibidang Seni</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>musik</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan Ini berjalan apabila Semua peralatan Musik Tersedia dengan Kondisi yang Baik</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Membantu mahasiswa Melatih dan Mengembangkan Kemampuan Seni dan Bakat Musik</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Bergantung Pada Kondisi Peralatan Dan Kondisi Akademik</td>
                                </tr>
                            </table>
                        </div>

                        <br>

                        <div class="non-rutin">
                            <p style="text-align: justify; font-weight: bold;">Program Kerja Non-Rutin</p>
                            <p style="text-align: left; font-weight: bold;">Nonton Bareng (Bola/ Film)</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Melakukan Kegiatan Nonton Bareng Kejuaran Sepak bola atau Film Box Office</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan dengan kopi sore (Depsenbud).</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Audit</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Agar mahasiswa dapat merasakan menonton bersama di kampus menumbuhkan rasa</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>persaudaraan dengan menonton bersama</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan ini berjalan apabila terdapat Kejuaraan Sepak bola atau Olahraga lain Dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Film Seru yang Disukai mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menambah rasa kekeluargaan dan Menghilangkan rasa Jenuh Mahasiswa dalam Kegiatan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Perkuliahan</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menunggu Adanya Kejuaraan Sepak bola atau Film yang Baik dan Sewajarnya</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 300.000,00</td>
                                </tr>
                            </table>
                            <br>

                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>

@endsection
