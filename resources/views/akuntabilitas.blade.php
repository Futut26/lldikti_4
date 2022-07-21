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
        <div class="container-fluid pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                {{-- ROW 1 --}}
                <div class="row g-5 mb-2">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">RENSTRA LLDIKTI WILAYAH IV 2020-2024</h6>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/akuntabilitas/bg1.png" alt="">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="" style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">PERJANJIAN KINERJA TAHUN 2022</h6>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/akuntabilitas/bg2.jpg" alt="">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="" style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">KOMITMEN KINERJA TAHUN 2022</h6>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/akuntabilitas/bg3.jpg" alt="">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="" style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ROW 2 --}}
                <div class="row g-5 my-2">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">KOMITMEN KINERJA TAHUN 2022</h6>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/akuntabilitas/bg3.jpg" alt="">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="" style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">RENSTRA LLDIKTI WILAYAH IV 2020-2024</h6>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/akuntabilitas/bg1.png" alt="">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="" style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">PERJANJIAN KINERJA TAHUN 2022</h6>
                                <p class="text-uppercase m-0">Designation</p>
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/akuntabilitas/bg2.jpg" alt="">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="" style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        
        <!-- Content End -->

    @endsection
