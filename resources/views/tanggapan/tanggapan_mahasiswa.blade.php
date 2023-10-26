@extends('layouts.main')

@section('container')
    <section class="sectionSize bg-white">
        <div><br><br>
            <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Mahasiswa
            </h2>
            @if (Auth::guard('gpm')->check())
                <a href="/FeedbackMahasiswa"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan GPM</span>
                </a>
            @elseif (Auth::guard('dekan')->check() || Auth::guard('wadek')->check())
                <a href="/FeedbackMahasiswa"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan Dekan</span>
                </a>
            @endif
            <br>
            <table class="shadow-lg bg-white">
                <tr>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 5%;">No.</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Pernyataan</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Tanggapan GPM</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Tanggapan Dekan</th>
                </tr>
                @for ($nomor = 1; $nomor <= 42; $nomor++)
                    <tr>
                        <td class="border border-black text-center mt-2">{{ $nomor }}.</td>
                        <td class="border-b border-black px-3 py-3">{{ $pernyataan->{$nomor} }}</td>
                        <td class="border-b border-black px-3 py-3">{{ $feedbackGpm->{$nomor} }}</td>
                        <td class="border-b border-r border-black px-3 py-3">{!!$feedbackDekan->{$nomor}!!}</td>
                    </tr>
                @endfor
            </table>
        </div>
    </section>
@endsection
