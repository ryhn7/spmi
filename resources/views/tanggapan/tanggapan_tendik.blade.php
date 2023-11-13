@extends('layouts.main')

@section('container')
    <section class="sectionSize bg-white">
        <div><br><br>
            <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Tenaga
                Pendidik</h2>
            @if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check())
                @if ($feedbackDekan->toArray() != null)
                    <a href="{{ route('tanggapantendik.edit', ['aktor' => $roleAktor]) }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Edit tanggapan</span>
                    </a>
                @else
                    <a href="/Feedbacktendik"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan</span>
                    </a>
                @endif
            @elseif(Auth::guard('tpmf')->check() && $ketua)
                @if ($feedbackTpmf->toArray() != null)
                    <a href="{{ route('tanggapantendik.edit', ['aktor' => $roleAktor]) }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Edit tanggapan</span>
                    </a>
                @else
                    <a href="/Feedbacktendik"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan</span>
                    </a>
                @endif
            @endif
            <br>
            <table class="shadow-lg bg-white">
                <tr>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 5%;">No.</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Pernyataan</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Tanggapan TPMF</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Tanggapan Dekan</th>
                </tr>
                @for ($nomor = 1; $nomor <= 12; $nomor++)
                    <tr>
                        <td class="border border-black text-center mt-2">{{ $nomor }}.</td>
                        <td class="border-b border-black px-3 py-3">{{ $pernyataan->{$nomor} }}</td>
                        <td class="border-b border-black px-3 py-3">{!! $feedbackTpmf->{$nomor} !!}</td>
                        <td class="border-b border-r border-black px-3 py-3">{!! $feedbackDekan->{$nomor} !!}</td>
                    </tr>
                @endfor
            </table>
        </div>
    </section>
@endsection
