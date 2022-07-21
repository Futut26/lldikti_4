@extends('layouts.main')
@section('content')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h5 class="display-8 text-white animated zoomIn mb-3">LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH 4</h5>
                    <br/>
                    <h1 class="display-4 text-white animated zoomIn mb-3">{{ $banner }}</h1>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </div>

        <!-- Content Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                {{-- ROW 1 --}}
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 wow zoomIn " data-wow-delay="0.3s">
                        <div
                            class="service-item bg-silver  rounded d-flex flex-column shadow align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/edit-doc.gif" alt="">
                            <h4 class="mb-3 mt-3">JAD online</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn " data-wow-delay="0.6s">
                        <div
                            class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/priv-pol.gif" alt="">
                            <h4 class="mb-3 mt-3">Jurnal LLDIKTI</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn " data-wow-delay="0.9s">
                        <div
                            class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/book.gif" alt="">
                            <h4 class="mb-3 mt-3">Buletin LLDIKTI</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- ROW 2 --}}
                <div class="row g-5 my-2">
                    <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.3s">
                        <div
                            class="service-item bg-silver  rounded d-flex flex-column shadow align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/edit-doc.gif" alt="">
                            <h4 class="mb-3 mt-3">Simonev</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.6s">
                        <div
                            class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/chat.gif" alt="">
                            <h4 class="mb-3 mt-3">Sisinfo.lldikti4</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.9s">
                        <div
                            class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/priv-pol.gif" alt="">
                            <h4 class="mb-3 mt-3">Simantu</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="1.2s">
                        <div
                            class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/priv-pol.gif" alt="">
                            <h4 class="mb-3 mt-3">BKD Online</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- ROW 3 --}}
                <div class="row g-5 my-2">
                    <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.3s">
                        <div
                            class="service-item bg-silver  rounded d-flex flex-column shadow align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/school.gif" alt="">
                            <h4 class="mb-3 mt-3">Pindah Homebase</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.6s">
                        <div
                            class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/demand.gif" alt="">
                            <h4 class="mb-3 mt-3">SKP Online</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="0.9s">
                        <div
                            class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/book.gif" alt="">
                            <h4 class="mb-3 mt-3">Digilibrary</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow zoomIn " data-wow-delay="1.2s">
                        <div
                            class="service-item bg-silver  shadow rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <img width="175" src="img/layanan/priv-pol.gif" alt="">
                            <h4 class="mb-3 mt-3">Aplikasi Empat</h4>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->

    @endsection
