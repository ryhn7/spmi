@extends('layouts.main')

@section('container')
<div class="pt-32">
    <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1">
        <form>
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Pengelolaan Sumber Daya Manusia</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">1. Ketegasan pimpinan dalam melaksanakan sistem pengelolaan SDM</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">2. Sistem rekrutmen dosen yang dilakukan Fakultas Sains dan Matematika</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">3. Sistem seleksi dosen yang dilaksanakan di Fakultas Sains dan Matematika</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">4. Penempatan dosen di Fakultas Sains dan Matematika</label>
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
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Layanan Pengembangan Kompetensi</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">5. Fakultas Sains dan Matematika memfasilitasi kebutuhan untuk studi lanjut</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">6. Dukungan pengembangan diri untuk mengikuti kursus/pelatihan</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">7. Dukungan pengembangan diri untuk mengikuti seminar/workshop</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">8. Dukungan dan kesempatan untuk mengikuti studi banding dalam negeri</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">9. Dukungan dan kesempatan untuk mengikuti studi banding luar negeri</label>
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
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Layanan Pengembangan Karir/Jabatan</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">10. Mendapat informasi tentang jenjang karir</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">11. Layanan yang diberikan Fakultas Sains dan Matematika tentang jenjang karir</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">12. Dukungan dan kesempatan untuk meningkatkan jenjang karir</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">13. Mendapatkan informasi tentang jabatan</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">14. Layanan yang diberikan Fakultas Sains dan Matematika tentang jabatan</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">15. Dukungan dan kesempatan untuk peningkatan jabatan struktural</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">16. Dukungan dan kesempatan untuk peningkatan jabatan non struktural</label>
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
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Layanan Penelitian dan Karya Ilmiah</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">17. Fasilitas memperoleh informasi tentang kegiatan penelitian</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">18. Fasilitas memperoleh pelayanan untuk melakukan kegiatan penelitian</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">19. Ketersediaan sarana dan prasarana pendukung kegiatan penelitian</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">20. Penilaian proposal penelitian dari reviewer</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">21. Pemerataan penelitian berdasarkan distribusi dosen</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">22. Pemerataan penelitian berdasarkan kualifikasi dosen</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">23. Fasilitas bimbingan penyusunan proposal penelitian dan laporan akhir</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">24. Kesempatan menjadi reviewer penelitian</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">25. ketersediaan informasi jurnal terakreditasi sebagai media publikasi karya ilmiah</label>
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
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Layanan Pengabdian kepada Masyarakat</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">26. Fasilitas memperoleh informasi tentang kegiatan PkM</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">27. Fasilitas memperoleh pelayanan untuk melakukan kegiatan PkM</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">28. Ketersediaan sarana dan prasarana pendukung kegiatan PkM</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">29. Penilaian proposal PkM dari reviewer</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">30. Pemerataan PkM berdasarkan distribusi dosen</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">31. Pemerataan PkM berdasarkan kualifikasi dosen</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">32. Fasilitas bimbingan penyusunan proposal PkM dan laporan akhir</label>
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
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Layanan Keuangan, Sarana dan Prasarana</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">33. Perencanaan anggaran keuangan disusun berdasar pada RKAT sesuai dengan program dalam renstra dan renop</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">34. Keterlibatan dalam menyusun RKAT</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">35. Alokasi anggaran sesuai dengan perencanaan keuangan untuk kegiatan tridharma perguruan tinggi</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">36. Realisasi anggaran dengan program kerja prodi atau universitas untuk kegiatan tridharma perguruan tinggi</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">37. Penggunaan anggaran dipertanggungjawabkan secara transparan</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">38. Informasi penggunaan dan pelaporan dana dilakukan secara transparan</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">39. Tersedianya sarana dan prasarana pendidikan</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">40. Tersedianya sarana dan prasarana penelitian</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">41. Tersedianya sarana dan prasarana PkM</label>
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
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">42. Tersedianya fasilitas untuk mendukung luaran dosen dalam bentuk Jurnal dan Prosiding</label>
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


            <div class="flex justify-center items-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div>

        </form>
    </div>
</div>

@endsection