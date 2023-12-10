@extends('layouts.main')

@section('container')
    <div class="pt-32">
        <form action="/surveiMitra" method="POST">
            @csrf
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <p class="text-xl font-open font-bold">Identitas</p>
                        <label class="mt-3 ">Nama Lengkap:</label>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="nama" name="nama" value=""
                                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                        <label class="mt-3 ">Jabatan:</label>
                        <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="jabatan" name="jabatan" value=""
                                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                        <label class="mt-3 ">Nama Instansi/Perusahaan:</label>
                        <label for="nama_perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="nama_perusahaan" name="nama_perusahaan" value=""
                                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            @php
                $jumlahPertanyaan = 10; // jumlah pertanyaan
                $namaFor = ['satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh']; // id untuk setiap pertanyaan
                $nilaiOptions = ['Sangat Setuju', 'Setuju', 'Kurang Setuju', 'Tidak Setuju']; // option yang ada pada setiap pertanyaan
            @endphp

            @for ($i = 1; $i <= $jumlahPertanyaan; $i++)
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
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div> <br>

        </form>
    </div>
@endsection
