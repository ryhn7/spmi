@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%">Upaya Tindak Lanjut dan Perbaikan Hasil 
            Survei Kepuasan Mahasiswa Fakultas Sains dan Matematika</h2>
            <table class="shadow-lg bg-white">
            <tr>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">No.</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Pernyataan</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Upaya Tindak Lanjut</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Upaya Perbaikan</th>
            </tr>
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
