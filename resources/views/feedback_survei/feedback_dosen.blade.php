@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Upaya Tindak Lanjut dan Perbaikan Hasil 
            Survei Kepuasan Dosen Fakultas Sains dan Matematika</h2>
        <table class="shadow-lg bg-white">
            <tr>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">No.</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Pernyataan</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Upaya Tindak Lanjut</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Upaya Perbaikan</th>
            </tr>
            <tr>
                <td class="border px-8 py-4">1.</td>
                <td class="border px-8 py-4"> {{$feedback->{'1'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">2.</td>
                <td class="border px-8 py-4"> {{$feedback->{'2'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">3.</td>
                <td class="border px-8 py-4"> {{$feedback->{'3'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">4.</td>
                <td class="border px-8 py-4"> {{$feedback->{'4'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">5.</td>
                <td class="border px-8 py-4"> {{$feedback->{'5'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">6.</td>
                <td class="border px-8 py-4"> {{$feedback->{'6'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">7.</td>
                <td class="border px-8 py-4"> {{$feedback->{'7'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">8.</td>
                <td class="border px-8 py-4"> {{$feedback->{'8'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">9.</td>
                <td class="border px-8 py-4"> {{$feedback->{'9'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">10.</td>
                <td class="border px-8 py-4"> {{$feedback->{'10'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">11.</td>
                <td class="border px-8 py-4"> {{$feedback->{'11'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">12.</td>
                <td class="border px-8 py-4"> {{$feedback->{'12'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">13.</td>
                <td class="border px-8 py-4"> {{$feedback->{'13'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">14.</td>
                <td class="border px-8 py-4"> {{$feedback->{'14'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">15.</td>
                <td class="border px-8 py-4"> {{$feedback->{'15'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">16.</td>
                <td class="border px-8 py-4"> {{$feedback->{'16'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">17.</td>
                <td class="border px-8 py-4"> {{$feedback->{'17'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">18.</td>
                <td class="border px-8 py-4"> {{$feedback->{'18'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">19.</td>
                <td class="border px-8 py-4"> {{$feedback->{'19'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">20.</td>
                <td class="border px-8 py-4"> {{$feedback->{'20'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">21.</td>
                <td class="border px-8 py-4"> {{$feedback->{'21'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">22.</td>
                <td class="border px-8 py-4"> {{$feedback->{'22'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">23.</td>
                <td class="border px-8 py-4"> {{$feedback->{'23'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">24.</td>
                <td class="border px-8 py-4"> {{$feedback->{'24'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">25.</td>
                <td class="border px-8 py-4"> {{$feedback->{'25'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">26.</td>
                <td class="border px-8 py-4"> {{$feedback->{'26'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">27.</td>
                <td class="border px-8 py-4"> {{$feedback->{'27'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">28.</td>
                <td class="border px-8 py-4"> {{$feedback->{'28'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">29.</td>
                <td class="border px-8 py-4"> {{$feedback->{'29'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">30.</td>
                <td class="border px-8 py-4"> {{$feedback->{'30'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">31.</td>
                <td class="border px-8 py-4"> {{$feedback->{'31'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">32.</td>
                <td class="border px-8 py-4"> {{$feedback->{'32'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">33.</td>
                <td class="border px-8 py-4"> {{$feedback->{'33'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">34.</td>
                <td class="border px-8 py-4"> {{$feedback->{'34'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">35.</td>
                <td class="border px-8 py-4"> {{$feedback->{'35'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">36.</td>
                <td class="border px-8 py-4"> {{$feedback->{'36'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">37.</td>
                <td class="border px-8 py-4"> {{$feedback->{'37'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">38.</td>
                <td class="border px-8 py-4"> {{$feedback->{'38'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">39.</td>
                <td class="border px-8 py-4"> {{$feedback->{'39'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">40.</td>
                <td class="border px-8 py-4"> {{$feedback->{'40'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">41.</td>
                <td class="border px-8 py-4"> {{$feedback->{'41'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">42.</td>
                <td class="border px-8 py-4"> {{$feedback->{'42'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>

        </table>
    </div>
</section>
@endsection
