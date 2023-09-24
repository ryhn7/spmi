@extends('layouts.main')

@section('container')
    @if ($surveys === null)
        <div class="pt-32">
            {{-- <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1"> --}}
                <form action="/surveiTendik" method="POST">
                    @csrf
                    <div class="flex justify-center items-center">
                        <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                            Layanan Pengembangan Kompetensi</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 1</p>
                            <label class="mt-3">Fakultas Sains dan Matematika memfasilitasi
                                kebutuhan untuk studi lanjut</label>
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
                            <label class="mt-3">Dukungan pengembangan diri untuk mengikuti
                                kursus/pelatihan</label>
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
                            <label class="mt-3">Dukungan pengembangan diri untuk mengikuti
                                seminar/workshop</label>
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
                            <label class="mt-3">Dukungan dan kesempatan untuk mengikuti
                                studi banding dalam negeri</label>
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
                            <label class="mt-3">Dukungan dan kesempatan untuk mengikuti
                                studi banding luar negeri</label>
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
                        <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                            Layanan Pengembangan Karir/Jabatan</p>
                    </div>
                        <div class="flex justify-center items-center">
                            <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                                <p class="text-xl font-open font-bold">Pertanyaan 6</p>
                            <label class="mt-3">Mendapat informasi tentang jenjang
                                karir</label>
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
                            <label class="mt-3">Layanan yang diberikan Fakultas Sains dan
                                Matematika tentang jenjang karir</label>
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
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 8</p>
                            <label class="mt-3">Dukungan dan kesempatan untuk meningkatkan
                                jenjang karir</label>
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
                            <label class="mt-3">Mendapatkan informasi tentang
                                jabatan</label>
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
                            <label class="mt-3">Layanan yang diberikan Fakultas Sains dan
                                Matematika tentang jabatan</label>
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
                            <label class="mt-3">Dukungan dan kesempatan untuk peningkatan
                                jabatan struktural</label>
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
                    <div class="flex justify-center items-center">
                        <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                            <p class="text-xl font-open font-bold">Pertanyaan 12</p>
                            <label class="mt-3">Dukungan dan kesempatan untuk peningkatan
                                jabatan non struktural</label>
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
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
                    </div><br>
                </form>
            {{-- </div> --}}
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
