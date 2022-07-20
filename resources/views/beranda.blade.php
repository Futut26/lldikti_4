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
            <a href="quote.html" class="btn btn-primary  py-3 px-5 mb-4 wow zoomIn" data-wow-delay="0.9s">Lihat
                Selengkapnya</a>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light shadow overflow-hidden h-100">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Beasiswa Mahasiswa</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <p>Undangan Grand Launching Wira Usaha Merdeka Tahun 2022</p>
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
                            <p>Paparan Kegiatan Pendampingan JAD Wilayah Purwakarta, Subang, Sumedang, Cimahi, Dan Kabupaten
                                Bandung Barat</p>
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
                                href="">Undangan & Pengumuman</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <p>Perpanjangan Waktu Pengisian Target dan Laporan Kinerja Triwulan II</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service h-auto bg-light rounded d-flex flex-column align-items-center justify-content-center ">
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

    <div class="container py-5 ">

        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">Gallery Kami</h2>
        </div>
        
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
                    <a class="lightbox" href="img/beranda/galerycoast.jpg">
                        <img src="img/beranda/galerycoast.jpg" alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../images/rails.jpg">
                        <img src="../images/rails.jpg" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../images/traffic.jpg">
                        <img src="../images/traffic.jpg" alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../images/rocks.jpg">
                        <img src="../images/rocks.jpg" alt="Rocks">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../images/benches.jpg">
                        <img src="../images/benches.jpg" alt="Benches">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../images/sky.jpg">
                        <img src="../images/sky.jpg" alt="Sky">
                    </a>
                </div>
            </div>
    
        </div>
    
    </div>

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-fluid py-5">
            <div class="row g-5">
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item h-auto bg-light rounded d-flex flex-column align-items-center ">
                        <div class="position-relative mt-3 pb-3 mb-3 text-center" style="max-width: 600px;">
                            <h2 class="mb-3">FAQ</h2>
                            <h5 class="fw-bold text-primary"> Daftar Pertanyaan dan Jawaban yana Sering Ditanyakan</h5>
                        </div>
                        <div class="col-lg-10 mb-5">
                            <div class="accordion accordion-custom" id="accordionExample">
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed fw-semi-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How long will it take to get a new website?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et
                                            magna
                                            diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-semi-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Do you only create HTML websites?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed fw-semi-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Will my website be mobile-friendly?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
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
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection
