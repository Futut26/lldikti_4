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
                {{-- COLUMN RIGHT --}}
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 mb-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Mutasi Mahasiswa</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Penilaian Angka Kredit Jabatan Akademik Dosen Asisten Ahli dan Lektor</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Usulan Jabatan Akademik Dosen Lektor Kepala dan Profesor</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Pemberian Rekomendasi Beasiswa Dosen</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Alih Kelola Perguruan Tinggi Swasta</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Pendirian Perguruan Tinggi Swasta Baru</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Pembukaan Program Studi Baru PTS</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Perubahan Bentuk Perguruan Tinggi Swasta</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Pembukaan Program Studi Luar Kampus Utama</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Perubahan Lokasi Kampus Utama Perguruan Tinggi</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Penggabungan / Penyatuan PTS</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi pencabutan izin Program Studi / PTS</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Perubahan Nama Perguruan Tinggi</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Perubahan Nama Program Studi</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Rekomendasi Perubahan Nama Badan Penyelenggara Perguruan Tinggi Swasta</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Publikasi Informasi</h6>
                            <a class="btn btn-lg btn-primary rounded" style="height: 70%" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Validasi Ijazah bagi PTS</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    {{-- COLUMN LEFT --}}
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 mb-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Pengaduan Pelayanan Publik</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Data dan Informasi</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Penerbitan Surat Pengantar Migrasi Data PT/Prodi pada PDDIKTI</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Penerbitan Surat Pengantar Pendataan PT/Prodi pada PDDIKTI</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Penerbitan SK Penyetaraan Pangkat (Inpassing) Dosen Bukan Pegawai Negeri Sipil Untuk Golongan III</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Penerbitan SK Penyetaraan Pangkat (Inpassing) Dosen Bukan Pegawai Negeri Sipil Untuk Golongan IV</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Alih Jabatan/Tugas Pegawai Negeri Sipil Non Dosen Menjadi Dosen</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Mutasi Dosen Pegawai Negeri Sipil Dari PTN atau PTS di Luar LLDIKTI Wilayah IV ke LLDIKTI Wilayah IV</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Surat Usulan Penerbitan SK Tugas Belajar Dosen Pegawai Negeri Sipil Dpk</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Ijin Belajar Dosen Pegawai Negeri Sipil Dpk.</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Pembuatan Surat Usulan SK Kenaikan Pangkat/Golongan Dosen Pegawai Negeri Sipil Dpk</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Kenaikan Pangkat/Golongan Dosen Tetap Yayasan III</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Kenaikan Pangkat/Golongan Dosen Tetap Yayasan IV</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Penerbitan Surat Rekomendasi Perpindahan Dosen Bukan Pegawai Negeri Sipil</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="service-item bg-light rounded d-flex flex-column justify-content-center py-3 my-4" style="height: auto">
                            <h6 class=""><i class="bi bi-star-fill"></i> Pelayanan Validasi Ijazah Bagi PTS yang Sudah Tidak Beroperasi atau Tutup</h6>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Content End -->

    @endsection
