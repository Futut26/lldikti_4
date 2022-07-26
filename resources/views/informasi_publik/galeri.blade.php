@extends('layouts.main')

@section('content')
    <div class="container-fluid bg-light p-0 pb-3">
        @include('partials.banner')
        <div class="container py-5 ">
            <div class="section-title position-relative pb-3 mb-3" style="max-width: 600px;">
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
                        <a class="lightbox" style="max-width: 80%;" href="img/beranda/gallery/tumnail-6.jpg">
                            <img src="img/beranda/gallery/tumnail-6.jpg" alt="Traffic">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
