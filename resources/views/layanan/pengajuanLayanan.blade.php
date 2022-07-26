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
        <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                {{-- COLUMN --}}
                <div class="row g-5">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 mb-4" style="height: auto">
                            <h4 class=""><i class="bi bi-star-fill"></i> Penggunaan Aplikasi EMPAT (E-Office Manajemen Pelayanan Aplikasi Terpadu)</h4>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h4 class=""><i class="bi bi-star-fill"></i> Pengusulan Jabatan Akademik Dosen (JAD)</h4>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h4 class=""><i class="bi bi-star-fill"></i> Proses Pendataan Perguruan Tinggi dan Prodi pada PDDIKTI</h4>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 mt-4 mb-5" style="height: auto">
                            <h4 class=""><i class="bi bi-star-fill"></i> Pengusulan Alur Mutasi/Perpindahan Mahasiswa</h4>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>                     
                    </div>                    
                </div>
            </div>
        </div>
        <!-- Content End -->

    @endsection
