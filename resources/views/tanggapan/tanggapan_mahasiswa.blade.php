@extends('layouts.main')

@section('container')
    <section class="sectionSize bg-white">
        <div><br><br>
            <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Mahasiswa
            </h2>
            @if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check())
                @if ($feedbackDekan->toArray() != null)
                    <a href="{{ route('tanggapanmahasiswa.edit', ['aktor' => $roleAktor]) }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Edit tanggapan</span>
                    </a>
                @else
                    <a href="/FeedbackMahasiswa"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan</span>
                    </a>
                @endif
            @elseif(Auth::guard('kaprodi')->check())
                @if ($feedbackKaprodi->toArray() != null)
                    <a href="{{ route('tanggapanmahasiswa.edit', ['aktor' => $roleAktor]) }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Edit tanggapan</span>
                    </a>
                @else
                    <a href="/FeedbackMahasiswa"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan</span>
                    </a>
                @endif
            @elseif(Auth::guard('gpm')->check() && $ketua)
                @if ($feedbackGpm->toArray() != null)
                    <a href="{{ route('tanggapanmahasiswa.edit', ['aktor' => $roleAktor]) }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Edit tanggapan</span>
                    </a>
                @else
                    <a href="/FeedbackMahasiswa"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan</span>
                    </a>
                @endif
            @endif
            <br>
            <table class="shadow-lg bg-white">
                <tr>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 5%;">No.</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 20%;">Pernyataan</th>
                    @if (Auth::guard('gpm')->check() || (Auth::guard('wadek')->check() || Auth::guard('kaprodi')->check()))
                        <th class="bg-[#03051e] text-white text-center py-3" style="width: 25%;">Tanggapan GPM</th>
                    @endif
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 25%;">Tanggapan Kaprodi</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 25%;">Tanggapan Dekan</th>
                </tr>
                @for ($nomor = 1; $nomor <= 45; $nomor++)
                    <tr>
                        <td class="border border-black text-center mt-2">{{ $nomor }}.</td>
                        <td class="border-b border-black px-3 py-3">{{ $pernyataan->{$nomor} }}</td>
                        @if (Auth::guard('gpm')->check() || (Auth::guard('wadek')->check() || Auth::guard('kaprodi')->check()))
                            <td class="border-b border-black px-3 py-3">{!! $feedbackGpm->{$nomor} !!}</td>
                        @endif
                        <td class="border-b border-black px-3 py-3">{!! $feedbackKaprodi->{$nomor} !!}</td>
                        <td class="border-b border-r border-black px-3 py-3">{!! $feedbackDekan->{$nomor} !!}</td>
                    </tr>
                @endfor
            </table>
        </div>
    </section>
@endsection
