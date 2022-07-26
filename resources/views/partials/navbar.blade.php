<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg  navbar-dark px-5 py-3 py-lg-0 sticky-top ">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0"><img src="{{ asset('img/LLDIKTI-LOGOrev1-1.png') }}" width="200" alt="LLDIKTI4"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link {{ $title === 'Beranda' ? 'active' : '' }} ">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title === 'Profil' ? 'active' : '' }} "
                        data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu m-0">
                        <a href="/profil" class="dropdown-item ">Profil LLDIKTI 4</a>
                        <a href="/profilKepala" class="dropdown-item">Profil Kepala LLDIKTI 4</a>
                    </div>
                </div>
                <a href="/info" class="nav-item nav-link">Info</a>
                <a href="/akuntabilitas"
                    class="nav-item nav-link {{ $title === 'Akuntabilitas' ? 'active' : '' }}">Akuntabilitas</a>
                <a href="/berita" class="nav-item nav-link">Berita</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu m-0">
                        <a href="/layananOnline" class="dropdown-item">Layanan Online</a>
                        <a href="/layananKami" class="dropdown-item">Layanan Kami</a>
                        <a href="/caraPengajuanLayanan" class="dropdown-item">Cara Pengajuan Layanan</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false"> Infomasi Publik </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                         <li><a class="dropdown-item" href="/spp">Standar Pelayanan Publik</a></li>
                         <li class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle" href="/produkHukum" id="multilevelDropdownMenu1"
                                data-bs-toggle="" aria-haspopup="false" aria-expanded="false">Produk Hukum</a>
                            <ul class="dropdown-menu mx-10" aria-labelledby="multilevelDropdownMenu1">
                                    <li><a class="dropdown-item" href="/suratEdaran">Surat Edaran</a></li>
                                    <li><a class="dropdown-item" href="/undang_undang">Undang - Undang</a></li>
                                    <li><a class="dropdown-item" href="/peraturan_ristekdikti">Peraturan Ristekdikti</a></li>
                                    <li><a class="dropdown-item" href="/peraturan_presiden">Peraturan Presiden</a></li>
                                    <li><a class="dropdown-item" href="/peraturan_menteri">Peraturan Menteri</a></li>
                                    <li><a class="dropdown-item" href="/peraturan_pemerintah">Peraturan Pemerintah</a></li>
                                    <li><a class="dropdown-item" href="/sk_dirjen">SK DIRJEN</a></li>
                            </ul>
                        </li>
                         <li><a class="dropdown-item" href="#">PPID</a></li>
                         <li><a class="dropdown-item" href="#">Prosedur Operasional Standar</a></li>
                         <li><a class="dropdown-item" href="#">Peta Proses Bisnis LLDIKTI Wilayah IV</a></li>
                         <li><a class="dropdown-item" href="#">Buku Panduan / Pedoman</a></li>
                         <li><a class="dropdown-item" href="#">Materi Kegiatan</a></li>
                         <li><a class="dropdown-item" href="#">Buletin LLDIKTI Wilayah IV</a></li>
                         <li><a class="dropdown-item" href="#">Buku Direktori PTS LLDIKTI IV</a></li>
                         <li><a class="dropdown-item" href="#">Buku Statistik Perguruan Tinggi</a></li>
                         <li><a class="dropdown-item" href="#">Agenda Kegiatan</a></li>
                         <li><a class="dropdown-item" href="#">Galeri</a></li>
                         
                    </ul>
                </div>
            </div>
            <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="fa fa-search"></i>
            </button>
            <a href="https://htmlcodex.com/startup-company-website-template"
                class="btn btn-primary py-2 px-4 ms-3">Kontak & Pengaduan</a>
        </div>
    </nav>

    

    <!-- Navbar & Carousel End -->
    <script>
        let dropdowns = document.querySelectorAll('.dropdown-toggle')
        dropdowns.forEach((dd) => {
            dd.addEventListener('mouseover', function(e) {
                var el = this.nextElementSibling
                el.style.display = el.style.display === 'block' ? 'none' : 'block'
            })
        })
    </script>














