@extends('layouts.main')
@section('container')
<div class="pt-32">
    <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1">
        <form action="/TanggapanGPMMitra" method="POST">
            @csrf
            <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait Layanan Pengembangan Kompetensi</label>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Fakultas Sains dan Matematika merespon dengan baik dalam usaha untuk menjalin/merintis kerjasama.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="satu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="satu" name="satu" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Proses pembuatan MoU dan Perjanjian Kerjasama sesuai dengan harapan.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="dua" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="dua" name="dua" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Fakultas Sains dan Matematika memberikan pendampingan terhadap kebutuhan kerjasama sesuai dengan harapan.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tiga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="tiga" name="tiga" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Kerjasama dengan Fakultas Sains dan Matematika berjalan sesuai dengan harapan.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="empat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="empat" name="empat" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Kami mendapatkan manfaat yang baik dalam menjalin kerjasama dengan Fakultas Sains dan Matematika.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="lima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="lima" name="lima" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Implementasi kerjasama sesuai dengan Perjanjian Kerjasama.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="enam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="enam" name="enam" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Pelaporan hasil kerjasama sesuai dengan kemufakatan dan aturan yang berlaku.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="tujuh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="tujuh" name="tujuh" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">Kami akan melanjutkan kerjasama pada tahun - tahun selanjutnya (sesuai kebutuhan).</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="delapan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="delapan" name="delapan" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">SDM yang ada di Fakultas Sains dan Matematika sesuai dengan keahlian yang diperlukan dalam kerjasama.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sembilan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="sembilan" name="sembilan" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">SDM dari Fakultas Sains dan Matematika bekerja dengan profesional.</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="sepuluh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <input type="text" id="sepuluh" name="sepuluh" value="" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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