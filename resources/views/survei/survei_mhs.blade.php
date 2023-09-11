@extends('layouts.main')

@section('container')
<div class="pt-32">
    <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1 ">
        <!-- <h2 class="text-2xl font-medium mb-4 ">Survei Kepuasan Mahasiswa</h2> -->
        <form>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Keandalan (Reliability)</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2  ">1. Kejelasan Materi yang disampaikan oleh dosen</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="1a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1a" name="color" value="a" class="mr-2 ">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="1b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="1c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="1d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">2. Ketepatan Waktu Pelaksanaan Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="2a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="2b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="2c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="2d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">3. Kelengkapan Referensi untuk Pembelajaran (Handout, Buku, Modul, PPT, dll)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="3a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="3b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="3c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="3d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">4. Kesesuaian Keahlian Dosen Mengajar sesuai Bidang Keahliannya</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="4a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="4b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="4c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="4d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">5. Kemampuan Staf Akademik untuk Melayani Administrasi Kemahasiswaan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="5a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="5b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="5c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="5d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">6. Kualitas Layanan Staf Akademik untuk Memenuhi Kepentingan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="6a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="6b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="6c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="6d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">7. Kejelasan Pedoman (Kurikulum dan Akademik)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="7a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="7b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="7c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="7d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Daya Tanggap (Responsiveness)</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">8. Kesediaan Dosen dan Karyawan memberikan Pelayanan setiap Waktu</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="8a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="8b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="8c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="8d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">9. Kecepatan Dosen dan Karyawan dalam Menanggapi Keluhan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="9a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="9b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="9c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="9d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">10. Kecepatan dalam memberikan Pelayanan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="10a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="10b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="10c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="10d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">11. Sikap Profesionalisme dalam memberikan Pelayanan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="11a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="11a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="11b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="11b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="11c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="11c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="11d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="11d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Kepastian (Assurance)</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">12. Permasalahan Akademik dikonsultasikan dan ditangani oleh Dosen Pembimbing Akademik</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="12a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="12a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="12b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="12b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="12c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="12c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="12d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="12d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">13. Keramahan dan Kesopanan Staf Akademik dalam Memberikan Pelayanan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="13a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="13a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="13b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="13b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="13c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="13c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="13d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="13d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">14. Transparansi dan Keterukuran Sistem Penilaian</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="14a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="14a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="14b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="14b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="14c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="14c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="14d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="14d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">15. Suasana Akademik</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="15a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="15a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="15b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="15b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="15c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="15c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="15d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="15d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">16. Penerapan Sanksi bagi Mahasiswa yang Melanggar Peraturan telah ditetapkan dan berlaku untuk Semua Mahasiswa Tanpa Terkecuali</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="16a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="16a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="16b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="16b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="16c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="16c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="16d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="16d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Empati (Empathy)</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">17. Kepedulian Dosen dan Staf dalam Memahami Kepentingan dan Kesulitan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="17a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="17a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="17b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="17b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="17c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="17c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="17d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="17d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">18. Proses Monitoring terhadap Kemajuan Mahasiswa melalui Dosen Pembimbing Akademik</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="18a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="18a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="18b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="18b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="18c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="18c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="18d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="18d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">19. Kesediaan Dosen dalam Membantu Mahasiswa yang Mengalami Kesulitan Bidang Akademik/Mata Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="19a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="19a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="19b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="19b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="19c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="19c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="19d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="19d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">20. Fakultas/Prodi Berusaha Memahami Minat dan Bakat Mahasiswa dan Berusaha Mengembangkannya</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="20a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="20a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="20b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="20b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="20c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="20c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="20d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="20d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Tangible</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">21. Kerapian dan Kebersihan Ruang Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="21a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="21a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="21b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="21b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="21c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="21c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="21d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="21d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">22. Ketersediaan Ruang Kuliah/Laboratorium</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="22a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="22a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="22b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="22b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="22c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="22c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="22d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="22d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">23. Ketersediaan Sarana Pembelajaran di Ruang Kuliah (LCD, Papan Tulis, Kursi, Meja, dll)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="23a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="23a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="23b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="23b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="23c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="23c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="23d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="23d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">24. Ketersediaan Buku Referensi yang ada di Perpustakaan/Ruang Baca</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="24a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="24b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="24b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="24c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="24c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="24d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="24d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">25. Ketersediaan Fasilitas Ibadah, Kamar Kecil yang Rapi dan Bersih</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="25a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="25a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="25b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="25b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="25c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="25c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="25d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="25d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">26. Ketersediaan Tempat Parkir yang Luas</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="26a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="26a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="26b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="26b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="26c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="26c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="26d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="26d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Ketersediaan Layanan Mahasiswa  </label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">27. Ketersediaan Informasi Beasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="27a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="27a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="27b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="27b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="27c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="27c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="27d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="27d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">28. Ketersediaan Layanan Bimbingan Akademik</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="28a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="28a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="28b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="28b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="28c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="28c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="28d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="28d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">29. Ketersediaan Layanan Konsultasi untuk Orang Tua/Wali Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="29a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="29a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="29b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="29b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="29c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="29c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="29d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="29d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">30. Ketersediaan Layanan Kesehatan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="30a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="30a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="30b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="30b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="30c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="30c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="30d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="30d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">31. Ketersediaan Layanan Asuransi untuk Mahasiswa yang terkena Musibah/Kecelakaan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="31a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="31a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="31b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="31b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="31c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="31c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="31d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="31d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Proses Belajar Mengajar</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">32. Penyampaian Kontrak Kuliah di Awal Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="32a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="32a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="32b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="32b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="32c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="32c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="32d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="32d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">33. Penyampaian Referensi yang diperlukan di Awal Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="33a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="33a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="33b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="33b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="33c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="33c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="33d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="33d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">34. Penyampaian Materi Kuliah Secara Sistematis</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="34a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="34a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="34b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="34b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="34c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="34c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="34d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="34d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">35. Proses Penilaian didiskusikan dengan Mahasiswa di Awal Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="35a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="35a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="35b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="35c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="35c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="35d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="35d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">36. Pemberian Ilustrasi Perkembangan Ilmu dan Teknologi serta Studi Kasus</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="36a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="36a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="36b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="36b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="36c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="36c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="36d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="36d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">37. Kesempatan untuk Bertanya pada Saat Perkuliahan Berlangsung Maupun Akhir Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="37a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="37a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="37b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="37b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="37c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="37c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="37d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="37d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">38. Penggunakan Media Terkini Sesuai dengan Kebutuhan Materi Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="38a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="38a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="38b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="38b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="38c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="38c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="38d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="38d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">39. Pemberian Tugas yang Relevan dengan Mata Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="39a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="39a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="39b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="39b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="39c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="39c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="39d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="39d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">40. Penyampaian Pesan Moral, Etika dan Disiplin ketika Proses Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="40a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="40a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="40b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="40b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="40c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="40c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="40d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="40d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">41. Pelaksanaan Diskusi Kelompok</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="41a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="41a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="41b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="41b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="41c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="41c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="41d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="41d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">42. Kesesuaian Materi Kuliah dengan Rencana Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="42a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="42a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="42b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="42b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="42c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="42c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="42d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="42d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">43. Pemberian Softskill yang dapat Menunjang Proses Belajar Mengajar</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="43a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="43a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="43b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="43b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="43c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="43c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="43d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="43d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">44. Kesesuaian Soal Ujian dengan Materi Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="44a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="44a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="44b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="44b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="44c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="44c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="44d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="44d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">45. Kesempatan untuk Melakukan Banding atas Nilai Akhir Mata Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="45a" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="45a" name="color" value="a" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="45b" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="45b" name="color" value="b" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="45c" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="45c" name="color" value="c" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="45d" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="45d" name="color" value="d" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>


            <div class="flex justify-center items-center">
                <button type="submit" class="bg-b-500 text-white px-4 py-2 rounded-lg hover:bg-b-600">Submit</button>
            </div>

        </form>
    </div>
</div>

@endsection