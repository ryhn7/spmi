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
                        <label for="satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1a" name="satu" value="Sangat Baik" class="mr-2 ">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1b" name="satu" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1c" name="satu" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="1d" name="satu" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">2. Ketepatan Waktu Pelaksanaan Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2a" name="dua" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2b" name="dua" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2c" name="dua" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="2d" name="dua" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">3. Kelengkapan Referensi untuk Pembelajaran (Handout, Buku, Modul, PPT, dll)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3a" name="tiga" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3b" name="tiga" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3c" name="tiga" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="3d" name="tiga" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">4. Kesesuaian Keahlian Dosen Mengajar sesuai Bidang Keahliannya</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4a" name="empat" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4b" name="empat" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4c" name="empat" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="4d" name="empat" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">5. Kemampuan Staf Akademik untuk Melayani Administrasi Kemahasiswaan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5a" name="lima" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5b" name="lima" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5c" name="lima" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="5d" name="lima" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">6. Kualitas Layanan Staf Akademik untuk Memenuhi Kepentingan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6a" name="enam" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6b" name="enam" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6c" name="enam" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="6d" name="enam" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">7. Kejelasan Pedoman (Kurikulum dan Akademik)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7a" name="tujuh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7b" name="tujuh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7c" name="tujuh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="7d" name="tujuh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Daya Tanggap (Responsiveness)</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">8. Kesediaan Dosen dan Karyawan memberikan Pelayanan setiap Waktu</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8a" name="delapan" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8b" name="delapan" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8c" name="delapan" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="8d" name="delapan" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">9. Kecepatan Dosen dan Karyawan dalam Menanggapi Keluhan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9a" name="sembilan" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9b" name="sembilan" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9c" name="sembilan" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="9d" name="sembilan" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">10. Kecepatan dalam memberikan Pelayanan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sepuluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10a" name="sepuluh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sepuluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10b" name="sepuluh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sepuluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10c" name="sepuluh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sepuluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="10d" name="sepuluh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">11. Sikap Profesionalisme dalam memberikan Pelayanan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sebelas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="11a" name="sebelas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sebelas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="11b" name="sebelas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sebelas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="11c" name="sebelas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sebelas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="11d" name="sebelas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Kepastian (Assurance)</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">12. Permasalahan Akademik dikonsultasikan dan ditangani oleh Dosen Pembimbing Akademik</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="12a" name="dua_belas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="12b" name="dua_belas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="12c" name="dua_belas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="12d" name="dua_belas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">13. Keramahan dan Kesopanan Staf Akademik dalam Memberikan Pelayanan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="13a" name="tiga_belas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="13b" name="tiga_belas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="13c" name="tiga_belas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="13d" name="tiga_belas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">14. Transparansi dan Keterukuran Sistem Penilaian</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="14a" name="empat_belas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="14b" name="empat_belas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="14c" name="empat_belas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="14d" name="empat_belas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">15. Suasana Akademik</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="lima_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="15a" name="lima_belas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="15b" name="lima_belas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="15c" name="lima_belas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="lima_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="15d" name="lima_belas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">16. Penerapan Sanksi bagi Mahasiswa yang Melanggar Peraturan telah ditetapkan dan berlaku untuk Semua Mahasiswa Tanpa Terkecuali</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="enam_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="16a" name="enam_belas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="16b" name="enam_belas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="16c" name="enam_belas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="enam_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="16d" name="enam_belas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Empati (Empathy)</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">17. Kepedulian Dosen dan Staf dalam Memahami Kepentingan dan Kesulitan Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tujuh_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="17a" name="tujuh_belas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="17b" name="tujuh_belas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="17c" name="tujuh_belas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tujuh_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="17d" name="tujuh_belas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">18. Proses Monitoring terhadap Kemajuan Mahasiswa melalui Dosen Pembimbing Akademik</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="delapan_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="18a" name="delapan_belas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="18b" name="delapan_belas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="18c" name="delapan_belas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="delapan_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="18d" name="delapan_belas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">19. Kesediaan Dosen dalam Membantu Mahasiswa yang Mengalami Kesulitan Bidang Akademik/Mata Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sembilan_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="19a" name="sembilan_belas" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="19b" name="sembilan_belas" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="19c" name="sembilan_belas" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="sembilan_belas"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="19d" name="sembilan_belas" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">20. Fakultas/Prodi Berusaha Memahami Minat dan Bakat Mahasiswa dan Berusaha Mengembangkannya</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="20a" name="dua_puluh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="20b" name="dua_puluh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="20c" name="dua_puluh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="20d" name="dua_puluh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Tangible</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">21. Kerapian dan Kebersihan Ruang Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="21a" name="dua_satu" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="21b" name="dua_satu" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="21c" name="dua_satu" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="21d" name="dua_satu" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">22. Ketersediaan Ruang Kuliah/Laboratorium</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="22a" name="dua_dua" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="22b" name="dua_dua" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="22c" name="dua_dua" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="22d" name="dua_dua" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">23. Ketersediaan Sarana Pembelajaran di Ruang Kuliah (LCD, Papan Tulis, Kursi, Meja, dll)</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="23a" name="dua_tiga" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="23b" name="dua_tiga" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="23c" name="dua_tiga" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="23d" name="dua_tiga" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">24. Ketersediaan Buku Referensi yang ada di Perpustakaan/Ruang Baca</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="Sangat Baik" name="dua_empat" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="24b" name="dua_empat" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="24c" name="dua_empat" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="24d" name="dua_empat" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">25. Ketersediaan Fasilitas Ibadah, Kamar Kecil yang Rapi dan Bersih</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="25a" name="dua_lima" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="25b" name="dua_lima" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="25c" name="dua_lima" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="25d" name="dua_lima" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">26. Ketersediaan Tempat Parkir yang Luas</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="26a" name="dua_enam" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="26b" name="dua_enam" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="26c" name="dua_enam" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="26d" name="dua_enam" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Ketersediaan Layanan Mahasiswa  </label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">27. Ketersediaan Informasi Beasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="27a" name="dua_tujuh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="27b" name="dua_tujuh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="27c" name="dua_tujuh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="27d" name="dua_tujuh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">28. Ketersediaan Layanan Bimbingan Akademik</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="28a" name="dua_delapan" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="28b" name="dua_delapan" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="28c" name="dua_delapan" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="28d" name="dua_delapan" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">29. Ketersediaan Layanan Konsultasi untuk Orang Tua/Wali Mahasiswa</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="29a" name="dua_sembilan" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="29b" name="dua_sembilan" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="29c" name="dua_sembilan" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="dua_sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="29d" name="dua_sembilan" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">30. Ketersediaan Layanan Kesehatan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="30a" name="tiga_puluh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="30b" name="tiga_puluh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="30c" name="tiga_puluh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="30d" name="tiga_puluh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">31. Ketersediaan Layanan Asuransi untuk Mahasiswa yang terkena Musibah/Kecelakaan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="31a" name="tiga_satu" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="31b" name="tiga_satu" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="31c" name="tiga_satu" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="31d" name="tiga_satu" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Proses Belajar Mengajar</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">32. Penyampaian Kontrak Kuliah di Awal Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="32a" name="tiga_dua" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="32b" name="tiga_dua" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="32c" name="tiga_dua" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="32d" name="tiga_dua" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">33. Penyampaian Referensi yang diperlukan di Awal Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="33a" name="tiga_tiga" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="33b" name="tiga_tiga" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="33c" name="tiga_tiga" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="33d" name="tiga_tiga" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">34. Penyampaian Materi Kuliah Secara Sistematis</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="34a" name="tiga_empat" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="34b" name="tiga_empat" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="34c" name="tiga_empat" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="34d" name="tiga_empat" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">35. Proses Penilaian didiskusikan dengan Mahasiswa di Awal Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="35a" name="tiga_lima" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="Baik" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="35b" name="tiga_lima" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="35c" name="tiga_lima" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="35d" name="tiga_lima" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">36. Pemberian Ilustrasi Perkembangan Ilmu dan Teknologi serta Studi Kasus</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="36a" name="tiga_enam" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="36b" name="tiga_enam" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="36c" name="tiga_enam" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_enam"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="36d" name="tiga_enam" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">37. Kesempatan untuk Bertanya pada Saat Perkuliahan Berlangsung Maupun Akhir Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="37a" name="tiga_tujuh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="37b" name="tiga_tujuh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="37c" name="tiga_tujuh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_tujuh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="37d" name="tiga_tujuh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">38. Penggunakan Media Terkini Sesuai dengan Kebutuhan Materi Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="38a" name="tiga_delapan" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="38b" name="tiga_delapan" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="38c" name="tiga_delapan" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_delapan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="38d" name="tiga_delapan" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">39. Pemberian Tugas yang Relevan dengan Mata Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga_sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="39a" name="tiga_sembilan" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="39b" name="tiga_sembilan" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="39c" name="tiga_sembilan" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="tiga_sembilan"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="39d" name="tiga_sembilan" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">40. Penyampaian Pesan Moral, Etika dan Disiplin ketika Proses Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="40a" name="empat_puluh" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="40b" name="empat_puluh" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="40c" name="empat_puluh" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_puluh"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="40d" name="empat_puluh" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">41. Pelaksanaan Diskusi Kelompok</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="41a" name="empat_satu" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="41b" name="empat_satu" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="41c" name="empat_satu" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_satu"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="41d" name="empat_satu" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">42. Kesesuaian Materi Kuliah dengan Rencana Perkuliahan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="42a" name="empat_dua" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="42b" name="empat_dua" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="42c" name="empat_dua" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_dua"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="42d" name="empat_dua" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">43. Pemberian Softskill yang dapat Menunjang Proses Belajar Mengajar</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="43a" name="empat_tiga" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="43b" name="empat_tiga" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="43c" name="empat_tiga" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_tiga"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="43d" name="empat_tiga" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">44. Kesesuaian Soal Ujian dengan Materi Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="44a" name="empat_empat" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="44b" name="empat_empat" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="44c" name="empat_empat" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_empat"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="44d" name="empat_empat" value="Kurang" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);"">
                <label class="block text-gray-700 font-medium mb-2">45. Kesempatan untuk Melakukan Banding atas Nilai Akhir Mata Kuliah</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="45a" name="empat_lima" value="Sangat Baik" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="45b" name="empat_lima" value="Baik" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="45c" name="empat_lima" value="Cukup" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="empat_lima"  class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="45d" name="empat_lima" value="Kurang" class="mr-2">Kurang
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