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

<!-- Departemen Seni dan Budaya -->
<section id="depsenbud" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading">
                        <h2>Departemen Seni dan Budaya</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-2"></div>
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-8">
                    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                        <img src="{{ asset('img/januar.jpg') }}" alt="" class="img-responsive" />

                    </div>
                    <p style="text-align: justify">Departemen Seni dan Budaya adalah salah
                    satu departemen yang bertugas untuk mengadakan event-event sebagai hiburan
                    dan refreshinguntuk mahasiswa.</p>
                    <p style="text-align: justify">Daftar pengurus Departemen Seni dan Budaya
                    adalah sebagai berikut :</p>
                    <div>
                        <table style="text-align: left">
                            <tr>
                                <td>Kepala Departemen</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Januard Lumbangaol (11S17064) </td>
                            </tr>
                            <tr>
                                <td>Sektretaris</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Sepriana Carolina Panggabean (11S17058)</td>
                            </tr>
                            <tr>
                                <td>Bendahara</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Suci Triana Silitonga (21S17057)</td>
                            </tr>
                        </table>
                    </div>
                    <br>

                    <div class="rutin">
                        <p style="text-align: justify; font-weight: bold;">Program Kerja Rutin</p>
                        <p style="text-align: left; font-weight: bold;">Music Corner</p>
                        <table style="text-align: left;">
                            <tr>
                                <td>Deskripsi</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Music Corner adalah acara/program kerja non-rutin dari Departemen Seni dan Budaya.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Acara ini akan diadakan 1 kali setiap semester, yakni pada hari sabtu setelah pelaksanaan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>UTS/ UAS Selesai, bertempat di EH pada pukul 18:00 s/d 22:00 WIB dan tanggalnya akan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>disesuaikan dengan kegiatan di kampus ITDel karena bersifat tidak tetap tanggalnya dan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>mengisi kegiatan yang kosong. Acara ini memiliki ketentuan yaitu sebagai berikut,</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>penampilan band perwakilan kelas, maksimal 10 band, dengan masing-masing 1 lagu, dan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>juga peserta yang ingin menampilkan secara sukarela. Pada acara ini, akan menggunakan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>semua alat music yang ada, yang dipimpin oleh MC dari anggota Departemen Seni dan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Budaya.</td>
                            </tr>
                            <tr>
                                <td>Waktu Pelaksanaan</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Week 5</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>28 September 2019</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>12 Oktober 2019</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>15 Februari 2020</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>14 Maret 2020</td>
                            </tr>
                            <tr>
                                <td>Tempat</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Menyesuaikan</td>
                            </tr>
                            <tr>
                                <td>Tujuan</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Tujuan acara ini adalah sebagai wadah untuk mahasiswa mengembangkan bakat di bidang</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>seni dan budaya, dan meningkatkan kepedulian akan setiap pelaksanaan acara di kampus</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>ITDel. Serta mengembangkan wawasan mahasiswa Del di bidang musik dan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>mengembangkan sikap berkolaborasi dengan baik.</td>
                            </tr>
                            <tr>
                                <td>Indikator</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Indikator berdasarkan kepuasan peserta yang hadir dalam Music Corner, kesesuaian konsep</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>acara dan pelaksanaan acara, wadah bagi mahasiswa untuk menyalurkan bakat bermusik</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>serta menumbuhkan minat mahasiswa kepada seni dan budaya sekitar Indonesia, dan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>keuntungan diadakan pada  acara ini dengan tercapainya tujuan diadakan kegiatan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Music Corner.</td>
                            </tr>
                            <tr>
                                <td>Perkiraan Biaya</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Rp 1.500.000,00 (BEM)</td>
                            </tr>
                        </table>
                        <br>

                        <p style="text-align: left; font-weight: bold;">Upload video penampilan mahasiswa ke Channel Youtube dan serba-serbi budaya</p>
                        <table style="text-align: left;">
                            <tr>
                                <td>Deskripsi</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Setiap penampilan mahasiswa terbaik pada setiap edisi kopi sore akan direkam dan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>diupload ke youtube agar mahasiswa yang lain termotivasi menampilkan yang terbaik serta</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>mencari dan menawarkan setiap grup atau penampilan dari beberapa individu agar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>menyalurkan bakat mereka. Selain itu akan dibuat video documenter serba-serbi</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>keberagaman budaya yang terdapat di IT Del salah satunya melalui edukasi mengenai</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>kumpulan-kumpulan marga dan suku mahasiswa IT Del.</td>
                            </tr>
                            <tr>
                                <td>Waktu Pelaksanaan</td>
                                <td>&nbsp : &nbsp</td>
                                <td>5 Oktober 2019</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>19 Oktober 2019</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>22 Februari 2020</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>21 Maret 2020</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>14 Maret 2020 (Serba-serbi Suku mahasiswa IT Del)</td>
                            </tr>
                            <tr>
                                <td>Tempat</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Menyesuaikan</td>
                            </tr>
                            <tr>
                                <td>Tujuan</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Menjadi wadah mahasiswa untuk menunjukkan dan mengabadikan penampilan mereka</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>agar mahasiswa termotivasi tmenampilkan dan membuat penampilan yang terbaik. Melalui</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>video edukasi tersebut paling tidak mahasiswa mengetahui sedikit mengenai suku-suku dan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>serba-serbinya yang ada pada mahasiswa IT Del.</td>
                            </tr>
                            <tr>
                                <td>Indikator</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Indikator berdasarkan ketertarikan mahasiswa dan apresiasi terhadap hasil karya seni</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>yang dihasilkan oleh mahasiswa, nilai tambah bagi institusi yaitu mempromosikan kegiatan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>kampus IT DEL bagi masyarakat luas dengan mengajak siswa SMA sekitar TOBASA mengikuti</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>kegiatan ini dan mempromosikan nya lewat social media dan youtube.</td>
                            </tr>
                            <tr>
                                <td>Perkiraan Biaya</td>
                                <td>&nbsp : &nbsp</td>
                                <td>-</td>
                            </tr>
                        </table>
                        <br>

                        <p style="text-align: left; font-weight: bold;">Latihan Koordinasi dengan UKM</p>
                        <table style="text-align: left;">
                            <tr>
                                <td>Deskripsi</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Mahasiswa yang terlibat melakukan latihan rutin untuk pemantapan penampilan pada</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>FESBUD IT Del. Pada kesempatan ini juga akan dilakukan video promosi untuk acara FESBUD</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>yang akan dilaksanakan, agar mengajak mahasiswa untuk dapat menikmati acara yang akan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>disiapkan.</td>
                            </tr>
                            <tr>
                                <td>Waktu Pelaksanaan</td>
                                <td>&nbsp : &nbsp</td>
                                <td>14, 21 September</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>5, 19 Oktober</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Latihan Koorndinasi untuk FESBUD</td>
                            </tr>
                            <tr>
                                <td>Tempat</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Menyesuaikan</td>
                            </tr>
                            <tr>
                                <td>Tujuan</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Mahasiswa akan semakin terlatih dalam memegang bidang masing-masing dan saling</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>mendukung untuk mengetahui bidang lain agar semakin meningkatkan kerja sama dan ide</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>kreatif dari masing-masing mahasiswa. Hal ini berguna untuk melatih softskill dan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>menambah wawasan mahasiswa yang terkait.</td>
                            </tr>
                            <tr>
                                <td>Indikator</td>
                                <td>&nbsp : &nbsp</td>
                                <td>Indikator berdasarkan penampilan dari masing-masing peserta FESBUD DEL, kesesuaian</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>konsep acara dan latihan FESBUD DEL, nilai tambah bagi institusi yaitu mempromosikan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>kegiatan kampus IT DEL bagi masyarakat luas dengan menunjukkan kegiatan-kegiatan yang</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>berlangsung terutama dalam bidang  seni untuk menunjukkan  penampilan kolaborasi agar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>menarik minat mahasiswa berorganisasi dan masyarakat luar mengenai kegiatan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>mahasiswa IT Del.</td>
                            </tr>
                            <tr>
                                <td>Perkiraan Biaya</td>
                                <td>&nbsp : &nbsp</td>
                                <td>-</td>
                            </tr>
                        </table>
                    </div>
                    <br>

                    <div class="program-kerja">
                        <div class="non-rutin">
                            <p style="text-align: justify; font-weight: bold;">Program Kerja Non-Rutin</p>
                            <p style="text-align: left; font-weight: bold;">FESBUD DEL</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mahasiswa diberikan wadah untuk menanamkan atau mengingatkan kembali mengenai</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>keberagaman budaya Indonesia terkhusus 8 etnik budaya yang ada pada Sumut dan juga</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>menamkan kembali jiwa nasionalisme. Dilaksanakan pada GSG dan dimulai dari pukul</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>13.00 s/d 18.00(selesai). Dengan kegiatan :</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Musikalisasi puisi+psm+pgm+3dc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Lomba gambar : Depsendud meyediakan bahan cat dan kertas dan dikerjakan ketika</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;acara berlangsung selama waktu 4 jam dan hasilnya ditampilkan dan dijelaskan.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penilaiannya dilakukan oleh penonton dengan voting.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Musikalisasi puisi+psm+pgm+3dc</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Lomba gambar : Depsendud meyediakan bahan cat dan kertas dan dikerjakan ketika</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;acara berlangsung selama waktu 4 jam dan hasilnya ditampilkan dan dijelaskan.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penilaiannya dilakukan oleh penonton dengan voting.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Miniatur adat :  Perserta menyediakan bahan sendiri, depsendud meyediakan peralatan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan dikerjakan ketika acara berlangsung selama waktu 4 jam dan hasilnya ditampilkan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan dijelaskan. Penilaiannya dilakukan oleh penonton dengan voting.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Drama musikalisasi UKM +psm+pgm+3dc dengan tema :  Keragaman dalam Kesatuan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Live Dendang 8 etnik Sumut</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Penampilan band mahasiswa yang bertema Nusantara atau Budaya waktu maksimal</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 menit.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Penampilan masing-masing UKM</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;BTA</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Week 9 (1 minggu setelah UTS) (2 November 2019)
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>1.&nbsp;&nbsp;Meningkatkan Apresiasi mahasiswa terhadap hasil karya seni dan budaya daerah.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>2.&nbsp;&nbsp;Acara ini bertujuan untuk menanamkan atau mengingatkan kembali mahasiswa</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mengenai keberagaman budaya Indonesia dan juga menamkan kembali jiwa</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nasionalisme.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>3.&nbsp;&nbsp;Melalui perlombaan yang disediakan mahasiswa diharapkan mampu mengasah</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kreativitas dan jiwa kompetisi.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>4.&nbsp;&nbsp;Salah satu wadah untuk menampilkan UKM yang ada agar menumbuhkan minat</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mahasiswa untuk berorganisasi salah satunya dengan mengikuti UKM.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Indikator berdasarkan kepuasan peserta yang hadir dalam FESBUD DEL, kesesuaian</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>konsep acara dan pelaksanaan acara FESBUD DEL, nilai tambah bagi institusi yaitu</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mempromosikan kegiatan kampus IT DEL bagi masyarakat luas dengan mengundang</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>masyarakat serta siswa SMA dalam kegiatan, serta wadah bagi UKM yang bergerak dibidang</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>seni untuk menunjukkan penampilan kolaborasi agar menarik minat mahasiswa</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>berorganisasi dan keuntungan diadakan pada  acara FESBUD DEL dengan tercapainya</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>tujuan diadakan kegiatan FESBUD DEL.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 11.000.000,00</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Full Day Toba</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan ini melibatkan perkumpulan keluarga marga-marga yang ada di IT Del, dimana</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>perwakilan setiap  kumpulan keluarga akan memperkenalkan tutur dan tarombo agar setiap</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Mahasiswa dapat mengenal keluarga-keluarga yang ada di IT Del. Dan DEPSENBUD juga</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>akan menyediakan:</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Music</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Pakaian</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Makanan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Umpasa dan umpama</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Permainan, dll</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Kepala keluarga menjelaskan keluarganya</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Week 14 Semester II</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Tujuan acara ini adalah untuk memperkenalkan budaya Indonesia terkhusus budaya tempat</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>IT Del berdiri, agar mahasiswa semakin mengenal budaya tempat IT Del berdiri terutama</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>bagi mahasiswa yang belum mengenal budaya batak toba terutama bagi mahasiswa yang</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>berasal dari luar SUMUT, agar dapat saling belajar mengenai budaya ini.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Indikator berdasarkan kepuasan peserta yang hadir dalam Full Day Toba, kesesuaian</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>konsep acara dan pelaksanaan acara Full Day Toba, nilai tambah bagi institusi yaitu</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mempromosikan kegiatan kampus IT DEL bagi masyarakat luas (menghasilkan short video</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>hasil pelaksanaan kegiatan ini dan di sebar luaskan melalui sosmed upaya menjadi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>promosi mengenai kegiatan mahasiswa), dan keuntungan diadakan pada  acara Full Day</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Toba dengan tercapainya tujuan diadakan kegiatan Full Day Toba.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 10.000.000,00</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Pengumpulan serta  Upload karya dari Art Competition</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mahasiswa diberi wadah untuk menyalurkan bakat dan menumbuhkan jiwa kompetisi serta</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>meningkatkan kreativitas dan inovasi dari Mahasiswa dan merupakan salah satu acara</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>untuk menambahkan softskill Mahasiswa yang berguna untuk menghadapi Industri 4.0,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dengan mengangkat tema : Corak Nusantara. Dengan hasil karya akan dikirim oleh peserta</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kepada panitia dan akan di upload melalui akun Youtube dan Instagram DEPSENBUD.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>7 Maret 2020 Pengumuman pemenang pada week 9 tepat pada pelaksanaan acara Kopi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Sore.</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Tujuan acara ini adalah sebagai wadah mendekatkan diri dan menjalin rasa hormat</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>antar mahasiswa/I IT Del serta untuk mengingat corak-corak Nusantara dengan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mendukung pembentukan karakter bangsa Indonesia sesuai dengan norma yang ada pada</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Pancasila sebagai falsafah hidup Bangsa,pembentukan karakter Del, budaya</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>TBC (Tertib, berbudaya, ceria), menumbuhkan solidaritas antar mahasiswa, dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mengajak mahasiswa dapat berkolaborasi dengan baik serta meningkatkan kreativitas</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dan inovasi dari Mahasiswa juga merupakan salah satu acara untuk menambahkan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>softskill Mahasiswa yang berguna untuk menghadapi Industri 4.0.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Indikator berdasarkan ketertarikan mahasiswa dan apresiasi terhadap hasil karya seni</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang dihasilkan oleh mahasiswa dan siswa SMA yang ikut, nilai tambah bagi institusi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yaitu mempromosikan kegiatan kampus IT DEL bagi masyarakat luas dengan mengajak</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>siswa SMA sekitar TOBASA mengikuti kegiatan ini dan mempromosikan nya lewat social</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>media dan youtube.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Art Competition</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mahasiswa diberi wadah untuk menyalurkan bakat dan menumbuhkan jiwa kompetisi serta</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>meningkatkan kreativitas dan inovasi dari Mahasiswa dan merupakan salah satu acara</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>untuk menambahkan softskill Mahasiswa yang berguna untuk menghadapi Industri 4.0,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dengan mengangkat tema : Corak Nusantara. Dengan hasil karya akan dikirim oleh</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>peserta kepada panitia dan akan di upload melalui akun Youtube dan Instagram</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>DEPSENBUD.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Dengan rincian Kegiatan:</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Music cover</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Lomba Gambar</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Dance bebas baik modern, tradisional maupun kontemporer</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Waktu deadline submit, 2 minggu sebelum Kopi sore</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Dibuka juga untuk SMA sekitaran TOBASA</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Tema : Corak Nusantara</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Pemberitahuan deadline dan penyebaran udangan sebulan sebelum deadline</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Hasilnya diumumkan pada saat Kopi Sore, jika ada pemenang peserta SMA akan diundang.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>15 Februari 2020</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Tujuan acara ini adalah sebagai wadah mendekatkan diri dan menjalin rasa hormat</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>antar mahasiswa/I IT Del serta untuk mengingat corak-corak Nusantara dengan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mendukung pembentukan karakter bangsa Indonesia sesuai dengan norma yang ada pada</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Pancasila sebagai falsafah hidup Bangsa,pembentukan karakter Del, budaya</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>TBC (Tertib, berbudaya, ceria), menumbuhkan solidaritas antar mahasiswa, dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mengajak mahasiswa dapat berkolaborasi dengan baik serta meningkatkan kreativitas</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dan inovasi dari Mahasiswa juga merupakan salah satu acara untuk menambahkan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>softskill Mahasiswa yang berguna untuk menghadapi Industri 4.0.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Indikator berdasarkan ketertarikan mahasiswa dan apresiasi terhadap hasil karya seni</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang dihasilkan oleh mahasiswa dan siswa SMA yang ikut, nilai tambah bagi institusi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yaitu mempromosikan kegiatan kampus IT DEL bagi masyarakat luas dengan mengajak</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>siswa SMA sekitar TOBASA mengikuti kegiatan ini dan mempromosikan nya lewat social</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>media dan youtube.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Biaya Hadiah Rp 1.900.000,00</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Kopi Sore</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mahasiswa diberi wadah refreshing dengan “ngopi bareng” dan mendekatkan diri satu</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sama lain sambil bercengkarama disenja sore hari melalui acara ini. Acara akan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dilaksanakan di Lapangan Napitupulu (Container) IT Del. Dan berkolaborasi dengan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Departemen Olahraga dengan kegiatan olahraga ringan (terompa,tarik tambang,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kelereng,dll). Pada kegiatan ini,akan menampilkan Band yang ingin tampil, dan juga</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>akan diumumkan pemenang dari Art Competition dan hasil karya pemenang akan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>ditampilkan.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Waktu pelaksanaan kegiatan pada pukul 14:00 s/d 18:00 WIB.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Week 9 Semester 2</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Tujuan acara ini adalah sebagai wadah mendekatkan diri dan menjalin rasa hormat</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>antar mahasiswa/I IT Del serta untuk mengingat corak-corak Nusantara dengan mendukung</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>pembentukan karakter bangsa Indonesia sesuai dengan norma yang ada pada Pancasila</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sebagai falsafah hidup Bangsa,pembentukan karakter Del, budaya TBC(Tertib, berbudaya,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>ceria), menumbuhkan solidaritas antar mahasiswa, dan mengajak mahasiswa dapat</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>berkolaborasi dengan baik.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Mengingatkan kembali kepada mahasiswa akan makna dari persaudaraan dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kekeluargaan dengan mahasiswa lainnya, seta meningkatkan kerja sama antar mahasiswa.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Indikator berdasarkan kepuasan peserta yang hadir dalam Kopi Sore, kesesuaian konsep</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>acara dan pelaksanaan acara Kopi Sore, nilai tambah bagi institusi yaitu mempromosikan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kegiatan kampus IT DEL bagi masyarakat luas (menghasilkan short video hasil pelaksanaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kegiatan ini dan di sebar luaskan melalui sosmed upaya menjadi promosi mengenai</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kegiatan mahasiswa), dan keuntungan diadakan pada  acara Kopi Sore dengan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>tercapainya tujuan diadakan kegiatan Kopi Sore.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 6.000.000,00</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Full Day Toba</p>
                            <table style="text-align: left;">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan ini melibatkan perkumpulan keluarga marga-marga yang ada di IT Del,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dimana perwakilan setiap  kumpulan keluarga akan memperkenalkan tutur dan tarombo</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>agar setiap Mahasiswa dapat mengenal keluarga-keluarga yang ada di IT Del.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Dan DEPSENBUD juga akan menyediakan :</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Music</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Pakaian</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Makanan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Umpasa dan Umpama</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Permainan, dll</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;Kepala keluarga menjelaskan keluarganya</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Week 14 Semester II</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Tujuan acara ini adalah untuk memperkenalkan budaya Indonesia terkhusus budaya tempat</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>IT Del berdiri, agar mahasiswa semakin mengenal budaya tempat IT Del berdiri terutama</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>bagi mahasiswa yang belum mengenal budaya batak toba terutama bagi mahasiswa yang</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>berasal dari luar SUMUT, agar dapat saling belajar mengenai budaya ini.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Indikator berdasarkan kepuasan peserta yang hadir dalam Full Day Toba, kesesuaian</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>konsep acara dan pelaksanaan acara Full Day Toba, nilai tambah bagi institusi yaitu</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mempromosikan kegiatan kampus IT DEL bagi masyarakat luas (menghasilkan short video</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>hasil pelaksanaan kegiatan ini dan di sebar luaskan melalui sosmed upaya menjadi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>promosi mengenai kegiatan mahasiswa), dan keuntungan diadakan pada  acara Full Day</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Toba dengan tercapainya tujuan diadakan kegiatan Full Day Toba.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Rp 10.000.000,00</td>
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
