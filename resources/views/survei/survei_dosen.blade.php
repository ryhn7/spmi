@extends('layouts.main')

@section('container')
    @if ($surveys->count() == 0)
        <div class="pt-32">
            <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1">
                <form action="/surveiDsn" method="POST">
                    @csrf
                    <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait
                        Pengelolaan Sumber Daya Manusia</label>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">1. Ketegasan pimpinan dalam melaksanakan sistem
                            pengelolaan SDM</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="1a" name="satu" value="Sangat Baik"
                                        class="mr-2 ">Sangat Baik
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
                        <label class="block text-gray-700 font-medium mb-2">2. Sistem rekrutmen dosen yang dilakukan
                            Fakultas Sains dan Matematika</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="2a" name="dua" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
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
                        <label class="block text-gray-700 font-medium mb-2">3. Sistem seleksi dosen yang dilaksanakan di
                            Fakultas Sains dan Matematika</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="3a" name="tiga" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="3b" name="tiga" value="Baik" class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="3c" name="tiga" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="3d" name="tiga" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">4. Penempatan dosen di Fakultas Sains dan
                            Matematika</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="4a" name="empat" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="4b" name="empat" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="4c" name="empat" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="4d" name="empat" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait
                        Layanan Pengembangan Kompetensi</label>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">5. Fakultas Sains dan Matematika memfasilitasi
                            kebutuhan untuk studi lanjut</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="5a" name="lima" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="5b" name="lima" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="5c" name="lima" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="5d" name="lima" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">6. Dukungan pengembangan diri untuk mengikuti
                            kursus/pelatihan</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="6a" name="enam" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="6b" name="enam" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="6c" name="enam" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="6d" name="enam" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">7. Dukungan pengembangan diri untuk mengikuti
                            seminar/workshop</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="7a" name="tujuh" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="7b" name="tujuh" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="7c" name="tujuh" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="7d" name="tujuh" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">8. Dukungan dan kesempatan untuk mengikuti
                            studi banding dalam negeri</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="8a" name="delapan" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="8b" name="delapan" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="8c" name="delapan" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="8d" name="delapan" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">9. Dukungan dan kesempatan untuk mengikuti
                            studi banding luar negeri</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="9a" name="sembilan" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="9b" name="sembilan" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="9c" name="sembilan" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="9d" name="sembilan" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait
                        Layanan Pengembangan Karir/Jabatan</label>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">10. Mendapat informasi tentang jenjang
                            karir</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="10a" name="sepuluh" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="10b" name="sepuluh" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="10c" name="sepuluh" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="10d" name="sepuluh" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">11. Layanan yang diberikan Fakultas Sains dan
                            Matematika tentang jenjang karir</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="sebelas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="11a" name="sebelas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sebelas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="11b" name="sebelas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sebelas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="11c" name="sebelas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sebelas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="11d" name="sebelas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">12. Dukungan dan kesempatan untuk meningkatkan
                            jenjang karir</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="12a" name="dua_belas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="12b" name="dua_belas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="12c" name="dua_belas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="12d" name="dua_belas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">13. Mendapatkan informasi tentang
                            jabatan</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="13a" name="tiga_belas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="13b" name="tiga_belas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="13c" name="tiga_belas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="13d" name="tiga_belas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">14. Layanan yang diberikan Fakultas Sains dan
                            Matematika tentang jabatan</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="empat_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="14a" name="empat_belas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="14b" name="empat_belas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="14c" name="empat_belas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="14d" name="empat_belas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">15. Dukungan dan kesempatan untuk peningkatan
                            jabatan struktural</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="lima_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="15a" name="lima_belas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="lima_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="15b" name="lima_belas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="lima_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="15c" name="lima_belas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="lima_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="15d" name="lima_belas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">16. Dukungan dan kesempatan untuk peningkatan
                            jabatan non struktural</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="enam_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="16a" name="enam_belas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="enam_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="16b" name="enam_belas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="enam_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="16c" name="enam_belas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="enam_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="16d" name="enam_belas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait
                        Layanan Penelitian dan Karya Ilmiah</label>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">17. Fasilitas memperoleh informasi tentang
                            kegiatan penelitian</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tujuh_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="17a" name="tujuh_belas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tujuh_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="17b" name="tujuh_belas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tujuh_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="17c" name="tujuh_belas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tujuh_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="17d" name="tujuh_belas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">18. Fasilitas memperoleh pelayanan untuk
                            melakukan kegiatan penelitian</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="delapan_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="18a" name="delapan_belas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="delapan_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="18b" name="delapan_belas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="delapan_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="18c" name="delapan_belas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="delapan_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="18d" name="delapan_belas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">19. Ketersediaan sarana dan prasarana pendukung
                            kegiatan penelitian</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="sembilan_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="19a" name="sembilan_belas" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sembilan_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="19b" name="sembilan_belas" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sembilan_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="19c" name="sembilan_belas" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="sembilan_belas" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="19d" name="sembilan_belas" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">20. Penilaian proposal penelitian dari
                            reviewer</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="20a" name="dua_puluh" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="20b" name="dua_puluh" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="20c" name="dua_puluh" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="20d" name="dua_puluh" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">21. Pemerataan penelitian berdasarkan
                            distribusi dosen</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="21a" name="dua_satu" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="21b" name="dua_satu" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="21c" name="dua_satu" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="21d" name="dua_satu" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">22. Pemerataan penelitian berdasarkan
                            kualifikasi dosen</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="22a" name="dua_dua" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="22b" name="dua_dua" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="22c" name="dua_dua" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="22d" name="dua_dua" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">23. Fasilitas bimbingan penyusunan proposal
                            penelitian dan laporan akhir</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="23a" name="dua_tiga" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="23b" name="dua_tiga" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="23c" name="dua_tiga" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="23d" name="dua_tiga" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">24. Kesempatan menjadi reviewer
                            penelitian</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="Sangat Baik" name="dua_empat" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="24b" name="dua_empat" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="24c" name="dua_empat" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="24d" name="dua_empat" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">25. ketersediaan informasi jurnal terakreditasi
                            sebagai media publikasi karya ilmiah</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="25a" name="dua_lima" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="25b" name="dua_lima" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="25c" name="dua_lima" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="25d" name="dua_lima" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait
                        Layanan Pengabdian kepada Masyarakat</label>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">26. Fasilitas memperoleh informasi tentang
                            kegiatan PkM</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="26a" name="dua_enam" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="26b" name="dua_enam" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="26c" name="dua_enam" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="26d" name="dua_enam" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">27. Fasilitas memperoleh pelayanan untuk
                            melakukan kegiatan PkM</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="27a" name="dua_tujuh" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="27b" name="dua_tujuh" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="27c" name="dua_tujuh" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="27d" name="dua_tujuh" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">28. Ketersediaan sarana dan prasarana pendukung
                            kegiatan PkM</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="28a" name="dua_delapan" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="28b" name="dua_delapan" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="28c" name="dua_delapan" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="28d" name="dua_delapan" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">29. Penilaian proposal PkM dari
                            reviewer</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="dua_sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="29a" name="dua_sembilan" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="29b" name="dua_sembilan" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="29c" name="dua_sembilan" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="dua_sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="29d" name="dua_sembilan" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">30. Pemerataan PkM berdasarkan distribusi
                            dosen</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="30a" name="tiga_puluh" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="30b" name="tiga_puluh" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="30c" name="tiga_puluh" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="30d" name="tiga_puluh" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">31. Pemerataan PkM berdasarkan kualifikasi
                            dosen</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="31a" name="tiga_satu" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="31b" name="tiga_satu" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="31c" name="tiga_satu" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="31d" name="tiga_satu" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">32. Fasilitas bimbingan penyusunan proposal
                            PkM dan laporan akhir</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="32a" name="tiga_dua" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="32b" name="tiga_dua" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="32c" name="tiga_dua" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="32d" name="tiga_dua" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan
                        Terkait Layanan Keuangan, Sarana dan Prasarana</label>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">33. Perencanaan anggaran keuangan disusun
                            berdasar pada RKAT sesuai dengan program dalam renstra dan renop</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="33a" name="tiga_tiga" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="33b" name="tiga_tiga" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="33c" name="tiga_tiga" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_tiga" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="33d" name="tiga_tiga" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">34. Keterlibatan dalam menyusun RKAT</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="34a" name="tiga_empat" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="34b" name="tiga_empat" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="34c" name="tiga_empat" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_empat" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="34d" name="tiga_empat" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">35. Alokasi anggaran sesuai dengan perencanaan
                            keuangan untuk kegiatan tridharma perguruan tinggi</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="35a" name="tiga_lima" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="Baik" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="35b" name="tiga_lima" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="35c" name="tiga_lima" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_lima" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="35d" name="tiga_lima" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">36. Realisasi anggaran dengan program kerja
                            prodi atau universitas untuk kegiatan tridharma perguruan tinggi</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="36a" name="tiga_enam" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="36b" name="tiga_enam" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="36c" name="tiga_enam" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_enam" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="36d" name="tiga_enam" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">37. Penggunaan anggaran dipertanggungjawabkan
                            secara transparan</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="37a" name="tiga_tujuh" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="37b" name="tiga_tujuh" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="37c" name="tiga_tujuh" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_tujuh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="37d" name="tiga_tujuh" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">38. Informasi penggunaan dan pelaporan dana
                            dilakukan secara transparan</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="38a" name="tiga_delapan" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="38b" name="tiga_delapan" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="38c" name="tiga_delapan" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_delapan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="38d" name="tiga_delapan" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">39. Tersedianya sarana dan prasarana
                            pendidikan</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="tiga_sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="39a" name="tiga_sembilan" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="39b" name="tiga_sembilan" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="39c" name="tiga_sembilan" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="tiga_sembilan" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="39d" name="tiga_sembilan" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">40. Tersedianya sarana dan prasarana
                            penelitian</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="empat_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="40a" name="empat_puluh" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="40b" name="empat_puluh" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="40c" name="empat_puluh" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_puluh" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="40d" name="empat_puluh" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">41. Tersedianya sarana dan prasarana
                            PkM</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="empat_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="41a" name="empat_satu" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="41b" name="empat_satu" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="41c" name="empat_satu" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_satu" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="41d" name="empat_satu" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        <label class="block text-gray-700 font-medium mb-2">42. Tersedianya fasilitas untuk mendukung
                            luaran dosen dalam bentuk Jurnal dan Prosiding</label>
                        <div class="flex flex-wrap -mx-2 ">
                            <div class="px-2 w-1/4">
                                <label for="empat_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="42a" name="empat_dua" value="Sangat Baik"
                                        class="mr-2">Sangat Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="42b" name="empat_dua" value="Baik"
                                        class="mr-2">Baik
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="42c" name="empat_dua" value="Cukup"
                                        class="mr-2">Cukup
                                </label>
                            </div>
                            <div class="px-2 w-1/4">
                                <label for="empat_dua" class="block text-gray-700 font-medium mb-2">
                                    <input type="radio" id="42d" name="empat_dua" value="Kurang"
                                        class="mr-2">Kurang
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="flex justify-center items-center">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
                    </div>

                </form>
            </div>
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
