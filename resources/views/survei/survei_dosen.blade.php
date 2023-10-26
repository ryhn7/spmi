@extends('layouts.main')

@section('container')
    @if ($surveys === null)
        <div class="pt-32">
            {{-- <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1"> --}}
            <form action="/surveiDsn" method="POST">
                @csrf
                @php
                    $jumlahPertanyaan = 42; // jumlah pertanyaan
                    $namaFor = ['satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas', 'dua_belas', 'tiga_belas', 'empat_belas', 'lima_belas', 'enam_belas', 'tujuh_belas', 'delapan_belas', 'sembilan_belas', 'dua_puluh', 'dua_satu', 'dua_dua', 'dua_tiga', 'dua_empat', 'dua_lima', 'dua_enam', 'dua_tujuh', 'dua_delapan', 'dua_sembilan', 'tiga_puluh', 'tiga_satu', 'tiga_dua', 'tiga_tiga', 'tiga_empat', 'tiga_lima', 'tiga_enam', 'tiga_tujuh', 'tiga_delapan', 'tiga_sembilan', 'empat_puluh', 'empat_satu', 'empat_dua']; // id untuk setiap pertanyaan
                    $nilaiOptions = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang']; // option yang ada pada setiap pertanyaan
                    $sections = [
                        1 => 'Survei Kepuasan Terkait Pengelolaan Sumber Daya Manusia',
                        5 => 'Survei Kepuasan Terkait Layanan Pengembangan Kompetensi',
                        10 => 'Survei Kepuasan Terkait Layanan Pengembangan Karir/Jabatan',
                        17 => 'Survei Kepuasan Terkait Layanan Penelitian dan Karya Ilmiah',
                        26 => 'Survei Kepuasan Terkait Layanan Pengabdian kepada Masyarakat',
                        33 => 'Survei Kepuasan Terkait Layanan Keuangan, Sarana dan Prasarana',
                    ]; // buat awal setiap section yang ada
                @endphp

                @for ($i = 1; $i <= $jumlahPertanyaan; $i++)
                    @if (array_key_exists($i, $sections))
                        <div class="flex justify-center items-center">
                            <p class="text-xl font-open font-bold">{{ $sections[$i] }}</p>
                        </div>
                    @endif
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan {{ $i }}</p>
                            <label class="mt-3">{{ $pernyataan->{$i} }}</label>
                            <!-- SVG Anda -->
                            <div class="mt-3 flex flex-col justify-between space-y-1">
                                @foreach ($nilaiOptions as $index => $nilai)
                                    @php
                                        $id = $i . chr(97 + $index);
                                    @endphp
                                    <div class="px-2">
                                        <label for="{{ $namaFor[$i - 1] }}" class="block text-gray-700 font-medium mb-2">
                                            <input type="radio" id="{{ $id }}" name="{{ $namaFor[$i - 1] }}"
                                                value="{{ $nilai }}" class="mr-2"
                                                {{ old($namaFor[$i - 1]) == $nilai ? 'checked' : '' }}>{{ $nilai }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            @error($namaFor[$i - 1])
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </div>
                    </div>
                @endfor
                <div class="flex justify-center items-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
                </div><br>
            </form>
            {{-- </div> --}}
        </div>
    @else
        <div class="py-10">
            <div class="w-full h-[400px] mt-12" id="animation">
                <script>
                    var animation = bodymovin.loadAnimation({
                        container: document.getElementById('animation'),
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: 'https://lottie.host/450b670c-ee72-4d53-8c39-be871402010d/htFSYpbi6D.json'
                    })
                </script>
            </div>
            <div class="w-full mt-5">
                <div class="flex justify-center">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold mb-2">Terima kasih telah mengisi survei ini!</h1>
                        <p class="text-gray-500">Feedback Anda sangat berharga bagi kami.</p>

                        <a class="inline-block mt-5 px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-[#060764] to-[#00b7dd] hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                            href="javascript:history.back()">&nbsp;&nbsp;Kembali&nbsp;&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
