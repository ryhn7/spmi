@extends('layouts.main')

@section('container')
    <div class="bg-green-700 border rounded-lg px-8 py-6 mx-auto mb-8 max-w-2xl md:flex-1 style="margin-top: 20px;"">
        <h2 class="text-2xl font-medium mb-4">Survey</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">1. Kejelasan Materi yang disampaikan oleh dosen</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">2. Ketepatan Waktu Pelaksanaan Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">3. Kelengkapan Referensi untuk Pembelajaran (Handout, Buku, Modul, PPT, dll)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">4. Kesesuaian Keahlian Dosen Mengajar sesuai Bidang Keahliannya</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">5. Kemampuan Staf Akademik untuk Melayani Administrasi Kemahasiswaan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">6. Kualitas Layanan Staf Akademik untuk Memenuhi Kepentingan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">7. Kejelasan Pedoman (Kurikulum dan Akademik)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">8. Kesediaan Dosen dan Karyawan memberikan Pelayanan setiap Waktu</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">9. Kecepatan Dosen dan Karyawan dalam Menanggapi Keluhan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">10. Kecepatan dalam memberikan Pelayanan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div>

        </form>
    </div>
@endsection
