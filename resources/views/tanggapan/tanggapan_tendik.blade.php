@extends('layouts.main')

@section('container')
    <section class="sectionSize bg-white">
        <div><br><br>
            <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Tenaga
                Pendidik</h2>
            @if (Auth::guard('tpmf')->check())
                <a href="/FeedbackTendik"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan TPMF</span>
                </a>
            @elseif (Auth::guard('dekan')->check() || Auth::guard('dekan')->check())
                <a href="/FeedbackTendik"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan Dekan</span>
                </a>
            @endif
            <br>
            <table class="shadow-lg bg-white">
                <tr>
                    <th class="bg-blue-100 border border-black text-center px-8 py-4">No.</th>
                    <th class="bg-blue-100 border border-black text-center px-8 py-4">Pernyataan</th>
                    <th class="bg-blue-100 border border-black text-center px-8 py-4">Tanggapan TPMF</th>
                    <th class="bg-blue-100 border border-black text-center px-8 py-4">Tanggapan Dekan</th>
                </tr>
                @for ($nomor = 1; $nomor <= 12; $nomor++)
                    <tr>
                        <td class="border px-8 py-4">{{ $nomor }}.</td>
                        <td class="border px-8 py-4">{{ $pernyataan->{$nomor} }}</td>
                        <td class="border px-8 py-4">{{ $feedbackTpmf->{$nomor} }}</td>
                        <td class="border px-8 py-4">{{ $feedbackDekan->{$nomor} }}</td>
                    </tr>
                @endfor
            </table>
        </div>
    </section>
@endsection
