@extends('layouts.main')

@section('content')
    <div class="container-fluid p-0 pb-3">
        @include('partials.banner')

        {{-- PPID Start --}}
        <div class="container-fluid py-4 my-5 wow fadeInUp" style="height: 200%" data-wow-delay="0.1s">
            <div class="container border shadow bg-light">
                <h4 class="fw-bold my-5 py-5 px-5 text-center">Untuk melihat Peta Proses Bisnis LLDIKTI Wilayah 4, Anda bisa mengunduhnya dengan mengklik tombol Download dibawah ini </h4>
                <div class="row gy-5 gx-4">
                    <div class="col-lg-12 col-md-6 text-center">
                        <a href="https://www.lldikti4.id/wp-content/uploads/2022/06/Probis-LLDIKTI-Wilayah-IV-All.pdf" class="btn btn-sm btn-primary  py-4 px-5 mb-5 align-content-center fs-4" data-wow-delay="0.9s">Download</a>


                    </div>
                </div>
            </div>
        </div>
        {{-- PPID End --}}
    </div>

@endsection

