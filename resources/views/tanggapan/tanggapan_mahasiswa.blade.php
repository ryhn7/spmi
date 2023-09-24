@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Mahasiswa</h2>
        <a href="/tanggapangpmmahasiswa" class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
            <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan GPM</span>
        </a> <br>
        <a href="/tanggapangpmmahasiswa" class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
            <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan Dekan</span>
        </a>        
        <br>
            <table class="shadow-lg bg-white">
            <tr>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">No.</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Pernyataan</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Tanggapan GPM</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Tanggapan Dekan</th>
            </tr>
            <tr>
                <td class="border px-8 py-4">1.</td>
                <td class="border px-8 py-4">Kejelasan Materi yang disampaikan oleh dosen</td>
                <td class="border px-8 py-4"> {{$feedback->{'1'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">2.</td>
                <td class="border px-8 py-4">Ketepatan Waktu Pelaksanaan Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedback->{'2'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">3.</td>
                <td class="border px-8 py-4">Kelengkapan Referensi untuk Pembelajaran (Handout, Buku, Modul, PPT, dll)</td>
                <td class="border px-8 py-4"> {{$feedback->{'3'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">4.</td>
                <td class="border px-8 py-4">Kesesuaian Keahlian Dosen Mengajar sesuai Bidang Keahliannya</td>
                <td class="border px-8 py-4"> {{$feedback->{'4'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">5.</td>
                <td class="border px-8 py-4">Kemampuan Staf Akademik untuk Melayani Administrasi Kemahasiswaan</td>
                <td class="border px-8 py-4"> {{$feedback->{'5'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">6.</td>
                <td class="border px-8 py-4">Kualitas Layanan Staf Akademik untuk Memenuhi Kepentingan Mahasiswa</td>
                <td class="border px-8 py-4"> {{$feedback->{'6'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">7.</td>
                <td class="border px-8 py-4">Kejelasan Pedoman (Kurikulum dan Akademik)</td>
                <td class="border px-8 py-4"> {{$feedback->{'7'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">8.</td>
                <td class="border px-8 py-4">Kesediaan Dosen dan Tenaga kependidikan memberikan Pelayanan setiap Waktu</td>
                <td class="border px-8 py-4"> {{$feedback->{'8'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">9.</td>
                <td class="border px-8 py-4">Kecepatan Dosen dan Tenaga kependidikan dalam Menanggapi Keluhan Mahasiswa</td>
                <td class="border px-8 py-4"> {{$feedback->{'9'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">10.</td>
                <td class="border px-8 py-4">Kecepatan dalam memberikan Pelayanan</td>
                <td class="border px-8 py-4"> {{$feedback->{'10'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">11.</td>
                <td class="border px-8 py-4">Sikap Profesionalisme dalam memberikan Pelayanan</td>
                <td class="border px-8 py-4"> {{$feedback->{'11'} }} </td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">12.</td>
                <td class="border px-8 py-4">Permasalahan Akademik dikonsultasikan dan ditangani oleh Dosen Pembimbing Akademik</td>
                <td class="border px-8 py-4"> {{$feedback->{'12'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">13.</td>
                <td class="border px-8 py-4">Keramahan dan Kesopanan Staf Akademik dalam Memberikan Pelayanan</td>
                <td class="border px-8 py-4"> {{$feedback->{'13'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">14.</td>
                <td class="border px-8 py-4">Transparansi dan Keterukuran Sistem Penilaian</td>
                <td class="border px-8 py-4"> {{$feedback->{'14'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">15.</td>
                <td class="border px-8 py-4">Suasana Akademik</td>
                <td class="border px-8 py-4"> {{$feedback->{'15'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">16.</td>
                <td class="border px-8 py-4">Penerapan Sanksi bagi Mahasiswa yang Melanggar Peraturan telah ditetapkan dan berlaku untuk Semua Mahasiswa Tanpa Terkecuali</td>
                <td class="border px-8 py-4"> {{$feedback->{'16'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">17.</td>
                <td class="border px-8 py-4">Kepedulian Dosen dan Staf dalam Memahami Kepentingan dan Kesulitan Mahasiswa</td>
                <td class="border px-8 py-4"> {{$feedback->{'17'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">18.</td>
                <td class="border px-8 py-4">Proses Monitoring terhadap Kemajuan Mahasiswa melalui Dosen Pembimbing Akademik</td>
                <td class="border px-8 py-4"> {{$feedback->{'18'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">19.</td>
                <td class="border px-8 py-4">Kesediaan Dosen dalam Membantu Mahasiswa yang Mengalami Kesulitan Bidang Akademik/Mata Kuliah</td>
                <td class="border px-8 py-4"> {{$feedback->{'19'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">20.</td>
                <td class="border px-8 py-4">Fakultas/Prodi Berusaha Memahami Minat dan Bakat Mahasiswa dan Berusaha Mengembangkannya</td>
                <td class="border px-8 py-4"> {{$feedback->{'20'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">21.</td>
                <td class="border px-8 py-4">Kerapian dan Kebersihan Ruang Kuliah</td>
                <td class="border px-8 py-4"> {{$feedback->{'21'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">22.</td>
                <td class="border px-8 py-4">Ketersediaan Ruang Kuliah/Laboratorium</td>
                <td class="border px-8 py-4"> {{$feedback->{'22'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">23.</td>
                <td class="border px-8 py-4">Ketersediaan Sarana Pembelajaran di Ruang Kuliah (LCD, Papan Tulis, Kursi, Meja, dll)</td>
                <td class="border px-8 py-4"> {{$feedback->{'23'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">24.</td>
                <td class="border px-8 py-4">Ketersediaan Buku Referensi yang ada di Perpustakaan/Ruang Baca</td>
                <td class="border px-8 py-4"> {{$feedback->{'24'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">25.</td>
                <td class="border px-8 py-4">Ketersediaan Fasilitas Ibadah, Kamar Kecil yang Rapi dan Bersih</td>
                <td class="border px-8 py-4"> {{$feedback->{'25'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">26.</td>
                <td class="border px-8 py-4">Ketersediaan Tempat Parkir yang Luas</td>
                <td class="border px-8 py-4"> {{$feedback->{'26'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">27.</td>
                <td class="border px-8 py-4">Ketersediaan Informasi Beasiswa</td>
                <td class="border px-8 py-4"> {{$feedback->{'27'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">28.</td>
                <td class="border px-8 py-4">Ketersediaan Layanan Bimbingan Akademik</td>
                <td class="border px-8 py-4"> {{$feedback->{'28'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">29.</td>
                <td class="border px-8 py-4">Ketersediaan Layanan Konsultasi untuk Orang Tua/Wali Mahasiswa</td>
                <td class="border px-8 py-4"> {{$feedback->{'29'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">30.</td>
                <td class="border px-8 py-4">Ketersediaan Layanan Kesehatan</td>
                <td class="border px-8 py-4"> {{$feedback->{'30'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">31.</td>
                <td class="border px-8 py-4">Ketersediaan Layanan Asuransi untuk Mahasiswa yang terkena Musibah/Kecelakaan</td>
                <td class="border px-8 py-4"> {{$feedback->{'31'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">32.</td>
                <td class="border px-8 py-4">Penyampaian Kontrak Kuliah di Awal Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedback->{'32'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">33.</td>
                <td class="border px-8 py-4">Penyampaian Referensi yang diperlukan di Awal Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedback->{'33'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">34.</td>
                <td class="border px-8 py-4">Penyampaian Materi Kuliah Secara Sistematis</td>
                <td class="border px-8 py-4"> {{$feedback->{'34'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">35.</td>
                <td class="border px-8 py-4">Proses Penilaian didiskusikan dengan Mahasiswa di Awal Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedback->{'35'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">36.</td>
                <td class="border px-8 py-4">Pemberian Ilustrasi Perkembangan Ilmu dan Teknologi serta Studi Kasus</td>
                <td class="border px-8 py-4"> {{$feedback->{'36'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">37.</td>
                <td class="border px-8 py-4">Kesempatan untuk Bertanya pada Saat Perkuliahan Berlangsung Maupun Akhir Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedback->{'37'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">38.</td>
                <td class="border px-8 py-4">Penggunakan Media Terkini Sesuai dengan Kebutuhan Materi Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedback->{'38'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">39.</td>
                <td class="border px-8 py-4">Pemberian Tugas yang Relevan dengan Mata Kuliah</td>
                <td class="border px-8 py-4"> {{$feedback->{'39'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">40.</td>
                <td class="border px-8 py-4">Penyampaian Pesan Moral, Etika dan Disiplin ketika Proses Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedback->{'40'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">41.</td>
                <td class="border px-8 py-4">Pelaksanaan Diskusi Kelompok</td>
                <td class="border px-8 py-4"> {{$feedback->{'41'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">42.</td>
                <td class="border px-8 py-4">Kesesuaian Materi Kuliah dengan Rencana Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedback->{'42'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">43.</td>
                <td class="border px-8 py-4">Pemberian Softskill yang dapat Menunjang Proses Belajar Mengajar</td>
                <td class="border px-8 py-4"> {{$feedback->{'43'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">44.</td>
                <td class="border px-8 py-4">Kesesuaian Soal Ujian dengan Materi Kuliah</td>
                <td class="border px-8 py-4"> {{$feedback->{'44'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">45.</td>
                <td class="border px-8 py-4">Kesempatan untuk Melakukan Banding atas Nilai Akhir Mata Kuliah</td>
                <td class="border px-8 py-4"> {{$feedback->{'45'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
        </table>
    </div>
</section>
@endsection
