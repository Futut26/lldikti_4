@extends('layouts.main')
@section('content')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/slide1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="display-1 text-white mb-md-4 animated zoomIn">Lembaga Layanan Pendidikan Tinggi
                            Wilayah 4
                        </h6>
                        <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated zoomIn">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/slide2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="display-1 text-white mb-md-4 animated zoomIn">Lembaga Layanan Pendidikan Tinggi
                            Wilayah 4
                        </h6>
                        <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated zoomIn">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- welcome -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-2 mb-5">
                        <h2 class="mb-0">Selamat Datang di Lembaga Layanan Pendidikan Tinggi Wilayah 4</h2>
                        <h3 class="mt-1 text-primary">Jawa Barat dan Banten</h3>
                    </div>
                    <p class="mb-4">LLDIKTI mempunyai tugas membantu peningkatan mutu penyelenggaraan pendidikan
                        <br>tinggi baik perguruan tinggi negeri maupun perguruan tinggi swasta di wilayah kerjanya.
                    </p>
                    <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.6s">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link text-uppercase active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Visi</button>
                                <button class="nav-link text-uppercase" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Misi</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <div class="row g-3">
                                    <div class="col-sm-9">
                                        <h5 class="mb-3">Terwujudnya perguruan tinggi yang bermutu melebihi standar
                                            nasional Pendidikan Tinggi</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <div class="row g-3">
                                    <div class="col-sm-9">
                                        <h5 class="mb-3">Membantu penyelenggaraan pendidikan tinggi yang bermutu melalui
                                            Bindalwas penatakelolaan, manajemen, organisasi dan kepemimpinan perguruan
                                            tinggi</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary btn-sm py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">Baca Selengkapnya</a>
                </div>
                <div class="col-lg-5" style="min-height: 100px;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/ki-hajar.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide_3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide_4.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide_5.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide_6.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome End -->

    <!-- Info Terbaru -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title position-relative pb-3 mb-3" style="max-width: 600px;">
                <h2 class="mb-0">Info Terbaru</h2>
            </div>
            <a href="/info" class="btn btn-primary  py-3 px-5 mb-4 wow zoomIn" data-wow-delay="0.9s">Lihat
                Selengkapnya</a>
            <div class="row g-5">
                @foreach ($infos as $info )
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light shadow overflow-hidden h-100">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Info</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ date('d F Y', strtotime($info->published_at)) }}</small>
                            </div>
                            <p>{{ $info->title }}</p>
                            <a class="text-uppercase" href="/infoPage/{{ $info->slug }}">Baca Selengkapnya <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Info Terbaru End-->


    <!-- Service Online Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title position-relative pb-3 mb-5" style="max-width: 600px;">
                <h2 class="mb-0">Layanan Online</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.3s">
                    <div
                        class="service-item bg-silver  rounded d-flex flex-column shadow align-items-center justify-content-center text-center">
                        <img width="100" src="img/icons8-document.gif" alt="">
                        <h4 class="mb-3 mt-3">SPTJM online</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.6s">
                    <div
                        class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img width="100" src="img/icons8-literature.gif" alt="">
                        <h4 class="mb-3 mt-3">Digilibrary</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.6s">
                    <div
                        class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img width="100" src="img/icons8-bookmark2.gif" alt="">
                        <h4 class="mb-3 mt-3">Jurnal LLDIKTI</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.6s">
                    <div
                        class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img width="100" src="img/icons8-bookmark.gif" alt="">
                        <h4 class="mb-3 mt-3">Buletin LLDIKTI</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service online End -->

    <!-- Service Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title position-relative pb-3 mb-5" style="max-width: 600px;">
                <h2 class="mb-0">Layanan Kami</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-award text-white"></i>
                        </div>
                        <h6 class="m-0">Pelayanan Validasi Ijazah Bagi PTS yang Sudah Tidak Beroperasi atau Tutup</h6>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap text-white"></i>
                        </div>
                        <h6 class="m-0">Standar Pelayanan Mutasi Mahasiswa</h6>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-percent text-white"></i>
                        </div>
                        <h6 class="m-0">Pelayanan Penilaian Angka Kredit Jabatan Akademik Dosen Asisten Ahli dan Lektor
                        </h6>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-chalkboard-teacher text-white"></i>
                        </div>
                        <h6 class="m-0">Pelayanan Rekomendasi Usulan Jabatan Akademik Dosen Lektor Kepala dan Profesor
                        </h6>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-university text-white"></i>
                        </div>
                        <h6 class="mb-0">Pelayanan Rekomendasi Perubahan Nama Badan Penyelenggara Perguruan Tinggi Swasta
                        </h6>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-share-square text-white"></i>
                        </div>
                        <h6 class="mb-0">Pelayanan Rekomendasi Alih Kelola Perguruan Tinggi Swasta</h6>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-building text-white"></i>
                        </div>
                        <h6 class="mb-0">
                            Pelayanan Rekomendasi Pendirian Perguruan Tinggi Swasta Baru</h6>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-newspaper text-white"></i>
                        </div>
                        <h6 class="mb-0">
                            Rekomendasi Pembukaan Program Studi Baru PTS</h6>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Info Terbaru -->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title position-relative pb-3 mb-3" style="max-width: 600px;">
                <h2 class="mb-0">Berita Kami</h2>
            </div>
            <a href="" class="btn btn-primary  py-3 px-5 mb-4 wow zoomIn" data-wow-delay="0.9s">Lihat
                Selengkapnya</a>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light shadow overflow-hidden h-100">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Berita</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>30 June 2022 </small>
                            </div>
                            <p>SOSIALISASI PELAPORAN AKADEMIK MELALUI APLIKASI NEO FEEDER</p>
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
                                href="">Berita</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>30 June 2022</small>
                            </div>
                            <p>Pendampingan JAD Untuk Penilai JAD Internal dan Operator JAD Perguruan Tinggi</p>
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
                                href="">Bertia</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>22 June 2022</small>
                            </div>
                            <p>Sosialisasi Jaminan Sosial Ketenagakerjaan Sesi 1</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Info Terbaru End-->


    <!-- Service Start -->
    <div class="container-fluid py-3  wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-fluid py-5">
            <div class="row g-5">
                <div class="col-lg-12 px-0 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service px-0 h-auto bg-light rounded d-flex flex-column align-items-center justify-content-center ">
                        <div class="container py-1">
                            <div class="row g-5 align-items-center justify-content-center ">
                                <div class="col-lg-4">
                                    <div class="section-title position-relative pb-2 mb-5">
                                        <h3 class="mt-1 text-primary">Layanan LLDIKTI</h3>
                                        <h2 class="mb-0">Butuh Bantuan ?</h2>
                                    </div>
                                    <p class="mb-4">
                                        Layanan LLDIKTI siap membantu anda
                                    </p>
                                    <a href="quote.html" class="btn btn-primary btn-sm py-2 px-5 mt-3 wow zoomIn"
                                        data-wow-delay="0.9s">Kontak Kami</a>
                                </div>
                                <div class="col-lg-5" style="min-height: 100px;">
                                    <div class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="img/beranda/kontak.png" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container ">
        <div class="section-title position-relative pb-3 mb-3" style="max-width: 600px;">
            <h2 class="mb-0">Berita Kami</h2>
        </div>
        <a href="quote.html" class="btn btn-primary  py-3 px-5 mb-4 wow zoomIn" data-wow-delay="0.9s">Lihat
            Selengkapnya</a>
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="img/beranda/gallery/tumnail-1.jpg">
                        <img src="img/beranda/gallery/tumnail-1.jpg" alt="tumnail-1">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="img/beranda/gallery/tumnail-2.jpg">
                        <img src="img/beranda/gallery/tumnail-2.jpg" alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="img/beranda/gallery/tumnail-3.jpg">
                        <img src="img/beranda/gallery/tumnail-3.jpg" alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="img/beranda/gallery/tumnail-4.jpg">
                        <img src="img/beranda/gallery/tumnail-4.jpg" alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="img/beranda/gallery/tumnail-5.jpg">
                        <img src="img/beranda/gallery/tumnail-5.jpg" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="img/beranda/gallery/tumnail-6.jpg">
                        <img src="img/beranda/gallery/tumnail-6.jpg" alt="Traffic">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5 ">
        <div class="section-title position-relative pb-3 mb-3" style="max-width: 600px;">
            <h2 class="mb-0">Video Kami</h2>
        </div>
        <a href="https://www.youtube.com/c/LLDIKTIWILAYAH4/featured" class="btn btn-primary  py-3 px-5 mb-4 wow zoomIn"
            data-wow-delay="0.9s">Lihat
            Selengkapnya</a>
        <div class="container-4">
            <div class="main-video-container">
                <iframe src="https://www.youtube.com/embed/3palWyc5vN0" allow="autoplay" loop controls
                    class="main-video"></iframe>
            </div>

            <div class="video-list-container">

                <div class="list active">
                    <iframe src="https://www.youtube.com/embed/3palWyc5vN0" class="list-video"></iframe>
                    <h3 class="list-title">Sambutan Dirjen DIKTI Rakerda LLDIKTI IV</h3>
                </div>

                <div class="list">
                    <iframe src="https://www.youtube.com/embed/yT9C6nsfLiI" class="list-video"></iframe>
                    <h3 class="list-title">INGAT SELALU PESAN IBU! 3M...</h3>
                </div>

                <div class="list">
                    <iframe src="https://www.youtube.com/embed/E0k22bCm_dU" class="list-video"></iframe>
                    <h3 class="list-title">Pemberian Piagam PTS 100 Rakerda 2019 LLDIKTI IV</h3>
                </div>

                <div class="list">
                    <iframe src="https://www.youtube.com/embed/Dif4eqvMeoY" class="list-video"></iframe>
                    <h3 class="list-title">proyek perubahan PKN II Angkatan XV Sekretaris LLDIKTI wilayah IV</h3>
                </div>

                <div class="list">
                    <iframe src="https://www.youtube.com/embed/iiPKDD5vD-Y" class="list-video"></iframe>
                    <h3 class="list-title">TOT - Pendidikan Anti Korupsi</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">FAQ</h1>
            <h5 class="fw-bold text-primary">Daftar Pertanyaan dan Jawaban yana Sering Ditanyakan</h5>
        </div>
        <div class="border rounded p-4">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Apa itu LLDIKTI ?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Secara struktural LLDIKTI Wilayah IV Jawa Barat dan Banten merupakan unit
                            pelaksana teknis Direktorat Jenderal Pendidikan Tinggi yang melaksanakan tugas Pembinaan,
                            Pengendalian, dan Pengawasan (BINDALWAS) kepada PTS berdasarkan Peraturan Menteri Pendidikan
                            dan Kebudayaan RI Nomor 1 Tahun 2013 tentang Organisasi dan Tata Kerja Koordinasi Perguruan
                            Tinggi
                            Swasta, dan saat ini berubah bentuk menjadi Lembaga Layanan Pendidikan Tinggi (LLDIKTI)
                            berdasarkan
                            Pemenristekdikti no.15 tahun 2018. LLDIKTI berfungsi membantu meningkatkan mutu penyelenggaraan
                            Pendidikan Tinggi.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Layanan Yang Kami Sediakan
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ol>
                                <li> Pelayanan Mutasi Mahasiswa </li>
                                <li> Pelayanan Penilaian Angka Kredit Jabatan Akademik Dosen Asisten Ahli dan Lektor</li>
                                <li> Pelayanan Rekomendasi Usulan Jabatan Akademik Dosen Lektor Kepala dan Profesor</li>
                                <li> Pelayanan Pemberian Rekomendasi Beasiswa Dosen</li>
                                <li> Pelayanan Rekomendasi Alih Kelola Perguruan Tinggi Swasta</li>
                                <li> Pelayanan Rekomendasi Pendirian Perguruan Tinggi Swasta Baru</li>
                                <li> Pelayanan Rekomendasi Pembukaan Program Studi Baru PTS</li>
                                <li> Pelayanan Rekomendasi Perubahan Bentuk Perguruan Tinggi Swasta</li>
                                <li> Pelayanan Rekomendasi Pembukaan Program Studi Luar Kampus Utama</li>
                                <li> Pelayanan Rekomendasi Perubahan Lokasi Kampus Utama Perguruan Tinggi</li>
                                <li> Pelayanan Rekomendasi Penggabungan / Penyatuan PTS</li>
                                <li> Pelayanan Rekomendasi pencabutan izin Program Studi / PTS</li>
                                <li> Pelayanan Rekomendasi Perubahan Nama Perguruan Tinggi</li>
                                <li> Pelayanan Rekomendasi Perubahan Nama Program Studi</li>
                                <li> Pelayanan Rekomendasi Perubahan Nama Badan Penyelenggara Perguruan Tinggi Swasta</li>
                                <li> Pelayanan Publikasi Informasi</li>
                                <li> Pelayanan Pengaduan Pelayanan Publik</li>
                                <li> Pelayanan Data dan Informasi</li>
                                <li> Pelayanan Penerbitan Surat Pengantar Migrasi Data PT/Prodi pada PDDIKTI</li>
                                <li> Pelayanan Penerbitan Surat Pengantar Pendataan PT/Prodi pada PDDIKTI</li>
                                <li> Pelayanan Penerbitan SK Penyetaraan Pangkat (Inpassing) Dosen Bukan Pegawai Negeri
                                    Sipil Untuk Golongan III</li>
                                <li> Pelayanan Surat Usulan Penerbitan SK Penyetaraan Pangkat (Inpassing) Dosen Bukan
                                    Pegawai Negeri Sipil Untuk Golongan IV</li>
                                <li> Pelayanan Alih Jabatan/Tugas Pegawai Negeri Sipil Non Dosen Menjadi Dosen</li>
                                <li> Pelayanan Mutasi Dosen Pegawai Negeri Sipil Dari PTN atau PTS di Luar LLDIKTI Wilayah
                                    IV ke LLDIKTI Wilayah IV</li>
                                <li> Pelayanan Surat Usulan Penerbitan SK Tugas Belajar Dosen Pegawai Negeri Sipil Dpk.</li>
                                <li> Pelayanan Pembuatan SK Ijin Belajar Dosen Pegawai Negeri Sipil Dpk.</li>
                                <li> Pelayanan Pembuatan Surat Usulan SK Kenaikan Pangkat/Golongan Dosen Pegawai Negeri
                                    Sipil Dpk</li>
                                <li> Pelayanan Kenaikan Pangkat/Golongan Dosen Tetap Yayasan Golongan III</li>
                                <li> Pelayanan Kenaikan Pangkat/Golongan Dosen Tetap Yayasan Golongan IV</li>
                                <li> Pelayanan Penerbitan Surat Rekomendasi Perpindahan Dosen Bukan Pegawai Negeri Sipil
                                </li>
                                <li> Pelayanan Verifikasi Ijazah bagi PTS yang Sudah Tidak Beroperasi atau Tutup</li>
                                <li> Pelayanan Validasi Ijazah bagi PTS</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Butuh Bantuan Kami ?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Silahkan klik link dibawah ini: <br>
                            <a href="https://www.lldikti4.id/kontak/">https://www.lldikti4.id/kontak/ </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>

                <div class="testimonial-item bg-light my-4 h-50">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/beranda/asep.png" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">
                                Asep Rohmandarjuara</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Semoga makin memperbaiki kualitas pendidikan di wilayah IV khususnya dan Nasional umumnya
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4  h-50">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/beranda/hendra.png"
                            style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1"> Fairlee surya</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Pelayananya the Best ada loket Pelayananan Terpadunya,petugas loketnya.......dilayani sampai
                        tuntas dan dicarikan solusinya...terimakasih LLDIKTI IV
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4  h-50">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/beranda/hendra.png"
                            style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1"> Hendi Prawiraatmaja </h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Pelayanananya bagus responsip, terimakasih saya sangat terbantu sekali
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
