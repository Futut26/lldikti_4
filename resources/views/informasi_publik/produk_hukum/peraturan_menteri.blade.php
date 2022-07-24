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
                                    href="https://jdih.kemdikbud.go.id/arsip/Permendikbud%202%20Tahun%202020%20-%20Salinan.pdf">Permendikbud
                                    No. 2 Tahun 2020 tentang Tata Cara Pelaksanaan Uji Kompetensi Mahasiswa Bidang
                                    Kesehatan. </a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="https://jdih.kemdikbud.go.id/arsip/Salinan%20PERMENDIKBUD%203%20TAHUN%202020%20FIX%20GAB.pdf">Permendikbud
                                    No. 3 Tahun 2020 tentang Standar Nasional Pendidikan Tinggi
                                    menggantikan Permenristekdikti No. 44 tahun 2015 tentang Standar Nasional Pendidikan
                                    Tinggi – Lampiran;</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="https://jdih.kemdikbud.go.id/arsip/Salinan%20PERMENDIKBUD%204%20TAHUN%202020%20FIX.pdf">Permendikbud
                                    No. 4 Tahun 2020 tentang Perubahan atas Permendikbud No. 88 Tahun 2014 tentang Perubahan
                                    Perguruan Tinggi Negeri Menjadi Perguruan Tinggi Negeri Badan Hukum;</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="https://jdih.kemdikbud.go.id/arsip/Salinan%20PERMENDIKBUD%205%20TAHUN%202020%20FIX.pdf">Permendikbud
                                    No. 5 Tahun 2020 menggantikan Permenristekdikti No. 32 Tahun 2016 tentang Akreditasi
                                    Prodi dan Perguruan Tinggi;</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="https://jdih.kemdikbud.go.id/arsip/Salinan%20PERMENDIKBUD%206%20TAHUN%202020%20FIX.pdf">Permendikbud
                                    No. 6 Tahun 2020 menggantikan Permenristekdikti No. 60 Tahun 2018 tentang Penerimaan
                                    Mahasiswa Baru Program Sarjana di Perguruan Tinggi Negeri;</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="https://jdih.kemdikbud.go.id/arsip/Salinan%20PERMENDIKBUD%207%20TAHUN%202020%20FIX.pdf">Permendikbud
                                    No. 7 Tahun 2020 menggantikan Permenristekdikti No. 51 Tahun 2018 tentang Pendirian,
                                    Perubahan, dan Pembubaran Perguruan Tinggi Negeri dan Pendirian, Perubahan, dan
                                    Pencabutan Izin Perguruan Tinggi Swasta.</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/02/Permen-10-Tahun-2020.pdf">Peraturan
                                    Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 10 Tahun 2020 Tentang Program
                                    Indonesia Pintar</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/02/Salinan-PERMENDIKBUD-7-TAHUN-2020-FIX.pdf">Peraturan
                                    Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 7 Tahun 2020 Tentang
                                    Pendirian, Perubahan, Pembubaran Perguruan Tinggi Negeri, Dan Pendirian, Perubahan,
                                    Pencabutan Izin Perguruan Tinggi Swasta</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/02/Salinan-PERMENDIKBUD-6-TAHUN-2020-FIX.pdf">Peraturan
                                    Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 6 Tahun 2020 Tentang
                                    Penerimaan Mahasiswa Baru Program Sarjana Pada Perguruan Tinggi Negeri</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/02/Salinan-PERMENDIKBUD-5-TAHUN-2020-FIX.pdf">Peraturan
                                    Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 5 Tahun 2020 Tentang
                                    Akreditasi Program Studi Dan Perguruan Tinggi</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/02/Salinan-PERMENDIKBUD-4-TAHUN-2020-FIX.pdf">Peraturan
                                    Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 4 Tahun 2020 Tentang
                                    Perubahan Atas Peraturan Menteri Pendidikan Dan Kebudayaan Nomor 88 Tahun 2014 Tentang
                                    Perubahan Perguruan Tinggi Negeri Menjadi Perguruan Tinggi Negeri Badan Hukum</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/02/Salinan-PERMENDIKBUD-3-TAHUN-2020-FIX-GAB.pdf">
                                    Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 3 Tahun 2020
                                    Tentang Standar Nasional Pendidikan Tinggi</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/01/Permendikbud-2-Tahun-2020-Salinan.pdf">Peraturan
                                    Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 2 Tahun 2020 Tentang Tata
                                    Cara Pelaksanaan Uji Kompetensi Mahasiswa Bidang Kesehatan</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/01/37-tahun-2019.pdf">Peraturan
                                    Menteri Riset, Teknologi, Dan Pendidikan Tinggi Republik Indonesia Nomor 37 Tahun 2019
                                    Tentang Tentang Uraian Jabatan Di Lembaga Layanan Pendidikan Tinggi</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://lldikti3.ristekdikti.go.id/v6/wp-content/uploads/2020/01/lampiran-37-2019.pdf">Lampiran
                                    Peraturan Menteri Riset, Teknologi, Dan Pendidikan Tinggi Republik Indonesia Nomor 37
                                    Tahun 2019 Tentang Tentang Uraian Jabatan Di Lembaga Layanan Pendidikan Tinggi</a></li>
                            <li class="list-group-item bg-light"><a class="text-dark"
                                    href="http://www.kopertis3.or.id/v6/wp-content/uploads/2019/10/Permenristekdikti-No-33-Tahun-2019-New.pdf">Peraturan
                                    Menteri Riset, Teknologi, Dan Pendidikan Tinggi Republik Indonesia Nomor 33 Tahun 2019
                                    Tentang Penyelenggaraan Pendidikan Antikorupsi Di Perguruan Tinggi</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
