@extends('layouts.main')
@section('container')
<div class="pt-32">
    <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1">
        <form action="/TanggapanTPMFTendik" method="POST">
            @csrf
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Layanan Pengembangan Kompetensi</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Fakultas Sains dan Matematika memfasilitasi kebutuhan untuk studi lanjut</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="satu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="satu" name="satu" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Dukungan pengembangan diri untuk mengikuti kursus/pelatihan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="dua" name="dua" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Dukungan pengembangan diri untuk mengikuti seminar/workshop</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="tiga" name="tiga" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Dukungan dan kesempatan untuk mengikuti studi banding dalam negeri</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="empat" name="empat" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Dukungan dan kesempatan untuk mengikuti studi banding luar negeri</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="lima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="lima" name="lima" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Mendapat informasi tentang jenjang karir</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="enam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="enam" name="enam" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Layanan yang diberikan Fakultas Sains dan Matematika tentang jenjang karir</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tujuh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="tujuh" name="tujuh" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Dukungan dan kesempatan untuk meningkatkan jenjang karir</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="delapan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="delapan" name="delapan" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Mendapatkan informasi tentang jabatan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sembilan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="sembilan" name="sembilan" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Layanan yang diberikan Fakultas Sains dan Matematika tentang jabatan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sepuluh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="sepuluh" name="sepuluh" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Layanan yang diberikan Fakultas Sains dan Matematika tentang jabatan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sebelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="sebelas" name="sebelas" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Layanan yang diberikan Fakultas Sains dan Matematika tentang jabatan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua_belas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="dua_belas" name="dua_belas" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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