@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Upaya Tindak Lanjut dan Perbaikan Hasil 
            Survei Kepuasan Pengguna Lulusan Fakultas Sains dan Matematika</h2>
            <table class="shadow-lg bg-white">
            <tr>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">No.</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Pernyataan</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Upaya Tindak Lanjut</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Upaya Perbaikan</th>
            </tr>
            <tr>
                <td class="border px-8 py-4">1.</td>
                <td class="border px-8 py-4">{{$feedback->{'1'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">2.</td>
                <td class="border px-8 py-4">{{$feedback->{'2'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">3.</td>
                <td class="border px-8 py-4">{{$feedback->{'3'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">4.</td>
                <td class="border px-8 py-4">{{$feedback->{'4'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">5.</td>
                <td class="border px-8 py-4">{{$feedback->{'5'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">6.</td>
                <td class="border px-8 py-4">{{$feedback->{'6'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">7.</td>
                <td class="border px-8 py-4">{{$feedback->{'7'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">8.</td>
                <td class="border px-8 py-4">{{$feedback->{'8'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">9.</td>
                <td class="border px-8 py-4">{{$feedback->{'9'} }}</td>
                <td class="border px-8 py-4">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                <td class="border px-8 py-4">1. Menyediakan materi perkuliahan yang lebih terstruktur dengan tujuan, tujuan pembelajaran, dan ringkasan materi yang jelas.<br>
                                            2. Memberikan contoh nyata dan aplikasi praktis dari materi yang disampaikan.</td>
            </tr>
        </table>
    </div>
</section>
@endsection
