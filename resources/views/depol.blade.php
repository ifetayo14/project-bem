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

<!-- Departemen Olahraga -->
<section id="depol" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Departemen Olahraga</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-8">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/alvin.jpg') }}" alt="" class="img-responsive" />

                    </div>
                    <p style="text-align: justify">Departemen Olahraga adalah salah satu departemen yang bertugas
                    untuk memimpin olahraga pagi mahasiswa. Departemen olahraga juga melakukan perawatan
                    alat olahraga di Institut Teknologi.</p>
                    <p style="text-align: justify">Daftar pengurus Departemen Olahraga adalah sebagai berikut :</p>
                    <div>
                        <table style="text-align: left">
                            <tr>
                                <td>Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Alvin Prawiro Silaen (21S17054)</td>
                            </tr>
                            <tr>
                                <td>Sektretaris</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Yohana Rosa Amelia B (11417007)</td>
                            </tr>
                            <tr>
                                <td>Bendahara</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Nova Prissila Nababan (14S17050)</td>
                            </tr>
                        </table>
                        <br>

                        <div class="program-kerja">
                            <div class="rutin">
                                <p style="text-align: justify; font-weight: bold;">Program Kerja Rutin</p>
                                <p style="text-align: left; font-weight: bold;">Senam Pagi</p>
                                <table style="text-align: left">
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Senam pagi merupakan program rutin dari kemahasiswaan yang dilakukan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2 x seminggu yaitu pada hari selasa dan jumat, dimana departemen olahraga</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>sebagai wadah dan pengawas kegiatan. Teknisnya, mahasiswa akan dikumpulkan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>di lapangan hijau IT Del pada pukul 05.10 WIB setelah melaksanankan kurve</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>di asrama masing - masing. Pada pukul 05.20 WIB akan dilaksanakan ibadah</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>sebelum senam dimulai. Kemudian senam akan dimulai pukul 05.30 WIB.</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Masing - masing kelas akan bergantian dalam memimpin senam setiap pagi.</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Pelaksanaan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>2X seminggu pukul 05.30 – 06.00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Lapangan Hijau Institut Teknologi Del</td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Kegiatan ini bertujuan untuk Menjaga dan meningkatkan daya tahan, kekuatan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>otot, kelincahan, kelenturan tubuh serta kebugaran</td>
                                    </tr>
                                    <tr>
                                        <td>Indikator</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Program ini dikatakan berhasil apabila tidak ada masalah pada sound system</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>dan tidak ada mahasiswa yang tidak melaksanakan senam pada saat kegiatan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>berlangsung.</td>
                                    </tr>
                                    <tr>
                                        <td>Strength</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Mahasiswa akan bugar dan bersemangat dalam melaksanakan perkuliahan maupun</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>aktivitas lainnya.</td>
                                    </tr>
                                    <tr>
                                        <td>Weakness</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Mahasiswa memiliki sikap bermalas-malas dalam melaksanakan senam,</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Instruktor yang tidak menguasai senam, pencahayaan yang kurang di sekitar</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>lapangan, dan Kurangnya pengawasan dari keasramaan.</td>
                                    </tr>
                                    <tr>
                                        <td>Opportunity</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Kegiatan ini dilaksanakan di pagi hari , sehinnga rutinitas lain mahasiswa</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>tidak terganggu, kemudian waktu yang pas untuk berolahraga.</td>
                                    </tr>
                                    <tr>
                                        <td>Threat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Departemen Olahraga sebagai pengawas kegiatan, banyak yang mengalami</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>permasalahan perizinan dari pihak keasramaan maupun satpam mengenai waktu</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>masuk asrama  maupun waktu masuk kampus (terkhusus asrama luar)</td>
                                    </tr>
                                    <tr>
                                        <td>Perkiraan Biaya</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>-</td>
                                    </tr>
                                </table>
                                <br>

                                <p style="text-align: left; font-weight: bold;">Pengadaan Inventory dan Perawatan Lapangan (Pengecatan Lapangan)</p>
                                <table style="text-align: left">
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Pengadaan Inventory dan Perawatan lapangan merupakan program rutin dari</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>departemen olahraga. Kegiatan ini bermaksud untuk memperlengkapi segala</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>kebutuhan terkait fasilitas olahraga di IT Del. Sementara untuk pengecatan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>lapangan diperlukan mengingat kondisi cat lapangan yang sekarang telah pudar</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>(garis & batas tidak kelihatan)</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Pelaksanaan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Dilaksanakan 2 x 1 tahun  (setiap awal semester,kecuali pengecatan lapangan)</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Institut Teknologi Del</td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Tujuan kegiatan ini adalah untuk memperbaiki peralatan yang sudah rusak atau</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>melengkapi peralatan yang belum ada.</td>
                                    </tr>
                                    <tr>
                                        <td>Indikator</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Program ini dinyatakan berhasil apabila peralatan-peralatan olahraga yang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>diperlukan oleh mahasiswa/mahasiswi dan civitas IT Del dapat dilengkapi /</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>diperbaiki.</td>
                                    </tr>
                                    <tr>
                                        <td>Strength</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Seluruh civitas IT Del dapat berolahraga dengan nyaman dengan perlengapan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>fasilitas olahraga yang tersedia.</td>
                                    </tr>
                                    <tr>
                                        <td>Weakness</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Terkadang kurangnya kesadaran mahasiswa dalam menjaga fasilitas olahraga yang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>diberikan contohnya tidak mengembalikan perlengkapan ke tempat semula.</td>
                                    </tr>
                                    <tr>
                                        <td>Opportunity</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Dengan fasilitas olahraga yang memadai setiap Civitas IT Del memiliki</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>kesempatan untuk menyalurkan hobi mereka di bidang olahraga , untuk rehat</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>sejenak dari rutinitas di IT Del</td>
                                    </tr>
                                    <tr>
                                        <td>Threat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Penggunaan waktu dalam penggunaan fasilitas terkadang melebihi standar waktu</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>yang telah ditetapkan</td>
                                    </tr>
                                    <tr>
                                        <td>Perkiraan Biaya</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Pengadaan inventori : Rp 2.480.000,00</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Perawatan Lapangan : Rp 2.600.000,00</td>
                                    </tr>
                                </table>
                                <br>
                            </div>

                            <div class="non-rutin">
                                <p style="text-align: left; font-weight: bold;">KM Cup</p>
                                <table style="text-align: left">
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>KM Cup merupakan salah satu program non rutin yang diselenggarakan oleh</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>departemen olahraga yang berupa turnamen di lingkungan civitas Del yang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>diikuti oleh seluruh Civitas IT Del (mahasiswa, staff / dosen, cleaning service,</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>gardener, petugas kantin, maintanance, satpam). Adapun jenis-jenis pertandingan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>yang dipertandingkan antara lain badminton, futsal, basket, voli, tenis meja,</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>dan catur.</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Pelaksanaan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>01 Februari 2020 - 14 Maret 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Lapangan Olahraga Institut Teknologi Del, Auditorium</td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Tujuan acara ini adalah untuk mengembangkan minat dan bakat mahasiswa /</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>mahasiswi di bidang olahraga serta menjalin rasa kekeluargaan antar civitas</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>IT Del.</td>
                                    </tr>
                                    <tr>
                                        <td>Indikator</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Program ini dinyatakan berhasil apabila seluruh Civitas IT Del ikut mendukung</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>dan berpastisipasi dalam keberlangsungan program ini.</td>
                                    </tr>
                                    <tr>
                                        <td>Strength</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Menumbuhkan jiwa kompetisi yang sehat dan sportif di antara Civitas IT Del,</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Mempererat hubungan kekeluargaan antar Civitas IT Del.</td>
                                    </tr>
                                    <tr>
                                        <td>Weakness</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Waktu antar civitas terkadang tidak sesuai dengan jadwal yang diberikan oleh</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>panitia yang menyebabkan pertandingan harus diundur sehingga aktivitas</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>selanjutnya akan terganggu (Makan malam).</td>
                                    </tr>
                                    <tr>
                                        <td>Opportunity</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Dengan adanya kegiatan KM Cup setiap Civitas Del memiliki kesempatan untuk</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>menyalurkan minat dan bakat dibidang olahraga.</td>
                                    </tr>
                                    <tr>
                                        <td>Threat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Ketika cuaca tidak mendukung menyebabkan pertandingan akan diundur sehingga</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>target waktu pelaksanaan program KM Cup  tidak sesuai dengan perencanaan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>yang telah disusun.</td>
                                    </tr>
                                    <tr>
                                        <td>Perkiraan Biaya</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Rp 6.800.000,00</td>
                                    </tr>
                                </table>
                                <br>

                                <p style="text-align: left; font-weight: bold;">Del Futsal Competition</p>
                                <table style="text-align: left">
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Del Futsal Competition merupakan salah satu program non rutin yang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>diselenggarakan oleh departemen olahraga yang berupa turnamen futsal antar</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>SMA/SMK Sederajat di sekitaran Tobasa. Dari beberapa sekolah yang berada di</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Tobasa hanya 12-16 tim yang akan mengikuti kompetisi.</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Pelaksanaan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>05 Oktober 2019 - 19 Oktober 2019 (setiap hari sabtu)</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>13.00 WIB – 17.00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Lapangan Futsal IT Del</td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Tujuan dari program ini adalah untuk memperkenalkan Institut Teknologi Del</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>kepada Siswa SMA/SMK Sederajat yang ada di Tobasa melalui kompetisi futsal</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>yang diselenggarakan oleh Departemen Olahraga.</td>
                                    </tr>
                                    <tr>
                                        <td>Indikator</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Program ini dinyatakan berhasil apabila pihak sekolah dan siswa mendukung dan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>ikut serta berpartisipasi dalam kompetisi yang diselenggarakan.</td>
                                    </tr>
                                    <tr>
                                        <td>Strength</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Memeperarat hubungan antara IT Del dengan SMA/SMK yang brada disekitaran Tobasa,</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>dan setiap siswa yang mengikuti kompetisi secara tidak langsung akan mengenal</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>kehidupan kampus IT Del.</td>
                                    </tr>
                                    <tr>
                                        <td>Weakness</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Kurangnya informasi yang didapat oleh SMA/SMK yang ingin mengikuti kompetisi</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>karena kegiatan ini baru pertama kali diselenggarakan.</td>
                                    </tr>
                                    <tr>
                                        <td>Opportunity</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Setiap siswa yang memiliki bakat di bidang futsal dapat mengukur kemampuan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>yang dimiliki oleh tim mereka, dan setiap tim memiliki kesempatan untuk</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>menambah pengalaman dan pengetahuan di bidang futsal.</td>
                                    </tr>
                                    <tr>
                                        <td>Threat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Ketika cuaca tidak mendukung menyebabkan pertandingan akan diundur sehingga</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>target waktu pelaksanaan program Del Futsal Competition tidak sesuai dengan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>perencanaan yang telah disusun.</td>
                                    </tr>
                                    <tr>
                                        <td>Perkiraan Biaya</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Rp 3.420.000,00</td>
                                    </tr>
                                </table>
                                <br>

                                <p style="text-align: left; font-weight: bold;">Pekan Olahraga IT Del + Kopi Sore</p>
                                <table style="text-align: left">
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Pekan Olahraga IT Del merupakan salah satu program non rutin yang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>diselenggarakan untuk mengisi acara kopi sore (Depsenbud). Didalam pekan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>olahraga ini akan dilaksanakan pertandingan olahraga ringan seperti lari goni,</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>terompah, tarik tambang, lari guli.</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Pelaksanaan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Menyesuaikan dengan kopi sore (Depsenbud).</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Menyesuaikan dengan kopi sore (Depsenbud).</td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Tujuan program ini adalah untuk mempererat hubungan kekeluargaan antar</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>mahasiswa/mahasiswi IT Del</td>
                                    </tr>
                                    <tr>
                                        <td>Indikator</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Program ini dinyatakan berhasil apabila departemen seni budaya dan departemen</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>olahraga dapat bekerjasama dalam menyukseskan program ini,dan mahasiswa/</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>mahasiswi ikut berkontribusi.</td>
                                    </tr>
                                    <tr>
                                        <td>Strength</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Dengan diadakannya pekan olahraga IT Del yang akan mengisi program dari</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Depsenbud ini diharapkan mahasiswa akan lebih tertarik untuk menghadiri</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>acara tersebut.</td>
                                    </tr>
                                    <tr>
                                        <td>Weakness</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Kurangnya minat dari mahasiswa untuk mendaftar diri dalam mengikuti perlombaan.</td>
                                    </tr>
                                    <tr>
                                        <td>Opportunity</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Dengan diadakannya kegiatan ini setiap mahasiswa yang menghadiri kegiatan</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>kopi sore (depsendbud) dapat mencoba perlombaan yang diselenggarakan untuk</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>memeriahkan acara kopi sore.</td>
                                    </tr>
                                    <tr>
                                        <td>Threat</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Ketika cuaca tidak mendukung menyebabkan pertandingan akan diundur sehingga</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>target waktu pelaksanaan program tidak sesuai dengan perencanaan yang telah</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>disusun.</td>
                                    </tr>
                                    <tr>
                                        <td>Perkiraan Biaya</td>
                                        <td>&nbsp : &nbsp</td>
                                        <td>Rp 1.110.000,00</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
            </div>
        </div>
    </section>
@endsection
