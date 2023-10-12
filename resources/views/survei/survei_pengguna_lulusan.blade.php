@extends('layouts.main')

@section('container')
    <div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    </div>
    <div class="pt-32">
        {{-- <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1"> --}}
        <form action="/surveiPenggunaLulusan" method="POST">
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
                        <label class="mt-3">Program Studi:</label>
                        <label for="program_studi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <select name="program_studi" id="program_studi"
                                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Program Studi Alumni</option>
                                @foreach ($mahasiswas->pluck('program_studi')->unique()->sort() as $programStudi)
                                    <option value="{{ $programStudi }}">
                                        {{ $programStudi }}
                                    </option>
                                @endforeach
                            </select>
                        </label>
                        <label class="mt-3 ">Alumni:</label>
                        <label for="alumni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <select name="alumni" id="alumni" required
                                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" class="">Pilih Nama Alumni</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 1</p>
                    <p class="mt-3">{{ $pernyataan->{'1'} }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="satu" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="1a" name="satu" value="Sangat Baik"
                                    class="mr-2 ">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="satu" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="1b" name="satu" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="satu" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="1c" name="satu" value="Cukup" class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="satu" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="1d" name="satu" value="Kurang" class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 2</p>
                    <p class="mt-3">{{ $pernyataan->{'2'} }}</p>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="dua" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="2a" name="dua" value="Sangat Baik"
                                    class="mr-2">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="dua" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="2b" name="dua" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="dua" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="2c" name="dua" value="Cukup" class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="dua" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="2d" name="dua" value="Kurang"
                                    class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 3</p>
                    <p class="mt-3">{{ $pernyataan->{'3'} }}</p>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="tiga" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="3a" name="tiga" value="Sangat Baik"
                                    class="mr-2">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="tiga" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="3b" name="tiga" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="tiga" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="3c" name="tiga" value="Cukup" class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="tiga" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="3d" name="tiga" value="Kurang"
                                    class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 4</p>
                    <p class="mt-3">{{ $pernyataan->{'4'} }}</p>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="empat" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="4a" name="empat" value="Sangat Baik"
                                    class="mr-2">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="empat" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="4b" name="empat" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="empat" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="4c" name="empat" value="Cukup" class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="empat" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="4d" name="empat" value="Kurang"
                                    class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 5</p>
                    <p class="mt-3">{{ $pernyataan->{'5'} }}</p>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="lima" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="5a" name="lima" value="Sangat Baik"
                                    class="mr-2">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="lima" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="5b" name="lima" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="lima" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="5c" name="lima" value="Cukup" class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="lima" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="5d" name="lima" value="Kurang"
                                    class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 6</p>
                    <p class="mt-3">{{ $pernyataan->{'6'} }}</p>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="enam" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="6a" name="enam" value="Sangat Baik"
                                    class="mr-2">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="enam" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="6b" name="enam" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="enam" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="6c" name="enam" value="Cukup" class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="enam" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="6d" name="enam" value="Kurang"
                                    class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 7</p>
                    <p class="mt-3">{{ $pernyataan->{'7'} }}</p>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="7a" name="tujuh" value="Sangat Baik"
                                    class="mr-2">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="7b" name="tujuh" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="7c" name="tujuh" value="Cukup" class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="7d" name="tujuh" value="Kurang"
                                    class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 8</p>
                    <p class="mt-3">{{ $pernyataan->{'8'} }}</p>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="8a" name="delapan" value="Sangat Baik"
                                    class="mr-2">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="8b" name="delapan" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="8c" name="delapan" value="Cukup" class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="8d" name="delapan" value="Kurang"
                                    class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <p class="text-xl font-open font-bold">Pertanyaan 9</p>
                    <p class="mt-3">{{ $pernyataan->{'9'} }}</p>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div class="px-2">
                            <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="9a" name="sembilan" value="Sangat Baik"
                                    class="mr-2">Sangat Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="9b" name="sembilan" value="Baik" class="mr-2">Baik
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="9c" name="sembilan" value="Cukup"
                                    class="mr-2">Cukup
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                <input type="radio" id="9d" name="sembilan" value="Kurang"
                                    class="mr-2">Kurang
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div><br>

        </form>
        {{-- </div> --}}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika Program Studi berubah
            $('#program_studi').on('change', function() {
                var selectedProgramStudi = $(this).val();

                // Kirim permintaan Ajax untuk mendapatkan nama-nama mahasiswa berdasarkan Program Studi
                $.ajax({
                    url: '/get-mahasiswas', // Ganti dengan URL yang sesuai di Controller Anda
                    method: 'GET',
                    data: {
                        program_studi: selectedProgramStudi
                    },
                    success: function(data) {
                        // Hapus opsi sebelumnya dan tambahkan yang baru
                        $('#alumni').empty().append(
                            '<option value="">Pilih Nama Alumni</option>');
                        $.each(data, function(key, value) {
                            $('#alumni').append('<option value="' + value + '">' +
                                value + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
