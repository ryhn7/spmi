@extends('layouts.main')

@section('container')
<div class="pt-32">
    <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1">
        <form action="/surveiMitra" method="POST">
            @csrf
            <label class="block text-gray-700 font-medium mb-2">Nama:</label>
            <div class="flex flex-wrap -mx-2 ">
                <div class="px-2 w-1/4">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        <input type="text" id="nama" name="nama" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </label>
                </div>
            </div>
            <label class="block text-gray-700 font-medium mb-2">Jabatan:</label>
            <div class="flex flex-wrap -mx-2 ">
                <div class="px-2 w-1/4">
                    <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        <input type="text" id="jabatan" name="jabatan" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </label>
                </div>
            </div>
            <label class="block text-gray-700 font-medium mb-2">Nama Instansi/Perusahaan:</label>
            <div class="flex flex-wrap -mx-2 ">
                <div class="px-2 w-1/4">
                    <label for="nama_perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        <input type="text" id="nama_perusahaan" name="nama_perusahaan" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </label>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">1. Kejelasan Materi yang disampaikan oleh dosen</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="satu" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1a" name="satu" value="Sangat Baik" class="mr-2 ">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="satu" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1b" name="satu" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="satu" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1c" name="satu" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="satu" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1d" name="satu" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">2. Ketepatan Waktu Pelaksanaan Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2a" name="dua" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2b" name="dua" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2c" name="dua" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2d" name="dua" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">3. Kelengkapan Referensi untuk Pembelajaran (Handout, Buku, Modul, PPT, dll)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3a" name="tiga" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3b" name="tiga" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3c" name="tiga" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3d" name="tiga" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">4. Kesesuaian Keahlian Dosen Mengajar sesuai Bidang Keahliannya</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4a" name="empat" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4b" name="empat" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4c" name="empat" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4d" name="empat" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">5. Kemampuan Staf Akademik untuk Melayani Administrasi Kemahasiswaan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="lima" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5a" name="lima" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5b" name="lima" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5c" name="lima" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5d" name="lima" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">6. Kualitas Layanan Staf Akademik untuk Memenuhi Kepentingan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="enam" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6a" name="enam" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6b" name="enam" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6c" name="enam" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6d" name="enam" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">7. Kejelasan Pedoman (Kurikulum dan Akademik)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7a" name="tujuh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7b" name="tujuh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7c" name="tujuh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7d" name="tujuh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">8. Kesediaan Dosen dan Karyawan memberikan Pelayanan setiap Waktu</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="delapan" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8a" name="delapan" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8b" name="delapan" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8c" name="delapan" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8d" name="delapan" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">9. Kecepatan Dosen dan Karyawan dalam Menanggapi Keluhan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9a" name="sembilan" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9b" name="sembilan" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9c" name="sembilan" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9d" name="sembilan" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">10. Kecepatan dalam memberikan Pelayanan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10a" name="sepuluh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10b" name="sepuluh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10c" name="sepuluh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10d" name="sepuluh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div>

        </form>
    </div>
</div>

@endsection