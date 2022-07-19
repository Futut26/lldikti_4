@extends('layouts.main')
@section('content')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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


    
    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            {{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div> --}}
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="position-relative overflow-hidden" style="height: 300px">
                            <a href="">Renstra</a>
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">Test</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="position-relative overflow-hidden" style="height: 300px">
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
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.8s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="position-relative overflow-hidden" style="height: 300px">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    {{-- Test Start --}}

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Projects</h5>
                <h1 class="mb-0">Projects Completed for Our Happy Clients</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="btn btn-outline-primary py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star me-2"></i>All
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".first">
                            <i class="fa fa-laptop-code me-2"></i>Design
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt me-2"></i>Development
                        </li>
                    </ul>
                </div>
            </div>
        <div class="row g-5 portfolio-container" style="position: relative; height: 1656.06px;">
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
        <div class="position-relative portfolio-box">
        <div class="portfolio-img rounded overflow-hidden">
        <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
        </div>
        <a class="portfolio-title border-bottom border-5 border-primary" href="">
        <h4>Project Name</h4>
        <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Design</small>
        </a>
        <div class="portfolio-btn">
        <a href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
        </div>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second wow slideInUp" data-wow-delay="0.3s" style="position: absolute; left: 492px; top: 0px; visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
        <div class="position-relative portfolio-box">
        <div class="portfolio-img rounded overflow-hidden">
        <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
        </div>
        <a class="portfolio-title border-bottom border-5 border-primary" href="">
        <h4>Project Name</h4>
        <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Development</small>
        </a>
        <div class="portfolio-btn">
        <a href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
        </div>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.5s" style="position: absolute; left: 0px; top: 552px; visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
         <div class="position-relative portfolio-box">
        <div class="portfolio-img rounded overflow-hidden">
        <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
        </div>
        <a class="portfolio-title border-bottom border-5 border-primary" href="">
        <h4>Project Name</h4>
        <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Design</small>
        </a>
        <div class="portfolio-btn">
        <a href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
        </div>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second wow slideInUp" data-wow-delay="0.1s" style="position: absolute; left: 492px; top: 552px; visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
        <div class="position-relative portfolio-box">
        <div class="portfolio-img rounded overflow-hidden">
        <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
        </div>
        <a class="portfolio-title border-bottom border-5 border-primary" href="">
        <h4>Project Name</h4>
        <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Development</small>
        </a>
        <div class="portfolio-btn">
        <a href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
        </div>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.3s" style="position: absolute; left: 0px; top: 1104px; visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
        <div class="position-relative portfolio-box">
        <div class="portfolio-img rounded overflow-hidden">
        <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
        </div>
        <a class="portfolio-title border-bottom border-5 border-primary" href="">
        <h4>Project Name</h4>
        <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Design</small>
        </a>
        <div class="portfolio-btn">
        <a href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
        </div>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second wow slideInUp" data-wow-delay="0.5s" style="position: absolute; left: 492px; top: 1104px; visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
        <div class="position-relative portfolio-box">
        <div class="portfolio-img rounded overflow-hidden">
        <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
        </div>
        <a class="portfolio-title border-bottom border-5 border-primary" href="">
        <h4>Project Name</h4>
        <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Development</small>
        </a>
        <div class="portfolio-btn">
        <a href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    
    {{-- Test End --}}


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                        </a>
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit.
                            Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd
                            eos duo.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>.
                            All Rights Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </p>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
