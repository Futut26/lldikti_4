@extends('layouts.main')

@section('content')
<div class="container-fluid bg-light p-0 pb-3">
    @include('partials.banner')
    <!-- Info Terbaru -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="mb-5 w-50 wow slideInUp" data-wow-delay="0.1s">
                <form action="/info" method="get">
                <div class="input-group">
                    <input name="search" type="text" class="form-control p-3" placeholder="Keyword" value='{{ request('search') }}'>
                    <button type="submit" class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </form>
            </div>

            <div class="section-title position-relative pb-3 mb-3" style="max-width: 600px;">
                <h2 class="mb-0">Info Terbaru</h2>
            </div>
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
        <div class="container mt-5">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                  
                  {{ $infos->links() }}
                  
        
                </ul>
              </nav>
        </div>
    </div>
    <!-- Info Terbaru End-->
</div>
@endsection