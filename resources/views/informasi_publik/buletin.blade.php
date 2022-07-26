@extends('layouts.main')

@section('content')
    <div class="container-fluid p-0 pb-3">
        @include('partials.banner')
        <!-- Content Start -->
        <div class="container-fluid pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                {{-- ROW 1 --}}
                <div class="row g-5 mb-2">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">Buletin LLDIKTI IV - April 2022</h6>
                               
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid h-100" src="img/buletin_lldikti/1.jpg" alt="ff">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="pdf/1.pdf"  style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">Buletin LLDIKTI IV - Agustus 2021</h6>
                               
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid h-100" src="img/buletin_lldikti/2.jpg" alt="">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="pdf/2.pdf"  style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                        <div class="team-item bg-light rounded overflow-hidden shadow">
                            <div class="text-center py-4">
                                <h6 class="text-primary">Buletin LLDIKTI IV - Agustus 2021</h6>
                               
                            </div>
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid h-100" src="img/buletin_lldikti/3.jpg" alt="">
                                <div class="team-social mt">
                                    <a class="btn btn-lg btn-warning btn-lg-square rounded text-white" href="pdf/3.pdf"  style="width: 150px">Download <i class="bi bi-file-earmark-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
                
            </div>
        </div>

        
        <!-- Content End -->
            
    </div>
@endsection

