@extends('layouts.main')

@section('content')
    <div class="container-fluid p-0 pb-3">
        @include('partials.banner')

        <div class="container-fluid pt-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-12 col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://www.kopertis3.or.id/v6/wp-content/uploads/2019/05/PP-Nomor-30-Tahun-2019.pd">Peraturan
                                    Pemerintah Republik Indonesia Nomor 30 Tahun 2019 tentang Penilaian Kinerja Pegawai
                                    Negeri Sipil</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v2/wp-content/uploads/Peraturan-Pemerintah-No-11-Tahun-2017.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 11 Tahun 2017 tentang Manajemen Pegawai Negeri
                                    Sipil</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/PP-No-13-Tahun-2015.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 13 Tahun 2015 tentang Perubahan Kedua Atas Peraturan
                                    Pemerintah Nomor 19 Tahun 2005 Tentang Standar Nasional Pendidikan</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/PP-21-Thn-2014.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 21 Tahun 2014 tentang Pemberhentian Pegawai Negeri
                                    Sipil Yang Mencapai Batas Usia Pensiun Bagi Pejabat Fungsional</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/PP-No-4-thn-2014.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 4 Tahun 2014 Tentang Penyelenggaraan Pendidikan
                                    Tinggi Dan Pengelolaan Perguruan Tinggi</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/PP0322013.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 32 Tahun 2013 tentang Perubahan Atas Peraturan
                                    Pemerintah Nomor 19 Tahun 2005 tentang Standar Nasional Pendidikan</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/PP96-2012PelayananPublik.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 96 Tahun 2012 tentang Penutup Undang-undang Nomor 25
                                    Tahun 2009 tentang Pelayanan Publik</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://www.kopertis3.or.id/v6/wp-content/uploads/2019/08/PP82-2012TransaksiElektronik1.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 82 Tahun 2012 Tentang Penyelenggaraan Sistem Dan
                                    Transaksi Elektronik</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/PP46-2011PrestasiKerjaPNS.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 46 Tahun 2011 Tentang Penilaian Prestasi Kerja
                                    Pegawai Negeri Sipil</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/pp-no-66-tahun-2010.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 66 Tahun 2010 Tentang Perubahan Atas Peraturan
                                    Pemerintah Nomor 17 Tahun 2010 Tentang Pengelolaan Dan Penyelenggaraan Pendidikan</a>
                            </li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/pp-17-tahun-2010.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 17 Tahun 2010 Tentang Pengelolaan Dan
                                    Penyelenggaraan Pendidikan</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/pp-no-53-tahun-2010.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 53 Tahun 2010 Tentang Disiplin Pegawai Negeri
                                    Sipil</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/PP41-2009-TunjanganPropfesiGurudanDosenTunjanganKhususGurudanDosenSertaTunjanganKehormatanProfesor.pdPeratf">uran
                                    Pemerintah Republik Indonesia Nomor 41 Tahun 2009 Tentang</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/02/Permen-10-Tahun-2020.pdf">Peraturan
                                    Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 10 Tahun 2020 Tentang Program
                                    Indonesia Pintar</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/PP37-2009Dosen.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 37 Tahun 2009 Tentang Dosen</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/pp-19-tahun-2005-ttg-snp.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 19 Tahun 2005 Tentang Standar Nasional
                                    Pendidikan</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/html/wp-content/uploads/2011/04/pp_12_2002.pdf">Peraturan
                                    Pemerintah Republik Indonesia Nomor 12 Tahun 2002 Tentang Perubahan Atas Peraturan
                                    Pemerintah Nomor 99 Tahun 2000 Tentang Kenaikan Pangkat Pegawai Negeri Sipil</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
