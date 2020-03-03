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
                    <br>

                    <div class="program-kerja">
                        <div class="rutin">
                            <p style="text-align: justify; font-weight: bold;">Program Kerja Rutin</p>
                            <p style="text-align: left; font-weight: bold;">Kurvey Massal</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Membersihkan lingkungan kampus IT Del (ruang kelas, kantin, pekarangan, OT, EH,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>plaza, dll) yang bertujuan untuk menjaga dan meningkatkan kebersihan lingkungan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kampus serta dapat menciptakan suasana belajar yang nyaman. Kurvey Massal</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dilakukan oleh seluruh Mahasiswa/i Institut Teknologi Del dan diawasi oleh</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>anggota Departemen Ketertiban dan Kedisiplinan Kampus serta Bapak/Ibu asrama.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Sebelum Libur Semester, Libur Paskah, dan Libur Natal dan Tahun Baru</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Lingkungan Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Lingkungan kampus Institut Teknologi Del ditinggal berlibur dalam keadaan baik</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dan bersih</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dinyatakan berhasil apabila seluruh Mahasiswa/i ikut serta dalam</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>pelaksanaan Kurvey Massal dan melaksanakannya dengan sungguh-sungguh</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan Kurvey Massal dapat menciptakan kebiasaan baru yaitu sadar akan kebersihan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>lingkungan kampus.</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mahasiswa/i tidak melaksanakan Kurvey Massal dengan sungguh-sungguh, peralatan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kurvey yang tidak mencukupi dan sebagian sudah tidak layak pakai, serta kurangnya</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>pengawasan dari pihak lain selain anggota Departemen Ketertiban dan Kedisiplinan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Kampus.</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dilaksanakan beberapa hari sebelum libur sehingga seluruh Mahasiswa/i</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>seharusnya memiliki waktu luang untuk mengikutinya.</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Beberapa Mahasiswa/i anggap remeh terhadap pengadaan Kurvey Massal dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>ketidaktersediaan alat kurvey yang menyebabkan kurvey dilakukan dengan tidak maksimal.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Membuat Denah makan (di kantin) Mahasiswa/i</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Departemen Ketertiban dan Kedisiplinan Kampus membuat denah makan untuk</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mengalokasikan tempat Mahasiswa/i dan akan dilakukan penomoran pada setiap meja</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>di kantin sehingga tidak ada yang boleh memindahkan meja serta pindah tempat duduk.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Hal ini juga dilakukan untuk memudahkan anggota Departemen Ketertiban dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Kedisiplinan Kantin dan pihak keasramaan ketika melakukan pendataan Mahasiswa/i</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang mungkin tidak makan ke kantin untuk selanjutnya ditindaklanjuti.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Agar tercipta suasana makan di kantin yang tertib dan teratur.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dinyatakan berhasil apabila anggota Departemen Ketertiban dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Kedisiplinan Kampus mendapatkan daftar Mahasiswa/i aktif.</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dapat mengurangi keributan ketika waktu makan sedang berlangsung di</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kantin.</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Beberapa diantara Mahasiswa/i pindah tempat duduk, dalam artian lain duduk tidak</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sesuai dengan denah yang sudah dibuat oleh anggota Departemen Ketertiban.</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dilakukan oleh anggota Departemen Ketertiban dan Kedisiplinan Kampus</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sehingga tidak ada Mahasiswa/i yang meminta satu meja makan dengan teman akrabnya.</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya Mahasiswa/i yang sudah resign dan data belum diperbaharui sehingga ada</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>meja makan yang tidak diisi penuh.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Pengawasan pelaksanaan piket makan</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Departemen Ketertiban dan Kedisiplinan  Kampus mengatur penjadwalan piket makan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dan mengawasi pelaksanaan piket makan yang dilakukan oleh seluruh Mahasiswa/i</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Institut Teknologi Del. Jika ada Mahasiswa/i yang terlambat melakukan tugas piket</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>atau tidak melaksanakannya maka Departemen Ketertiban dan Kedisiplinan Kampus</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>akan melaporkan nama-nama tersebut kepada pihak Keasramaan untuk nantinya</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>ditindaklanjuti sesuai dengan peraturan yang berlaku di lingkungan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Institut Teknologi Del.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Selama jam kolaboratif dan Mahasiswa/i makan dikantin (kecuali pada saat semester</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>pendek).</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kantin Tabgha dan Kantin Bethesda</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Mahasiswa/i melaksanakan tugas piketnya dengan baik dan tepat waktu sehingga</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>waktu makan tidak terlambat dan jam akademik tidak terganggu.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dinyatakan berhasil jika Mahasiswa/i melaksanakan tugas piketnya</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dengan penuh tanggung jawab dan ikhlas.</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan ini dapat meningkatkan kesadaran Mahasiswa/i terkait melayani dan dilayani.</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Beberapa Mahasiswa/i tidak datang tepat waktu untuk melaksanakan tugas piket dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>melaksanakan tugas piket secara tidak efektif sehingga waktu makan sering terlambat.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Serta ada Mahasiswa/i yang tidak datang piket dan kekurangan anggota untuk</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>melaksanakan tugas piket.</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini melibatkan pihak Keasramaan sehingga segala bentuk pelanggaran yang</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dilakukan oleh Mahasiswa/i dapat ditindaklanjuti secara tegas dan sesuai dengan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>peraturan yang berlaku serta tertulis di SOP.</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Beberapa Mahasiswa/i melaksanakan tugas piket secara ogah-ogahan dan terkadang</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>lupa dengan jadwal piketnya sehingga piket terlaksana dengan tidak efektif.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Pemeriksaan perlengkapan makan Mahasiswa/i.</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Departemen Ketertiban dan Kedisiplinan Kampus membariskan Mahasiswa/i sebelum</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>makan dan melakukan pemeriksaan perlengkapan makan dari setiap Mahasiswa/i (pin,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Tupperware, payumg dan sendok). Jika ada Mahasiswa/i yang tidak membawa salah satu</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>perlengkapan makan maka akan dikenakan sanksi sesuai dengan peraturan yang berlaku.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Jam akademik</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kantin Tabgha dan Kantin Bethesda</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Agar Mahasiswa/i memiliki rasa tanggung jawab pada dirinya sendiri dan tidak</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kesusahan ketika salah satu dari perlengkapan makan tidak dibawa (missal, tidak</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>membawa payung sehingga ketika hujan datang tidak memiliki payung dan kehujanan).</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dinyatakan berhasil jika Mahasiswa/i tertib dalam membawa perlengkapan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>makan dan keinginan tersebut berasal dari dirinya sendiri.</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya koordinasi dengan bagian kemahasiswaan dan keasramaan sehingga setiap</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>pelanggaran dapat ditindak sesuai dengan peraturan yang berlaku.</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Hukuman yang diberikan jika tidak membawa perlengkapan sepertinya kurang memberi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>efek jera.</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dapat mengurangi adanya Mahasiswa/i yang tidak membawa seluruh</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>perlengkapan makan yang ditentukan.</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Beberapa Mahasiswa/i menganggap remeh terhadap perlengkapan makan sehingga ada</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>perlengkapan tertentu yang tidak dibawa karna dianggap tidak terlalu penting yaitu</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>payung.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Mengarahkan Mahasiswa/i untuk mengikuti ibadah jumat</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Departemen Ketertiban dan Kedisiplinan Kampus akan membantu Departemen Agama dan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Sosial dalam mengarahkan Mahasiswa/i Institut Teknologi Del untuk mengikuti ibadah</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>yang diselengarakan setiap hari jumat.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Setiap hari jumat</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kampus Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Agar seluruh Mahasiswa/i mengikuti ibadah jumat dan tidak ada yang bersembunyi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>di ruang kelas dan di tempat-tempat lainnya.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dinyatakan berhasil apabila setiap ibadah jumat berlangsung seluruh</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Mahasiswa/i mengikutinya.</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya kerjasama dengan Departemen Agama dan Sosial serta pihak keasramaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sehingga tidak terlalu luas jangkauan yang akan diawasi.</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya sikap acuh tak acuh dari Mahasiswa/i sehingga berusaha untuk mencari</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>tempat persembunyian agar tidak mengikuti ibadah.</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Pihak Keasramaan akan memberikan sanksi terhadap Mahasiswa/i yang tidak mengikuti</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>ibadah yang diharapkan dapat memberi efek jera.</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya kesadaran dari dalam diri Mahasiswa/i untuk mengikuti ibadah.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Mengalokasikan tempat kegiatan jam kolaboratif mahasiswa.</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Departemen Ketertiban dan Kedisiplinan Kampus akan mengalokasikan tempat kegiatan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>jam kolaboratif mahasiswa sehingga mahasiswa nyaman dan konsentrasi untuk belajar.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Pembagian ruangan ini berdasarkan kelas.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menyesuaikan</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kampus Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Menciptakan suasana jam kolaboratif yang nyaman dan tertib sehingga tidak</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>mengganggu waktu belajar Mahasiswa/i.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dinyatakan berhasil apabila seluruh Mahasiswa/i melaksanakan jam</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kolaboratif di ruangan yang sudah ditentukan serta menjaga ketenangannya.</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dalam pembagian ruang kelas berdasarkan kelas maka akan memudahkan Mahasiswa/i</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>untuk belajar bersama teman sekelas ataupun berdiskusi mengenai tugas.</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kurangnya kelas untuk tempat mandiri malam yang dapat digunakan untuk belajar</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>bersama atau mengadakan tutorial.</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Adanya koordinasi bersama pihak kemahasiswaan dan keasramaan dalam pengalokasian</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>ruang jam mandiri malam sehingga tidak ada yang menolak untuk ditempatkan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dimana pun.</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Beberapa Mahasiswa/i tidak berada diruang kolaboratifnya sehingga menimbulkan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>keributan disekitarnya yang mengganggu orang lain.</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Biaya</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>-</td>
                                </tr>
                            </table>
                            <br>

                            <p style="text-align: left; font-weight: bold;">Menjaga ketertiban selama ada kegiatan yang diselenggarakan BEM Institut Teknologi Del</p>
                            <table style="text-align: left">
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan BEM IT Del merupakan kegiatan seluruh mahasiswa Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sehingga Departemen Ketertiban dan Kedisiplinan Kampus juga akan berpartisipasi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>dalam mengamankan dan mengawasi ketertiban selama kegiatan itu berlangsung.</td>
                                </tr>
                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Setiap acara kegiatan BEM IT Del diselenggarakan.</td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kampus Institut Teknologi Del</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Untuk menjaga ketertiban selama kegiatan tersebut berlangsung.</td>
                                </tr>
                                <tr>
                                    <td>Indikator</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Program ini dinyatakan berhasil apabila selama kegiatan berlangsung tidak ada</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>kericuhan yang terjadi.</td>
                                </tr>
                                <tr>
                                    <td>Strength</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Kegiatan BEM IT Del tentu saja melibatkan departemen lain dalam penyelenggaraannya</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>sehingga dapat bekerjasama dengan panitia.</td>
                                </tr>
                                <tr>
                                    <td>Weakness</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Beberapa Mahasiswa/i tidak peduli dan tidak antusias dalam menghadiri acara</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>BEM IT Del sehingga sulit diarahkan.</td>
                                </tr>
                                <tr>
                                    <td>Opportunity</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Dalam pengamanan ini bagian security juga ikut andil sehingga memperkecil area</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>jangkauan yang harus ditangani Departemen Ketertiban dan Kedisiplinan Kampus.</td>
                                </tr>
                                <tr>
                                    <td>Threat</td>
                                    <td>&nbsp : &nbsp</td>
                                    <td>Beberapa Mahasiswa/i tidak hadir dan melarikan diri keluar kampus.</td>
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
