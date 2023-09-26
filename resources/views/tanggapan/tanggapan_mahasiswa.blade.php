@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Mahasiswa</h2>
            @if (Auth::guard('gpm')->check())
                <a href="/FeedbackMahasiswa"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan GPM</span>
                </a>
            @elseif (Auth::guard('dekan')->check())
                <a href="/FeedbackMahasiswa"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan Dekan</span>
                </a>
            @endif        
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
                <td class="border px-8 py-4"> {{$feedbackGpm->{'1'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'1'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">2.</td>
                <td class="border px-8 py-4">Ketepatan Waktu Pelaksanaan Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'2'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'2'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">3.</td>
                <td class="border px-8 py-4">Kelengkapan Referensi untuk Pembelajaran (Handout, Buku, Modul, PPT, dll)</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'3'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'3'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">4.</td>
                <td class="border px-8 py-4">Kesesuaian Keahlian Dosen Mengajar sesuai Bidang Keahliannya</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'4'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'4'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">5.</td>
                <td class="border px-8 py-4">Kemampuan Staf Akademik untuk Melayani Administrasi Kemahasiswaan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'5'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'5'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">6.</td>
                <td class="border px-8 py-4">Kualitas Layanan Staf Akademik untuk Memenuhi Kepentingan Mahasiswa</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'6'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'6'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">7.</td>
                <td class="border px-8 py-4">Kejelasan Pedoman (Kurikulum dan Akademik)</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'7'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'7'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">8.</td>
                <td class="border px-8 py-4">Kesediaan Dosen dan Tenaga kependidikan memberikan Pelayanan setiap Waktu</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'8'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'8'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">9.</td>
                <td class="border px-8 py-4">Kecepatan Dosen dan Tenaga kependidikan dalam Menanggapi Keluhan Mahasiswa</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'9'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'9'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">10.</td>
                <td class="border px-8 py-4">Kecepatan dalam memberikan Pelayanan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'10'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'10'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">11.</td>
                <td class="border px-8 py-4">Sikap Profesionalisme dalam memberikan Pelayanan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'11'} }} </td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'11'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">12.</td>
                <td class="border px-8 py-4">Permasalahan Akademik dikonsultasikan dan ditangani oleh Dosen Pembimbing Akademik</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'12'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'12'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">13.</td>
                <td class="border px-8 py-4">Keramahan dan Kesopanan Staf Akademik dalam Memberikan Pelayanan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'13'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'13'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">14.</td>
                <td class="border px-8 py-4">Transparansi dan Keterukuran Sistem Penilaian</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'14'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'14'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">15.</td>
                <td class="border px-8 py-4">Suasana Akademik</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'15'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'15'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">16.</td>
                <td class="border px-8 py-4">Penerapan Sanksi bagi Mahasiswa yang Melanggar Peraturan telah ditetapkan dan berlaku untuk Semua Mahasiswa Tanpa Terkecuali</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'16'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'16'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">17.</td>
                <td class="border px-8 py-4">Kepedulian Dosen dan Staf dalam Memahami Kepentingan dan Kesulitan Mahasiswa</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'17'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'17'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">18.</td>
                <td class="border px-8 py-4">Proses Monitoring terhadap Kemajuan Mahasiswa melalui Dosen Pembimbing Akademik</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'18'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'18'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">19.</td>
                <td class="border px-8 py-4">Kesediaan Dosen dalam Membantu Mahasiswa yang Mengalami Kesulitan Bidang Akademik/Mata Kuliah</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'19'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'19'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">20.</td>
                <td class="border px-8 py-4">Fakultas/Prodi Berusaha Memahami Minat dan Bakat Mahasiswa dan Berusaha Mengembangkannya</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'20'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'20'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">21.</td>
                <td class="border px-8 py-4">Kerapian dan Kebersihan Ruang Kuliah</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'21'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'21'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">22.</td>
                <td class="border px-8 py-4">Ketersediaan Ruang Kuliah/Laboratorium</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'22'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'22'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">23.</td>
                <td class="border px-8 py-4">Ketersediaan Sarana Pembelajaran di Ruang Kuliah (LCD, Papan Tulis, Kursi, Meja, dll)</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'23'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'23'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">24.</td>
                <td class="border px-8 py-4">Ketersediaan Buku Referensi yang ada di Perpustakaan/Ruang Baca</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'24'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'24'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">25.</td>
                <td class="border px-8 py-4">Ketersediaan Fasilitas Ibadah, Kamar Kecil yang Rapi dan Bersih</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'25'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'25'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">26.</td>
                <td class="border px-8 py-4">Ketersediaan Tempat Parkir yang Luas</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'26'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'26'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">27.</td>
                <td class="border px-8 py-4">Ketersediaan Informasi Beasiswa</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'27'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'27'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">28.</td>
                <td class="border px-8 py-4">Ketersediaan Layanan Bimbingan Akademik</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'28'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'28'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">29.</td>
                <td class="border px-8 py-4">Ketersediaan Layanan Konsultasi untuk Orang Tua/Wali Mahasiswa</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'29'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'29'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">30.</td>
                <td class="border px-8 py-4">Ketersediaan Layanan Kesehatan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'30'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'30'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">31.</td>
                <td class="border px-8 py-4">Ketersediaan Layanan Asuransi untuk Mahasiswa yang terkena Musibah/Kecelakaan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'31'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'31'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">32.</td>
                <td class="border px-8 py-4">Penyampaian Kontrak Kuliah di Awal Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'32'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'32'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">33.</td>
                <td class="border px-8 py-4">Penyampaian Referensi yang diperlukan di Awal Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'33'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'33'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">34.</td>
                <td class="border px-8 py-4">Penyampaian Materi Kuliah Secara Sistematis</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'34'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'34'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">35.</td>
                <td class="border px-8 py-4">Proses Penilaian didiskusikan dengan Mahasiswa di Awal Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'35'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'35'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">36.</td>
                <td class="border px-8 py-4">Pemberian Ilustrasi Perkembangan Ilmu dan Teknologi serta Studi Kasus</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'36'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'36'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">37.</td>
                <td class="border px-8 py-4">Kesempatan untuk Bertanya pada Saat Perkuliahan Berlangsung Maupun Akhir Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'37'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'37'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">38.</td>
                <td class="border px-8 py-4">Penggunakan Media Terkini Sesuai dengan Kebutuhan Materi Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'38'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'38'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">39.</td>
                <td class="border px-8 py-4">Pemberian Tugas yang Relevan dengan Mata Kuliah</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'39'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'39'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">40.</td>
                <td class="border px-8 py-4">Penyampaian Pesan Moral, Etika dan Disiplin ketika Proses Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'40'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'40'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">41.</td>
                <td class="border px-8 py-4">Pelaksanaan Diskusi Kelompok</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'41'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'41'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">42.</td>
                <td class="border px-8 py-4">Kesesuaian Materi Kuliah dengan Rencana Perkuliahan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'42'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'42'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">43.</td>
                <td class="border px-8 py-4">Pemberian Softskill yang dapat Menunjang Proses Belajar Mengajar</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'43'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'43'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">44.</td>
                <td class="border px-8 py-4">Kesesuaian Soal Ujian dengan Materi Kuliah</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'44'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'44'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">45.</td>
                <td class="border px-8 py-4">Kesempatan untuk Melakukan Banding atas Nilai Akhir Mata Kuliah</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'45'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'45'} }}</td>
            </tr>
        </table>
    </div>
</section>
@endsection
