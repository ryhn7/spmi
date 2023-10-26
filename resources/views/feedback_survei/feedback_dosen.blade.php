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
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Usulan Tindak Lanjut</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Upaya Perbaikan</th>
            </tr>
                @for ($nomor = 1; $nomor <= 42; $nomor++)
                    <tr>
                        <td class="border px-8 py-4 border border-black">{{ $nomor }}.</td>
                        <td class="border px-8 py-4 border border-black">{{ $pernyataan->{$nomor} }}</td>
                        <td class="border px-8 py-4 border border-black">{!!$feedbackTpmf->{$nomor}!!}</td>
                        <td class="border px-8 py-4 border border-black">{!!$feedbackDekan->{$nomor}!!}</td>
                    </tr>
                @endfor
        </table>
    </div>
</section>
@endsection
