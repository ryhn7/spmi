@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Upaya Tindak Lanjut dan Perbaikan Hasil 
            Survei Kepuasan Tenaga Pendidik Fakultas Sains dan Matematika</h2>
            <table class="shadow-lg bg-white">
                @for ($nomor = 1; $nomor <= 42; $nomor++)
                    <tr>
                        <td class="border px-8 py-4 border border-black">{{ $nomor }}.</td>
                        <td class="border px-8 py-4 border border-black">{{ $pernyataan->{$nomor} }}</td>
                        <td class="border px-8 py-4 border border-black">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                        <td class="border px-8 py-4 border border-black">1. Mengadakan bimbingan terstruktur untuk mahasiswa yang membutuhkan pemahaman tambahan tentang materi.<br>
                            2. Menghimbau dosen pengampu mata kuliah untuk menanyakan kembali tentang kejelasan materi di setiap akhir perkuliahan.</td>
                    </tr>
                @endfor
            </table>
    </div>
</section>
@endsection
