@extends('layouts.main')

@section('content')
<div class="container-fluid bg-light p-0 pb-3">
    @include('partials.banner')
    <!-- Berita Terbaru -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title position-relative pb-3 mb-3" style="max-width: 600px;">
                <h2 class="mb-0">{{ $title }}</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light shadow overflow-hidden h-100">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">BAGIAN KELEMBAGAAN DAN SISTEM INFORMASI</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>15 October 2021  14:43</small>
                            </div>
                            <p>PEMBERITAHUAN BATAS AKHIR LAPORAN AKADEMIK 20202</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light shadow overflow-hidden h-100 ">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">INFORMASI LLDIKTI WILAYAH IV</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>20 October 2021  07:44</small>
                            </div>
                            <p>Laporan Kerja sama Perguruan Tinggi</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light shadow overflow-hidden h-100 ">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">INFORMASI LLDIKTI WILAYAH IV</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <p>Penutupan sementara sistem informasi usul pendirian/perubahan perguruan tinggi swasta (PTS) akademik dan pembukaan program studi akademik dan profesi tahun 2021 serta pergantian aplikasi untuk usulan tahun 2022</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light shadow overflow-hidden h-100">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">INFORMASI LLDIKTI WILAYAH IV</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>19 March 2022  17:03</small>
                            </div>
                            <p>Peluncuran Katalisator Program LLDikti 4 Episode II</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light shadow overflow-hidden h-100 ">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">SUB BAGIAN SISTEM INFORMASI DAN KERJASAMA</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>25 May 2022  19:50</small>
                            </div>
                            <p>Undangan “Peluang dan Potensi Implementasi MBKM Melalui Kerjasama dengan ICE Institute”</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
        
    </div>
    <!-- Info Terbaru End-->
</div>
@endsection