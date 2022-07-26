@extends('layouts.main')

@section('content')
    <div class="container-fluid p-0 pb-3">
        @include('partials.banner')

        {{-- Content Start --}}
        <div class="container-fluid pt-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h4 class="fw-bold my-2 text-center">Daftar Prosedur Operasional Standar</h4> 
                <h4 class="fw-bold my-2 text-center">LLDIKTI Wilayah IV</h4>
            </div>
        </div>

        <div class="container py-2 mb-5 shadow wow fadeInUp" data-wow-delay="0.4s>
            <div class="border rounded p-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <h5><i class="bi bi-asterisk"></i> Layanan Akademik</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-AK-1-V03 Pelaksanaan Pengumpulan dan Pengolahan Data Mutu Akademik</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-2-V03 Pelaksanaan Penyusunan Pedoman Kegiatan Akademik</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-3-V03 Pengelolaan Program Penelitian dan Pengabdian Kepada Masyarakat</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-4-V05 Validasi dan Verifikasi Ijazah</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-5-V07 Penyelesaian Legalisasi Fotokopy Ijazah Bagi PTS yang Sudah Ditutup</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-6-V03 Penerbitan Surat Keterangan Pengganti Ijazah bagi Perguruan Tinggi yang Tutup</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-8-V03 Pelaporan Pendataan Kekayaan Intelektual dan Publikasi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-9-V03 Pelaksanaan Pemantauan dan Evaluasi Pelaksanaan Pembelajaran</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-10-V03 Pelaksanaan Pemantauan dan Evaluasi Pelaksanaan Penelitian dan Pengabdian</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-11-V01 Verifikasi Perpanjangan Masa Studi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-AK-12-V01 Reset atau Pembatalan PIN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <h5><i class="bi bi-asterisk"></i> Layanan Kemahasiswaan</h5>                                
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-KM-1-V07 Rekomendasi Mutasi Mahasiswa</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KM-2-V11 Pemberian Beasiswa UKT SPP</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KM-6-V04 Pemberian Beasiswa KIP Kuliah</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <h5><i class="bi bi-asterisk"></i> Layanan Pendidik dan Tenaga Kependidikan</h5> 
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-DK-1-V08 Penerbitan Penilaian Angka Kredit (PAK) Jabatan Akademik Dosen Asisten Ahli dan Lektor</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-DK-2-V07 Pemrosesan Usulan Jabatan Fungsional Dosen Lektor Kepala dan Guru Besar</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-DK-3-V09 Penerbitan Surat Rekomendasi Beasiswa Unggulan Dosen Indonesia dalam dan luar Negeri</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-DK-4-V06 Proses Sertifikasi Dosen</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-DK-5-V04 Pemilihan Diktendik Berprestasi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-DK-6-V02 Beban Kinerja Dosen</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                <h5><i class="bi bi-asterisk"></i> Layanan Kelembagaan, Sarana dan Prasarana</h5> 
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-KL-1-V01 Standar Pelayanan Rekomendasi Alih Kelola Perguruan Tinggi Swasta</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-2-V01 Standar Pelayanan Rekomendasi Pendirian Perguruan Tinggi Swasta Baru</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-3-V01 Standar Pelayanan Rekomendasi Pembukaan Program Studi Baru PTS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-4-V01 Standar Pelayanan Rekomendasi Perubahan Bentuk Perguruan Tinggi Swasta</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-5-V01 Standar Pelayanan Rekomendasi Pembukaan Program Studi Luar Kampus Utama</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-6-V01 Standar Pelayanan Rekomendasi Perubahan Lokasi Kampus Utama Perguruan Tinggi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-7-V01 Standar Pelayanan Rekomendasi Penggabungan Penyatuan PTS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-8-V01 Standar Pelayanan Rekomendasi Pencabutan Izin Program Studi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-9-V01 Standar Pelayanan Rekomendasi Perubahan Nama Perguruan Tinggi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-10-V01 Standar Pelayanan Rekomendasi Perubahan Nama Program Studi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-KL-11-V01 Standar Pelayanan Rekomendasi Perubahan Nama Badan Penyelenggara Perguruan Tinggi Swasta</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SP-1-V03 Pengumpulan, Pengolahan dan Pemetaan Data Sarana dan Prasarana Perguruan Tinggi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SP-2-V03 Pemberian Rekomendasi Bantuan Sarana Prasarana PT</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SP-3-V03 Penyiapan Bahan Fasilitas dan Pemberian Bimbingan Teknis</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SP-4-V03 Pemantauan dan Evaluasi Sarana dan Prasarana Perguruan Tinggi (Monev)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                <h5><i class="bi bi-asterisk"></i> Layanan Sistem Informasi dan Kerjasama</h5> 
                                
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-SI-1-V03 Pengembangan Sistem Informasi Melalui Vendor</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SI-2-V03 Rancangan Pengembangan Sistem Informasi yang Dikelola dan Dievaluasi Sendiri</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SI-3-V07 Pemeliharaan Jariangan dan Sistem Informasi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SI-4-V07 Pembuatan BAP Usulan Tipe 1</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SI-5-V03 Evaluasi Pelaporan Semester Perguruan Tinggi Melalui Aplikasi Feeder</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SI-6-V03 Pengelolaan Pangkalan Data Pendidikan Tinggi dan SISTER</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SI-7-V03 Mengembangkan Desain Serta Mengelola Laman</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-SI-8-V03 Pengumpulan, Pengolahan dan Penyusunan Bahan Fasilitasi Pengembangan Kerjasama Perguruan Tinggi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                <h5><i class="bi bi-asterisk"></i> Layanan Kepegawaian dan Tatalaksana</h5> 
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-1-V03 Penyiapan Bahan Usulan Pengadaan CPNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-2-V03 Penyiapan Bahan Pelantikan, Pengangkatan dan Sumpah PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-3-V06 Pemrosesan SK Inpassing Golongan III dan SK KP Inpassing Golongan III</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-4-V03 Pemrosesan Usulan SK Inpassing Golongan IV dan SK KP Inpassing Golongan IV</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-5-V08 Pemrosesan Usulan SK Kenaikan Pangkat PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-6-V03 Pemrosesan SK Jabatan Akademik Dosen Asisten Ahli dan Lektor</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-7-V03 Pemreosesan Usulan SK Perpindahan Dosen dan Alih Tugas Nondosen Menjadi Dosen</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-8-V03 Pemreosesan Pelanggaran Disiplin PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-9-V03 Pemrosesan Pemberhentian PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-10-V03 Pemrosesan Pemberian Cuti PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-11-V03 Pemrosesan Pemberian Penghargaan Satya Lencana Karya Satya Bagi PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-12-V03 Pemrosesan Verifikasi dan Validasi SKP Dosen</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-13-V05 Pemrosesan Pegawai Yang Akan Mengikuti Pelatihan</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-14-V03 Pemrosesan SK Izin Belajar PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-15-V03 Pemrosesan Usulan SK Tugas Belajar PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-16-V07 Pemrosesan Usulan Pembuatan KARPEG, KARIS, KARSU, BPJS dan TASPEN</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-17-V03 Penyiapan Bahan Pengangkatan CPNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-18-V02 Penyusunan Rancangan Keputusan, Nota Kesepahaman dan Perjanjian Kerja Sama</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-19-V02 Penyusunan Bahan Pemberian Bantuan dan Layanan Hukum Terhadap Penyelesaian Kasus Hukum dan Hak Asasi Manusia</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-20-V06 Pemrosesan SK Kenaikan Gaji Berkala PNS</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HKT-21-V06 Pemrosesan Surat Rekomendasi Pindah Homebase Dosen Tetap Yayasan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                <h5><i class="bi bi-asterisk"></i> Layanan Perencanaan dan Penganggaran</h5> 
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-PP-01-V02 Penyusunan Rencana Program Unit Kerja</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-02-V08 Penyusunan RKA-KL</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-03-V02 Revisi Anggaran ke KPA</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-04-V02 Revisi Anggaran ke DJA-DJPB</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-05-V02 Pelaksanaan Kegiatan</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-06-V02 Pencairan Dana Melalui LS Bendahara (Non Kontraktual)</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-07-V02 Pencairan Dana Melalui LS Kontraktual</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-08-V02 Pencairan Dana Melalui LS Pihak Ketiga</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-09-V02 Pencairan Dana Melalui Ganti Uang Persediaan (GUP)</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-10-V09 Pencairan Dana Malalui Uang Persediaan (UP)</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-11-V02 Pencairan Dana Malalui Tambahan Uang Persediaan (TUP)</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-12-V07 Pembayaran Gaji Pegawai</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-13-V10 Pembayaran Tunjangan Sertifikasi Dosen, Uang Makan dan Uang Lembur</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-14-V02 Mekanisme Retur dana SPM dan SP2D</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-15-V02 Perpajakan Bagi Bendahara Pengeluaran dan Bendahara Pengeluaran Pembantu</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-16-V02 Pemenuhan Ganti Uang Nihil</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-17-V02 Pembuatan Surat Keterangan Penghentian Pembayaran (bagi dosen PNS dan Dosen yayasan)</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-18-V02 Pertanggungjawaban Kegiatan Swakelola</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-19-V07 Penyusunan Laporan Keuangan</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-20-V02 Penyusuan Laporan Kinerja</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-PP-21-V02 Pengumpulan Data Kinerja</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                <h5><i class="bi bi-asterisk"></i> Layanan Humas dan Hukum</h5> 
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-TU-4-V03 Penyusun Risalah Rapat Dinas</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-15-V08 Keprotokolan atau Upacara</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-18-V03 Penyiapan Bahan Publikasi</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-22-V03 Penyiapan Bahan Jawaban Atas Pemberitaan Media Massa</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HM-1-V01 Penyiapan Bahan Jawaban atas Pengaduan Melalui LAPOR</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-HM-2-V01 Pengaduan Pelayanan Publik</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                <h5><i class="bi bi-asterisk"></i> Layanan Tata Usaha dan Barang Milik Negara</h5> 
                            </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class=""><a class="text-danger" href="#">POS-TU-1-V09 Penerimaan, Pencatatan dan Pendistribusian Surat Masuk</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-2-V10 Penerimaan, Pencatatan dan Pendistribusian Surat Keluar</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-3-V03 Penggandaan Surat dan Dokumen</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-5-V05 Urusan Pencatatan, Penyimpanan, Penataan, Pemeliharaan dan Usul Penyusutan Arsip</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-6-V03 Pemberian Layanan Peminjaman Arsip</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-7-V07 Pengelolaan Keamanan Gedung</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-8-V07 Pemeliharaan Kebersihan</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-9-V03 Pemeliharaan Gedung Kantor dan Kendaraan Dinas</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-10-V02 Pemantauan dan Evaluasi Persuratan, Kearsipan, Kerumahtanggaan dan Pengelolaan BMN</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-11-V09 Pemeliharaan Sarana dan Prasarana Lainnya</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-12-V04 Pengaturan Penggunaan Gedung Kantor</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-13-V08 Pengaturan Penggunaan Kendaraan Dinas</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-14-V03 Pengaturan Penggunaan Peralatan Kantor</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-16-V07 Penerimaan Tamu</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-17-V08 Rapat Dinas</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-19-V02 Pengelolaan Sistem Informasi Manajemen Akuntansi BMN</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-20-V02 Rekonsiliasi Sistem Informasi Manajemen Akuntansi BMN</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-21-V02 Penyusunan Bahan Koordinasi Pengelolaan BMN</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-23-V08 Inventarisasi BMN</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-24-V03 Penyusunan Rencana Kebutuhan dan Pengadaan Barang dan Jasa</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-25-V03 Urusan Pengadaan Barang dan Jasa</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-26-V03 Penerimaan, Penyimpanan dan Pendistribusian BMN</a></li>
                                    <li class=""><a class="text-danger" href="#">POS-TU-27-V02 Penyusunan Usul Penghapusan BMN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Content End --}}

    </div>

@endsection

