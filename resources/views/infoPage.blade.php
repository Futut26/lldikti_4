@extends('layouts.main')

@section('content')
<div class="container-fluid p-0 pb-3">
    @include('partials.banner')
    <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('img/'.$info->gambar) }}" alt="">
                        <h3 class="mb-4">{{ $info->title }}</h3>
                       <p>{!! $info->body !!}</p>
                    </div>

                </div>
                <div class="col-lg-4">
                

                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Info Lainnya</h3>
                        </div>
                        @foreach ( $infos as $info)
                        
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('img/'.$info->gambar) }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="/infoPage/{{ $info->slug }}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                                {{ $info->title }}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection