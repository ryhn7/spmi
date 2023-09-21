@extends('layouts.main')

@section('container')
    @if ($surveys === null)
        <div class="pt-32">
            <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1 ">
                <form action="/surveiMhs" method="POST">
                    @csrf
                    <div class="flex justify-center items-center">
                        <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                            Keandalan (Reliability)</p>
                    </div>

                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 1</p>
                            <label class="mt-3">Kejelasan Materi yang disampaikan oleh
                                dosen</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
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
                            <label class="mt-3">Ketepatan Waktu Pelaksanaan
                                Perkuliahan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
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
                                        <input type="radio" id="2d" name="dua" value="Kurang" class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 3</p>
                            <label class="mt-3">Kelengkapan Referensi untuk Pembelajaran
                                (Handout, Buku, Modul, PPT, dll)</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
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
                                        <input type="radio" id="3c" name="tiga" value="Cukup"
                                            class="mr-2">Cukup
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
                            <label class="mt-3">Kesesuaian Keahlian Dosen Mengajar sesuai
                                Bidang
                                Keahliannya</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="4a" name="empat" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="4b" name="empat" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="4c" name="empat" value="Cukup"
                                            class="mr-2">Cukup
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
                            <label class="mt-3">Kemampuan Staf Akademik untuk Melayani
                                Administrasi Kemahasiswaan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="5a" name="lima" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="5b" name="lima" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="5c" name="lima" value="Cukup"
                                            class="mr-2">Cukup
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
                            <label class="mt-3">Kualitas Layanan Staf Akademik untuk
                                Memenuhi
                                Kepentingan Mahasiswa</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="6a" name="enam" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="6b" name="enam" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="6c" name="enam" value="Cukup"
                                            class="mr-2">Cukup
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
                            <label class="mt-3">Kejelasan Pedoman (Kurikulum dan
                                Akademik)</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="7a" name="tujuh" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="7b" name="tujuh" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="7c" name="tujuh" value="Cukup"
                                            class="mr-2">Cukup
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
                        <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                            Daya Tanggap (Responsiveness)</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 8</p>
                            <label class="mt-3">Kesediaan Dosen dan Karyawan memberikan
                                Pelayanan setiap Waktu</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="8a" name="delapan" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="8b" name="delapan" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="8c" name="delapan" value="Cukup"
                                            class="mr-2">Cukup
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
                            <label class="mt-3">Kecepatan Dosen dan Karyawan dalam
                                Menanggapi
                                Keluhan Mahasiswa</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="9a" name="sembilan" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="9b" name="sembilan" value="Baik"
                                            class="mr-2">Baik
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
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 10</p>
                            <label class="mt-3">Kecepatan dalam memberikan
                                Pelayanan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="10a" name="sepuluh" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="10b" name="sepuluh" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="10c" name="sepuluh" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sepuluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="10d" name="sepuluh" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 11</p>
                            <label class="mt-3">Sikap Profesionalisme dalam memberikan
                                Pelayanan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="sebelas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="11a" name="sebelas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sebelas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="11b" name="sebelas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sebelas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="11c" name="sebelas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sebelas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="11d" name="sebelas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label class="block text-2xl font-medium mb-2 flex justify-center items-center">Survei Kepuasan Terkait
                        Kepastian (Assurance)</label>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 12</p>
                            <label class="mt-3">Permasalahan Akademik dikonsultasikan dan
                                ditangani oleh Dosen Pembimbing Akademik</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="12a" name="dua_belas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="12b" name="dua_belas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="12c" name="dua_belas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="12d" name="dua_belas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 13</p>
                            <label class="mt-3">Keramahan dan Kesopanan Staf Akademik dalam
                                Memberikan Pelayanan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="13a" name="tiga_belas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="13b" name="tiga_belas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="13c" name="tiga_belas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="13d" name="tiga_belas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 14</p>
                            <label class="mt-3">Transparansi dan Keterukuran Sistem
                                Penilaian</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="empat_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="14a" name="empat_belas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="14b" name="empat_belas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="14c" name="empat_belas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="14d" name="empat_belas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 15</p>
                            <label class="mt-3">Suasana Akademik</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="lima_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="15a" name="lima_belas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="lima_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="15b" name="lima_belas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="lima_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="15c" name="lima_belas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="lima_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="15d" name="lima_belas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 16</p>
                            <label class="mt-3">Penerapan Sanksi bagi Mahasiswa yang
                                Melanggar
                                Peraturan telah ditetapkan dan berlaku untuk Semua Mahasiswa Tanpa Terkecuali</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="enam_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="16a" name="enam_belas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="enam_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="16b" name="enam_belas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="enam_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="16c" name="enam_belas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="enam_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="16d" name="enam_belas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                            Empati (Empathy)</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 17</p>
                            <label class="mt-3">Kepedulian Dosen dan Staf dalam Memahami
                                Kepentingan dan Kesulitan Mahasiswa</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tujuh_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="17a" name="tujuh_belas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tujuh_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="17b" name="tujuh_belas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tujuh_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="17c" name="tujuh_belas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tujuh_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="17d" name="tujuh_belas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 18</p>
                            <label class="mt-3">Proses Monitoring terhadap Kemajuan
                                Mahasiswa
                                melalui Dosen Pembimbing Akademik</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="delapan_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="18a" name="delapan_belas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="delapan_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="18b" name="delapan_belas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="delapan_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="18c" name="delapan_belas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="delapan_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="18d" name="delapan_belas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 19</p>
                            <label class="mt-3">Kesediaan Dosen dalam Membantu Mahasiswa
                                yang
                                Mengalami Kesulitan Bidang Akademik/Mata Kuliah</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="sembilan_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="19a" name="sembilan_belas" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sembilan_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="19b" name="sembilan_belas" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sembilan_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="19c" name="sembilan_belas" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="sembilan_belas" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="19d" name="sembilan_belas" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 20</p>
                            <label class="mt-3">20. Fakultas/Prodi Berusaha Memahami Minat dan
                                Bakat Mahasiswa dan Berusaha Mengembangkannya</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="20a" name="dua_puluh" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="20b" name="dua_puluh" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="20c" name="dua_puluh" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="20d" name="dua_puluh" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                            Tangible</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 21</p>
                            <label class="mt-3">Kerapian dan Kebersihan Ruang
                                Kuliah</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="21a" name="dua_satu" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="21b" name="dua_satu" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="21c" name="dua_satu" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="21d" name="dua_satu" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 22</p>
                            <label class="mt-3">Ketersediaan Ruang
                                Kuliah/Laboratorium</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="22a" name="dua_dua" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="22b" name="dua_dua" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="22c" name="dua_dua" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="22d" name="dua_dua" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 23</p>
                            <label class="mt-3">Ketersediaan Sarana Pembelajaran di Ruang
                                Kuliah (LCD, Papan Tulis, Kursi, Meja, dll)</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="23a" name="dua_tiga" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="23b" name="dua_tiga" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="23c" name="dua_tiga" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="23d" name="dua_tiga" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 24</p>
                            <label class="mt-3">Ketersediaan Buku Referensi yang ada di
                                Perpustakaan/Ruang Baca</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="Sangat Baik" name="dua_empat" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="24b" name="dua_empat" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="24c" name="dua_empat" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="24d" name="dua_empat" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 25</p>
                            <label class="mt-3">Ketersediaan Fasilitas Ibadah, Kamar Kecil
                                yang
                                Rapi dan Bersih</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="25a" name="dua_lima" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="25b" name="dua_lima" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="25c" name="dua_lima" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="25d" name="dua_lima" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 26</p>
                            <label class="mt-3">Ketersediaan Tempat Parkir yang
                                Luas</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="26a" name="dua_enam" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="26b" name="dua_enam" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="26c" name="dua_enam" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="26d" name="dua_enam" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                            Ketersediaan Layanan Mahasiswa</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 27</p>
                            <label class="mt-3">Ketersediaan Informasi Beasiswa</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="27a" name="dua_tujuh" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="27b" name="dua_tujuh" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="27c" name="dua_tujuh" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="27d" name="dua_tujuh" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 28</p>
                            <label class="mt-3">Ketersediaan Layanan Bimbingan
                                Akademik</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="28a" name="dua_delapan" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="28b" name="dua_delapan" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="28c" name="dua_delapan" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="28d" name="dua_delapan" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 29</p>
                            <label class="mt-3">Ketersediaan Layanan Konsultasi untuk
                                Orang
                                Tua/Wali Mahasiswa</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="dua_sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="29a" name="dua_sembilan" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="29b" name="dua_sembilan" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="29c" name="dua_sembilan" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="dua_sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="29d" name="dua_sembilan" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 30</p>
                            <label class="mt-3">Ketersediaan Layanan Kesehatan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="30a" name="tiga_puluh" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="30b" name="tiga_puluh" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="30c" name="tiga_puluh" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="30d" name="tiga_puluh" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 31</p>
                            <label class="mt-3">Ketersediaan Layanan Asuransi untuk
                                Mahasiswa
                                yang terkena Musibah/Kecelakaan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="31a" name="tiga_satu" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="31b" name="tiga_satu" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="31c" name="tiga_satu" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="31d" name="tiga_satu" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <p class="text-xl font-open font-bold">Survei Kepuasan
                            Terkait
                            Proses Belajar Mengajar</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 32</p>
                            <label class="mt-3">Penyampaian Kontrak Kuliah di Awal
                                Perkuliahan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="32a" name="tiga_dua" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="32b" name="tiga_dua" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="32c" name="tiga_dua" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="32d" name="tiga_dua" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 33</p>
                            <label class="mt-3">Penyampaian Referensi yang diperlukan di
                                Awal
                                Perkuliahan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="33a" name="tiga_tiga" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="33b" name="tiga_tiga" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="33c" name="tiga_tiga" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="33d" name="tiga_tiga" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 34</p>
                            <label class="mt-3">Penyampaian Materi Kuliah Secara
                                Sistematis</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="34a" name="tiga_empat" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="34b" name="tiga_empat" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="34c" name="tiga_empat" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="34d" name="tiga_empat" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 35</p>
                            <label class="mt-3">Proses Penilaian didiskusikan dengan
                                Mahasiswa
                                di Awal Perkuliahan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="35a" name="tiga_lima" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="Baik" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="35b" name="tiga_lima" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="35c" name="tiga_lima" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="35d" name="tiga_lima" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 36</p>
                            <label class="mt-3">Pemberian Ilustrasi Perkembangan Ilmu dan
                                Teknologi serta Studi Kasus</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="36a" name="tiga_enam" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="36b" name="tiga_enam" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="36c" name="tiga_enam" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_enam" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="36d" name="tiga_enam" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 37</p>
                            <label class="mt-3">Kesempatan untuk Bertanya pada Saat
                                Perkuliahan Berlangsung Maupun Akhir Perkuliahan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="37a" name="tiga_tujuh" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="37b" name="tiga_tujuh" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="37c" name="tiga_tujuh" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_tujuh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="37d" name="tiga_tujuh" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 38</p>
                            <label class="mt-3">Penggunakan Media Terkini Sesuai dengan
                                Kebutuhan Materi Perkuliahan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="38a" name="tiga_delapan" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="38b" name="tiga_delapan" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="38c" name="tiga_delapan" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_delapan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="38d" name="tiga_delapan" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 39</p>
                            <label class="mt-3">Pemberian Tugas yang Relevan dengan Mata
                                Kuliah</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="tiga_sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="39a" name="tiga_sembilan" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="39b" name="tiga_sembilan" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="39c" name="tiga_sembilan" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="tiga_sembilan" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="39d" name="tiga_sembilan" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 40</p>
                            <label class="mt-3">Penyampaian Pesan Moral, Etika dan
                                Disiplin
                                ketika Proses Perkuliahan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="empat_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="40a" name="empat_puluh" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="40b" name="empat_puluh" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="40c" name="empat_puluh" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_puluh" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="40d" name="empat_puluh" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 41</p>
                            <label class="mt-3">Pelaksanaan Diskusi Kelompok</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="empat_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="41a" name="empat_satu" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="41b" name="empat_satu" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="41c" name="empat_satu" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_satu" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="41d" name="empat_satu" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 42</p>
                            <label class="mt-3">Kesesuaian Materi Kuliah dengan Rencana
                                Perkuliahan</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="empat_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="42a" name="empat_dua" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="42b" name="empat_dua" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="42c" name="empat_dua" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_dua" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="42d" name="empat_dua" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 43</p>
                            <label class="mt-3">Pemberian Softskill yang dapat Menunjang
                                Proses Belajar Mengajar</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="empat_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="43a" name="empat_tiga" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="43b" name="empat_tiga" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="43c" name="empat_tiga" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_tiga" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="43d" name="empat_tiga" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 44</p>
                            <label class="mt-3">Kesesuaian Soal Ujian dengan Materi
                                Kuliah</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="empat_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="44a" name="empat_empat" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="44b" name="empat_empat" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="44c" name="empat_empat" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_empat" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="44d" name="empat_empat" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 45</p>
                            <label class="mt-3">Kesempatan untuk Melakukan Banding atas
                                Nilai
                                Akhir Mata Kuliah</label>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                                <div class="mt-3 flex flex-col justify-between space-y-1">
                                <div class="px-2">
                                    <label for="empat_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="45a" name="empat_lima" value="Sangat Baik"
                                            class="mr-2">Sangat Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="45b" name="empat_lima" value="Baik"
                                            class="mr-2">Baik
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="45c" name="empat_lima" value="Cukup"
                                            class="mr-2">Cukup
                                    </label>
                                </div>
                                <div class="px-2">
                                    <label for="empat_lima" class="block text-gray-700 font-medium mb-2">
                                        <input type="radio" id="45d" name="empat_lima" value="Kurang"
                                            class="mr-2">Kurang
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


                    <div class="flex justify-center items-center">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-b-600">Submit</button>
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

@section('scripts')
    <script>
        // jQuery(document).ready(function($) {

        //     if (window.history && window.history.pushState) {

        //         $(window).on('popstate', function() {
        //             var hashLocation = location.hash;
        //             var hashSplit = hashLocation.split("#!/");
        //             var hashName = hashSplit[1];

        //             if (hashName !== '') {
        //                 var hash = window.location.hash;
        //                 if (hash === '') {
        //                     alert('Back button was pressed.');
        //                     window.location = '/tes';
        //                     return false;
        //                 }
        //             }
        //         });

        //         window.history.pushState('forward', null,);
        //     }

        // });
    </script>
@endsection
