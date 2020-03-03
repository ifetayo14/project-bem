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

<!-- Departemen Agama dan Sosial -->
<section id="depkom" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Departemen Agama dan Sosial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-8">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/juanda.jpg') }}" alt="" class="img-responsive" />

                    </div>
                    <p style="text-align: justify">Departemen Agama dan Sosial adalah salah satu departemen
                    yang bertugas untuk melakukan kegiatan yang berhubungan dengan kegiatan kerohanian.</p>
                    <p style="text-align: justify">Daftar pengurus Departemen Agama dan Sosial
                    adalah sebagai berikut :</p>
                    <div>
                        <table style="text-align: left">
                            <tr>
                                <td>Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Juanda Antonius Pakpahan (12S17058)</td>
                            </tr>
                            <tr>
                                <td>Sektretaris</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Melani Basaria Pakpahan (12S17064)</td>
                            </tr>
                            <tr>
                                <td>Bendahara</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Royda Venny Sitorus (13317013)   </td>
                            </tr>
                        </table>
                    </div><br>
                    <div class="program-kerja">
                        <div class="rutin">
                            <p style="text-align: justify; font-weight: bold;">Program Kerja Rutin</p>
                            <p style="text-align: left; font-weight: bold;">Ibadah Jumat</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ibadah yang rutin diadakan setiap hari jumat</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Setiap hari Jumat pukul 13.00 - 14.00 WIB</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Audit, KL, KB, 722, Pniel</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentukan karakter Del</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dikatakan sukses jika tidak ada ibadah jumat yang tidak terlaksana</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mendapatakan  hal dan semangat baru dari pendengaran akan firman Tuhan</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ibadah dilaksanakan pada hari terakhir akademik dalam satu minggu, jadi mahasiswa bisa</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>leluasa ketika ibadah</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya mahasiswa yang hadir namun tidak mengikuti ibadah dengan baik</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>

                            <br>
                            <p style="text-align: left; font-weight: bold;">Ibadah Pembukaan Awal Semester</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ibadah yang rutin diadakan setiap mengawali semester perkuliahan dan dilakukan sehari</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sebelum week 1 perkuliahan</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Hari Minggu</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Gedung Seba Guna (GSG)</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentukan karakter Del (Meningkatkan semangat Mahasiswa/ i dalam menjalani</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>perkuliahan)</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dikatakan sukses telaksana jika  dapat dijalankan dan diikuti oleh mahasiswa</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kristiani</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Memproleh motivasi untuk semangat menjalani perkulihan</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ibadah dilakukan sebelum semester baru dilakukan</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya mahasiswa yang hadir namun tidak mengikuti ibadah dengan baik</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>

                            <br>
                            <p style="text-align: left; font-weight: bold;">Ibadah Pemberangkatan Ujian</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ibadah yang rutin diadakan sebelum memulai ujian</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Hari Minggu sehari sebelum ujian</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Gedung Seba Guna (GSG)</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentukan karakter Del ( Dalam hal menghadapi ujian yang akan dilalui)</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dikatakan sukses telaksana jika  dapat dijalankan dan diikuti oleh mahasiswa</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kristiani</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Meningkatkan semangat mahasiswa dalam menghadapi ujian</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dilakukan sehari sebelum ujian dilakasanakan, jadi mahasiswa bisa belajar dihari-hari</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sebelum ujian</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya mahasiswa yang hadir namun tidak mengikuti ibadah dengan baik</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div class="non-rutin">
                            <p style="text-align: justify; font-weight: bold;">Program Kerja Non-Rutin</p>
                            <p style="text-align: left; font-weight: bold;">Weekly Reflection</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Meng-email renungan singkat dan pertanyaan tentang isi renungan tersebut kepada setiap</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mahasiswa pada awal minggu</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Setiap Hari Minggu</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentukan karakter Del ( Meningkatkan pemahaman tentang Alkitab melalui renungan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang dikirim tiap minggunya)</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dikatakan sukses telaksana jika mahasiswa meberikan jawaban atas pertanyaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang diberikan</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya hadia bagi para pemenang yang menjawab pertanyaan dengan benar</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pengiriman jawaban yang mudah dilakukan, jadi mahasiswa bisa melakukannya</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>di mana saja</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya mahasiswa yang bermain-main memberikan jawaban atas pertanyaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang diberikan</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>

                            <br>
                            <p style="text-align: left; font-weight: bold;">Ibadah Advent</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ibadah advent merupakan masa penantian lahirnya Yesus Kristus, setelah acara ibadah</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>seluruh pihak yang terlibat akan mengikuti perjamuan kudus, dilanjutkan dengan berdoa</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>pribadi ke depan altar</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Minggu, 08 Des 2019 pukul 19.00 – 22.00 WIB</td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Gedung Serba Guna(GSG)</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentukan karakter Del (penantian sang juruselamat)</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dikatakan sukses telaksana jika  dapat dijalankan dan diikuti oleh seluruh</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mahasiswa kristiani</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya nilai-nilai kerohanian yang meningkatkan semangat dan motivasi menjalani</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kehidupan</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dilakukan pada hari minggu, jadi mahasiswa bisa leluasa untuk mengikuti kegiatan</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya mahasiswa yang hadir namun tidak mengikuti ibadah dengan baik</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>

                            <br>
                            <p style="text-align: left; font-weight: bold;">Ibadah Rabu Abu</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ibadah untuk memulai masa-masa perenungan akan masa sengsara Yesus Kristus. Seluruh</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>pihak yang terlibat akan mengikuti perjamuan kudus, dilanjutkan dengan berdoa pribadi ke</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>depan altar</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rabu, 26 Feb 2020 pukul 19.00 – 22.00</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Gedung Serba Guna(GSG)</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentutukan karakter Del (mengingat masa sengsara Yesus Kristus)</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dikatakan sukses telaksana jika dapat dijalankan dan diikuti oleh</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mahasiswa kristiani</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya kegiatan doa pribadi setiap mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya mahasiswa yang hadir namun tidak mengikuti ibadah dengan baik</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>

                            <br>
                            <p style="text-align: left; font-weight: bold;">Festival Musik Rohani</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Festival yang diikuti oleh seluruh Mahasiswa. Setiap peserta akan menyanyikan lagu Rohani</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang ditentukan oleh Departemen Agama dan Sosial</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Sabtu, 23 Nov 2019 19.00-22.00</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Gedung Seba Guna(GSG)</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program kreative mahasiswa, peningkatan minat kompetisi mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan ini dinyatakan sukses jika semua kelas ikut serta dalam kegiatan</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya hadiah bagi kelas-kelas yang memenangkan perlombaan</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dilakukan pada hari sabtu, sehingga mahasiswa bisa tenang untuk mengikuti kegiatan</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya kelas yang tidak mengirimkan vidio yang telah ditentukan</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 4.000.000 (sebagian dari Depagsos)</td>
                                </tr>
                            </table>

                            <br>
                            <p style="text-align: left; font-weight: bold;">Donor Darah</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Acara ini diadakan sebagai bentuk kepedulian terhadap sesama dan lingkungan</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Sabtu, 28 Sep 2019 pukul 10.00 – 16.00</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Audit</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentukan karakter Del, Peningkatan Rasa Sosial</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan ini dinyatakan sukses jika bayak mahasiswa yang ikut serta mendonorkan darah</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya hadiah bagi para mahasiswa yang ikut serta mendonorkan darah</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dilakukan pada hari sabtu, sehingga mahasiswa bisa tenang untuk mengikuti kegiatan</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mahasiswa yang mau mendonorkan darahnya tidak banyak</td>
                                </tr>
                                <tr>
                                    <td>Perkiraaan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 1.000.000 (sebagian dari Depagsos)</td>
                                </tr>
                            </table>

                            <br>
                            <p style="text-align: left; font-weight: bold;">Paskah dan Jalan Salib</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Ibadah peringatan paskah dan penyaliban Yesus Kristus</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Minggu, 19 Apr 2019 pukul 05.00 – 16.00 WIB</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Lapangan Hijau dan GSG</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentutukan karakter Del (menginat masa sengsara Yesus Kristus)</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan ini dinyatakan sukses jika kegiatan ini bisa terlaksana dengan baik</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya hadiah dan snack pada saat kegiatan paskah</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dilakukan pada hari Minggu, jadi mahasiswa bisa leluasa untuk mengikuti kegiatan</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya mahasiswa yang mengikuti kegiatan tapi tidak mengikuti acara dengan baik</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 7.000.000,-  (sebagian dari Depagsos)</td>
                                </tr>
                            </table>

                            <br>
                            <p style="text-align: left; font-weight: bold;">Pengajian</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Belajar ilmu agama bersama seorang Aalim atau orang yang berilmu merupakan bentuk</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>ibadah yang wajib setiap muslim</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Sekali 2 Bulan (Dimulai week week 7)</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>EH</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentukan karakter Del yang takut akan Tuhan</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan ini dinyatakan sukses jika seluruh mahasiswa muslim ikut serta dalam pengajian</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mendapatakan pembelajaran baru maupun semakin mengingat ayat-ayat</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya antusias mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dilakukan pada hari minggu, jadi mahasiswa bisa leluasa untuk mengikuti kegiatan</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya mahasiswa yang mengikuti kegiatan tapi tidak sungguh-sungguh</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>




@endsection
