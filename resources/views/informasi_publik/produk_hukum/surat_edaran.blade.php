@extends('layouts.main')

@section('content')
    <div class="container-fluid bg-light p-0 pb-3">
        @include('partials.banner')
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light shadow overflow-hidden h-100">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i> 28 April 2016</small>
                                </div>
                                <p>perpanjangan nisbah rasio s.d juni 2016</p>
                                <a class="text-uppercase" href="">Baca Selengkapnya <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light shadow overflow-hidden h-100 ">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>6 June 2015</small>
                                </div>
                                <p>Surat Edaran Menteri Kemristek Dikti nomor:105/M/VI/2015 tentang data PD-DIKTI
                                    </p>
                                <a class="text-uppercase" href="">Baca Selengkapnya <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light shadow overflow-hidden h-100 ">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                                
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>2 March 2015</small>
                                </div>
                                <p>Surat Edaran Dikti (Verifikasi data dosen yang masih Sarjana-S1 nomor:360/E4.4/2015)
                                    </p>
                                <a class="text-uppercase" href="">Baca Selengkapnya <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light shadow overflow-hidden h-100">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                                
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i> 20 February 2015</small>
                                </div>
                                <p>Surat Edaran Diktendik No. 224/E4.5/2015: Nomor Induk Dosen Nasional (NIDN)
                                   </p>
                                <a class="text-uppercase" href="">Baca Selengkapnya <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light shadow overflow-hidden h-100 ">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                               
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>30 January 2015</small>
                                </div>
                                <p>Surat Edaran Dikti (Pelaporan Melalui Feeder nomor:0543/E1.2/PL/2015)
                                    </p>
                                <a class="text-uppercase" href="">Baca Selengkapnya <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light shadow overflow-hidden h-100 ">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/blog.jpg" alt="">
                                
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>09 January 2015</small>
                                </div>
                                <p>Surat Edaran Dikti nomor:145/E.E2/KL/2015 tentang Pembukaan Pengusulan Pendirian Perguruan Tinggi dan Penyelenggaraan Prodi
                                    </p>
                                <a class="text-uppercase" href="">Baca Selengkapnya <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
