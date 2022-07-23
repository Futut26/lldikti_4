<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::Create([

            'title' => 'Pemberitahuan untuk Pemutakhiran Data pada SINTA',
            'slug' => 'pemberitahuan-untuk-pemutakhiran-data-pada-sinta',
            'body' => 'Yth.<br>
                        <ol>
                            <li>Pimpinan Perguruan Tinggi</li>
                            <li>Kepala Lembaga Layanan Pendidikan Tinggi Wilayah I s.d. XVI</li>
                            <li>Ketua LP/LPM/LPPM Perguruan Tinggi</li>
                        </ol>
                        di lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi<br>
                        Sehubungan dengan akan dilaksanakannya klasterisasi perguruan tinggi berbasis kinerja penelitian dan pengabdian kepada masyarakat, serta rekrutmen reviewer penelitian dan pengabdian kepada masyarakat, dengan ini kami sampaikan beberapa hal sebagai berikut:<br>
                        <ol>
                            <li>Ketua LP/LPM/LPPM Perguruan Tinggi dimohon untuk memutakhirkan data pada SINTA yang meliputi:
                                <ol style="list-style-type: lower-alpha; padding-bottom: 0;">
                                    <li style="margin-left:2em">Data Penelitian;</li>
                                    <li style="margin-left:2em; padding-bottom: 0;">Data Pengabdian kepada Masyarakat</li>
                                </ol>
                            </li>
                            <li>Second
                                <ol style="list-style-type: lower-alpha; padding-bottom: 0;">
                                    <li style="margin-left:2em">Scopus ID, Publons ID, dan Garuda ID untuk selanjutnya melakukan sinkronisasi secara mandiri;</li>
                                    <li style="margin-left:2em; padding-bottom: 0;">Data Kekayaan Intelektual;</li>
                                    <li style="margin-left:2em; padding-bottom: 0;">Produk dan Prototipe;</li>
                                    <li style="margin-left:2em; padding-bottom: 0;">Revenue Generating (Hasil Kekayaan Intelektual, Produk, dan Prototipe);</li>
                                    <li style="margin-left:2em; padding-bottom: 0;">Buku.</li>
                                </ol>
                            </li>
                            <li>Ketua LP/LPM/LPPM Perguruan Tinggi dapat mengajukan surat permohonan akun verifikator SINTA melalui tautan: <a href="http://ringkas.kemdikbud.go.id/verifikatorlppm">http://ringkas.kemdikbud.go.id/verifikatorlppm</a></li>
                            <li>Panduan pemutakhiran data pada SINTA dapat diunduh melalui tautan: <a href="http://ringkas.kemdikbud.go.id/PemutakhiranSINTA">http://ringkas.kemdikbud.go.id/PemutakhiranSINTA</a></li>
                            <li>Pemutakhiran data pada SINTA dapat dilakukan hingga 20 Agustus 2022.</li>
                        </ol>
                        Demikian kami sampaikan untuk dapat ditindaklanjuti. Atas perhatian dan kerja sama yang baik, kami ucapkan terima kasih.',
            'file' => 'Surat-Pemutakhiran-SINTA-ok.pdf',
            'gambar' => 'blog.jpg',
            'published_at' => '2022-07-20 23:58:55'
        ]);

        Post::Create([

            'title' => 'Pendaftaran Magang Bersertifikat',
            'slug' => 'pendaftaran-magang-bersertifikat',
            'body' => 'Yth.<br>
            Pimpinan Perguruan Tinggi<br>
            Di Lingkungan Lembaga Layanan Pendidikan Tinggi Wilayah IV Sehubungan dengan telah dibukanya pendaftaran Program Magang dan Studi Independen Bersertifikat (MSIB) Angkatan 3 di Kemendikbudristek, perlu kami informasikan bahwa LLDIKTI Wilayah IV memberikan kesempatan dan membuka pendaftaran bagi mahasiswa atau mahasiswi untuk mengikuti program tersebut.<br>
            Berkenaan dengan hal tersebut di atas, kami mengajak mahasiswa atau mahasiswi di Perguruan Tinggi Saudara yang berminat untuk mengikuti program tersebut, agar melakukan pendaftaran pada laman https://kampusmerdeka.kemdikbud.go.id. Pendaftaran akan dibuka mulai tanggal 12 Juli sampai dengan 17 Juli 2022, dan pelaksanaan magang rencana akan dimulai tanggal 31 Juli sampai dengan 31 Desember 2022.<br>
            Untuk kuota penerimaan mahasiswa magang, kami menerima sebanyak 50 orang mahasiswa, terdiri dari 20 mahasiswa akan ditempatkan di kantor LLDIKTI Wilayah IV, dan 30 mahasiswa ditempatkan sebagai Liaison Officer di Pemerintah Daerah Kabupaten/Kota se-Jawa Barat dan Banten.<br>
            Demikian yang dapat kami sampaikan, atas perhatian dan kerjasama yang baik, kami ucapkan terima
            kasih.<br>
            Kepala Lembaga Layanan Pendidikan Tinggi Wilayah IV,<br>
            M. Samsuri<br>
            NIP 197901142003121001',
            'file' => 'TTE-Surat-Edaran-MSIB.pdf',
            'gambar' => 'blog.jpg',
            'published_at' => '2022-07-20 14:09:44'
        ]);

        Post::Create([

            'title' => 'Pembukaan Laman BKD LLDIKTI IV (1-15 Juli 2022)',
            'slug' => 'pembukaan-laman-bkd-LLDIKTI-IV',
            'body' => 'Yth.<br>
            Berdasarkan hasil evaluasi pengisian BKD/LKD periode lalu, masih terdapat BKD/LKD yang belum
            memenuhi syarat atau yang belum mengisi sama sekali.<br>
            Dengan ini kami beri kesempatan untuk
            melakukan perbaikan atau mengisi/melengkapi BKD/LKD tersebut pada laman
            https://bkd.lldikti4.or.id, mulai tanggal 1 Juli – 15 Juli 2022.<br>
            Pada periode ini dosen dapat melakukan
            pengisian BKD Semester Genap Tahun 2021/2022 dan BKD/LKD Semester Gasal 2021/2022. Perlu
            kami sampaikan di luar tanggal tersebut laman https://bkd.lldikti4.or.id ditutup.
            Selain itu, kami ingatkan kembali bagi dosen berjabatan Lektor Kepala dan Profesor, harap mengisi
            kewajiban khusus Lektor Kepala dan Profesor sesuai Permenristekdikti Nomor 20 Tahun 2017 pada
            menu “Kewajiban Khusus LK/GB” sesuai dengan masa jabatan masing-masing.<br>
            Apabila sampai dengan batas waktu yang telah ditentukan tidak melakukan pengisian BKD/LKD
            tersebut, maka pembayaran tunjangan profesinya tidak akan kami proses.
            Atas perhatian dan kerja sama Saudara, kami ucapkan terima kasih.',
            'file' => 'pembukaan-web-bkd-1-15-juli-2022.pdf',
            'gambar' => 'blog.jpg',
            'published_at' => '2022-07-09 05:57:44'
        ]);

        Post::Create([

            'title' => 'Pengumuman Pemberitahuan Kegiatan Bakti Sosial',
            'slug' => 'Pengumuman-Pemberitahuan-Kegiatan-Bakti-Sosial',
            'body' => 'Yth. Pimpinan Perguruan Tinggi<br>
            Pada Lembaga Layanan Pendidikan Tinggi Wilayah IV<br>
            Menyambung surat kami nomor 1479/LL4/KM.05.03/2022 tanggal 16 Juni 2022 perihal pengumuman/pemberitahuan kegiatan Gebyar LLDIKTI 4 dengan ini kami sampaikan bahwa LLDIKTI Wilayah IV juga akan mengadakan kegiatan Bakti Sosial berupa Khitanan Massal dan Santunan Anak Yatim, adapun ketentuan pelaksanaan kegiatan sebagai berikut:<br>
            <ol>
                <li>Untuk kegiatan Bakti Sosial berupa Khitanan Massal dibuka dengan kuota jumlah pendaftar maksimal 50 orang.</li>
                <li>Pendaftaran Khitanan Massal dibuka mulai tanggal 5 Juli s.d 5 Agustus 2022.</li>
                <li>Pendaftaran Khitanan Massal melalui link https://s.id/khitanan-massal-lldikti4 atau dapat menghubungi Sdri. Rani Rahmayani di nomor Telp/WA 085624220686.</li>
                <li>Untuk pendaftaran Khitanan Massal TIDAK DIKENAKAN BIAYA/GRATIS.</li>
                <li>Rencana pelaksanaan Khitanan Massal tanggal 16 Agustus 2022 mulai pukul 08.00 s.d Selesai.</li>
                <li>Lokasi Pelaksanaan Khitanan Massal di Gedung Diklat LLDIKTI Wilayah IV, Jl. Raya Jatinangor KM. 20 Sumedang.</li>
                <li>Untuk kegiatan Bakti Sosial berupa Santunan Anak Yatim, Saudara dapat memberikan donasi melalui Rekening Bank Mandiri Nomor 1310019053984 a.n Gina Indriani (Panitia LLDIKTI Wilayah IV).</li>
                <li>Untuk yang akan memberikan donasi Santunan Anak Yatim, agar mencantumkan informasi/keterangan Donasi Santunan pada saat melakukan transfer.</li>
                <li>Batas akhir pemberian donasi Santunan Anak Yatim sampai dengan tanggal 12 Agustus 2022.</li>
                <li>Pemberian donasi Santunan Anak Yatim akan diberikan tanggal 16 Agustus 2022, pada puncak acara Gebyar LLDIKTI 4.</li>
            </ol>
            Sehubungan hal tersebut di atas, kami juga meminta Saudara agar dapat menyebarluaskan informasi terkait dengan Khitanan Massal kepada masyarakat sekitar kampus serta menyebarluaskan informasi melalui web maupun media sosial PT yang Saudara miliki.<br>
            Atas perhatian dan kerjasamanya Saudara, kami ucapkan terima kasih.',
            'file' => 'Surat_Bakti_Sosial.pdf',
            'gambar' => 'blog.jpg',
            'published_at' => '2022-07-05 19:45:44'
        ]);

        Post::Create([

            'title' => 'Sosialisasi Jaminan Sosial Ketenagakerjaan Sesi 1',
            'slug' => 'Sosialisasi-Jaminan-Sosial-Ketenagakerjaan-Sesi-1',
            'body' => 'Dalam upaya melaksanakan Surat Edaran Mendikbudristek nomor 8 tahun 2021 tentang Peningkatan Kepatuhan Dan Kepesertaan Program Jaminan Sosial Ketenagakerjaan Pada Satuan Pendidikan Formal Dan Nonformal, LLDIKTI Wilayah IV bersama dengan BPJS Ketenagakerjaan Bekasi menyelenggarakan kegiatan Sosialisasi Jaminan Sosial Ketenagakerjaan Sesi 1 Wilayah Bekasi, Jumat, 17 Juni 2022 secara daring menggunakan aplikasi Zoom Cloud Meeting. Kegiatan ini dihadiri oleh Dr. M. Samsuri, S.Pd., M.T. selaku kepala LLDIKTI Wilayah IV dan Herry Subroto selaku Kepala Cabang BPJS Ketenagakerjaan Bekasi.<br>
            Acara ini mengundang seluruh perguruan tinggi swasta yang berada di wilayah Bekasi. Narasumber yang hadir adalah Kepala Bidang Kepersertaan Korporasi dan Institusi BPJS Ketenagakerjaan Bekasi yang menyampaikan materi mengenai implementasi kebijakan kampus merdeka-merdeka belajar dengan BPJS bidang Ketenagakerjaan.<br>
            Samsuri hadir membuka kegiatan secara langsung. Kegiatan ini dilaksanakan sebagai bentuk tindaklanjut penandatanganan nota kesepahaman antara LLDIKTI Wilayah IV dengan BPJS Ketenagakerjaan Provinsi Jawa Barat.',
            'gambar' => 'blog.jpg',
            'published_at' => '2022-06-22 17:31:44'
        ]);

    }
}
