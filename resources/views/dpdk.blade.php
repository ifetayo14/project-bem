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

<!-- Departemen Dalam Kampus -->
<section id="depkom" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Departemen Dalam Kampus</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-8">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/cindy.jpg') }}" alt="" class="img-responsive" />

                    </div>
                    <p style="text-align: justify">Departemen Dalam Kampus adalah salah satu
                    departemen yang bertugas untuk mengkoordinir kegiatan mahasiswa selain yang diselenggarakan oleh BEM.</p>
                    <p style="text-align: justify">Daftar pengurus Departemen Dalam Kampus
                    adalah sebagai berikut :</p>
                    <div>
                        <table style="text-align: left">
                            <tr>
                                <td>Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Cindy Andini Yuliana Sitorus (13317007)</td>
                            </tr>
                            <tr>
                                <td>Sektretaris</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Yetriuli Romaito Sianturi (21S17044)</td>
                            </tr>
                            <tr>
                                <td>Bendahara</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Devi Triana Simanjuntak (21S17047)</td>
                            </tr>
                        </table>
                    </div>
                    <br>

                    <div class="program-kerja">
                        <div class="rutin">
                            <p style="text-align: justify; font-weight: bold;">Program Kerja Rutin</p>
                            <p style="text-align: left; font-weight: bold;">RaKor BEM dan MPM bersama HIMAPRO dan UKM</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Seluruh HIMAPRO dan UKM bersama Departemen Dalam Kampus dan MPM akan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>melakukan evaluasi kerja pada  HIMAPRO. Program kerja rapat koordinasi ini akan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dilaksanakan secara berkala yaitu sekali dalam 1 periode. Rapat akan diikuti oleh</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>masing-masing pengurus HIMAPRO dan UKM. Jika diperlukan rapat tambahan maka dapat</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dikoordinir oleh ketua masing - masing HIMAPRO dan UKM</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Hari Jumat pada sekali satu semester pukul 20.00 – 21.30</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rapat koordinasi dengan agenda mengarahkan cakupan kerja antara MPM, BEM, HIMAPRO,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dan UKM</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Terarahnya setiap pekerjaan antara MPM, BEM, HIMAPRO, dan UKM</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mampu membantu setiap HIMAPRO dan UKM dalam menyesuaikan pekerjaan di</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>masing - masing HIMAPRO dan UKM</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya partisipasi dari HIMAPRO dan UKM dalam pemberian topik yang akan dibawakan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>pada saat rapat</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>HIMAPRO dan UKM mempercayai BEM dan MPM dalam penyelesaian masalah di setiap</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>HIMAPRO dan UKM</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Sulitnya menentukan waktu dan tempat pertemuan rapat</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 750.000,00</td>
                                </tr>
                            </table>
                            <br>
                        </div>

                        <div class="non-rutin"><p style="text-align: justify; font-weight: bold;">Program Kerja Non-Rutin</p>
                            <p style="text-align: left; font-weight: bold;">Pembentukan Panitia PCA</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembentukan Kepanitiaan Program Cinta Almamater yang akan menyambut calon</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Mahasiswa/i baru.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>27 Mei 2019</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pelantikan : Auditorium Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dengan diadakannya Program Cinta Almamater sebagai salah satu tahap penerimaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Calon Mahasiswa/i IT Del, maka diperlukan adanya kepanitiaan yang akan menyusun</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>rangkaian acara Program Cinta Almamater dalam rangka menanamkan nilai nilai</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>MarTuhan, Marroha, Marbisuk kepada calon mahasiswa/i baru.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Terbentuk dan dilantiknya Panitia Program Cinta Almamater</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>1.	Merupakan Kegiatan Tahunan dalam menyambut Calon Mahasiswa/i</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>2.	Merupakan kegiatan yang didukung penuh oleh Bidang Akademik dan Kemahasiswaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Antusiasme Mahasiswa yang ingin menjadi Panitia PCA yang sangat tinggi</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Tingginya persentase mahasiswa yang mendaftar yang hanya memenuhi dibeberapa syarat.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 10.400,00</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Pembubaran Panitia PCA</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pembubaran Kepanitiaan Program Cinta Almamater yang telah melaksanakan tugas</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dalam melatih, mendidik para Mahasiswa/i baru.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>11 Oktober 2019 pukul 19.30 – 20.30</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Auditorium Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dengan berakhirnya Program Cinta Alamater, maka kepanitiaan yang telah menjalankan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>tugasnya harus dibubarkan. Kegiatan ini diadakan 1 kali dalam 1 tahun</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dibubarkannya Panitia PCA 2019</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>1.	Merupakan Kegiatan yang didukung oleh Bidang Akademik dan Kemahasiswaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>2.	Suksesnya Pembentukan Panitia PCA 2019</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Panitia PCA menyelesaikan tugas dengan baik dari awal hingga akhir kegiatan</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>1.	Jika Panitia tidak menyelesaikan tanggungjawabnya, maka pembubaran</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>2.	Adanya Panitia PCA yang menyimpang dari aturan yang berlaku.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 558,00</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Penyusunan Kalender Kegiatan KM IT Del</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Seluruh pengurus BEM, HIMAPRO, UKM, dan MPM melaporkan jadwal kegiatannya yang</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>akan diadakan dalam kurun waktu 1 tahun untuk dimasukkan dalam kalender kegiatan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mahasiswa agar tidak terjadi bentroknya jadwal kegiatan dan dapat disebar kepada</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mahasiswa agar mahasiswa mengetahui seluruh jadwal kegiatan yang ada.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>19 Juni 2019</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Untuk mensinergiskan setiap program kerja yang telah dibuat oleh seluruh departemen</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang ada di BEM IT Del, HIMAPRO, UKM, dan MPM.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Terealisasinya Kalender KM IT Del</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>1.	Kerjasama yang baik anatara seluruh organisasi di IT Del</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>2.	Didukung oleh Bidang Akademik dan Kemahasiswaan IT Del</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Keterlambatan organisasi dalam pemberian jadwal kegiatan</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Perubahan jadwal kegiatan yang muncul karena adanya alasan tertentu</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Pemilihan Ketua Panitia Natal Ephipania</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pemilihan Ketua Natal Ephipania untuk kegiatan Natal yang dilaksanakan setiap</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>tahunnya oleh Yayasan Del</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>2 Desember 2019</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Salah satu perayaan keagamaan yang diadakan di IT Del yaitu Perayaan Natal</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Ephipania, oleh karena itu diperlukan kepanitiaan yang akan menangani rangkaian</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>acara Perayaan Natal Ephipania dimana tahap untuk pembentukan kepanitian tersebut</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yaitu Pemilihan Ketua Panitia Natal Ephipania. Kegiatan ini diadakan 1 kali</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dalam 1 tahun.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Terpilihnya Ketua Natal Ephipania</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Merupakan Kegiatan yang didukung oleh Bidang Akademik dan Kemahasiswaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Institut Teknologi Del dan Yayasan Del</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Lamanya konfirmasi waktu pelaksanaan Natal Ephipania dari Yayasan Del</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>1.	Tersedianya sistem polling yang baik untuk mendukung pemilihan Ketua</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Natal Ephipania</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>2.	Tingginya antusiasme Mahasiswa/i untuk mencalonkan diri sebagai Ketua Natal</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Ephipania</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rendahnya antusiasme Mahasiswa/i untuk mencalonkan diri sebagai Ketua Natal</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Ephipania</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 7.000,00</td>
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
