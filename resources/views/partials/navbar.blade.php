<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg  navbar-dark px-5 py-3 py-lg-0 sticky-top ">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0"><img src="img/LLDIKTI-LOGOrev1-1.png" width="200" alt="LLDIKTI4"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link {{ ($title === 'Beranda') ? 'active' : ''}} ">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ ($title === 'Profil') ? 'active' : ''}} " data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu m-0">
                        <a href="/profil" class="dropdown-item ">Profil LLDIKTI 4</a>
                        <a href="/profilKepala" class="dropdown-item">Profil Kepala LLDIKTI 4</a>
                    </div>
                </div>
                <a href="/info" class="nav-item nav-link">Info</a>
                <a href="/akuntabilitas" class="nav-item nav-link {{ ($title === 'Akuntabilitas') ? 'active' : ''}}">Akuntabilitas</a>
                <a href="/berita" class="nav-item nav-link">Berita</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Layanan Online</a>
                        <a href="detail.html" class="dropdown-item">Layanan kami</a>
                        <a href="detail.html" class="dropdown-item">Cara Pengajuan Layanan</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi Publik</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Our features</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                    </div>
                </div>
            </div>
            <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </nav>

<!-- Navbar & Carousel End -->


