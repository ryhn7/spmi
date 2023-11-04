@extends('layouts.main')
@section('container')
    <div class="pt-32">
        {{-- <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1"> --}}
        <form action="/FeedbackDosen" method="POST">
            @csrf
            <div class="flex justify-center items-center">
                <p class="text-xl font-open font-bold">Survei Kepuasan Terkait Layanan Pengembangan Kompetensi</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <label class="mt-3">{{ $pernyataan->{'1'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="satu" type="hidden" name="satu" value="{{ old('satu') }}">
                            <trix-editor input="satu"></trix-editor>
                            @error('satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'2'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua" type="hidden" name="dua" value="{{ strip_tags(old('dua')) }}">
                            <trix-editor input="dua"></trix-editor>
                            @error('dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'3'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga" type="hidden" name="tiga" value="{{ strip_tags(old('tiga')) }}">
                            <trix-editor input="tiga"></trix-editor>
                            @error('tiga')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'4'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat" type="hidden" name="empat" value="{{ strip_tags(old('empat')) }}">
                            <trix-editor input="empat"></trix-editor>
                            @error('empat')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'5'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="lima" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="lima" type="hidden" name="lima" value="{{ strip_tags(old('lima')) }}">
                            <trix-editor input="lima"></trix-editor>
                            @error('lima')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'6'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="enam" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="enam" type="hidden" name="enam" value="{{ strip_tags(old('enam')) }}">
                            <trix-editor input="enam"></trix-editor>
                            @error('enam')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'7'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tujuh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tujuh" type="hidden" name="tujuh" value="{{ strip_tags(old('tujuh')) }}">
                            <trix-editor input="tujuh"></trix-editor>
                            @error('tujuh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'8'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="delapan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="delapan" type="hidden" name="delapan" value="{{ strip_tags(old('delapan')) }}">
                            <trix-editor input="delapan"></trix-editor>
                            @error('delapan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'9'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sembilan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sembilan" type="hidden" name="sembilan" value="{{ strip_tags(old('sembilan')) }}">
                            <trix-editor input="sembilan"></trix-editor>
                            @error('sembilan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'10'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sepuluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sepuluh" type="hidden" name="sepuluh" value="{{ strip_tags(old('sepuluh')) }}">
                            <trix-editor input="sepuluh"></trix-editor>
                            @error('sepuluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'11'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sebelas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sebelas" type="hidden" name="sebelas" value="{{ strip_tags(old('sebelas')) }}">
                            <trix-editor input="sebelas"></trix-editor>
                            @error('sebelas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'12'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_belas" type="hidden" name="dua_belas" value="{{ strip_tags(old('dua_belas')) }}">
                            <trix-editor input="dua_belas"></trix-editor>
                            @error('dua_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'13'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_belas" type="hidden" name="tiga_belas" value="{{ strip_tags(old('tiga_belas')) }}">
                            <trix-editor input="tiga_belas"></trix-editor>
                            @error('tiga_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'14'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_belas" type="hidden" name="empat_belas" value="{{ strip_tags(old('empat_belas')) }}">
                            <trix-editor input="empat_belas"></trix-editor>
                            @error('empat_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'15'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="lima_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="lima_belas" type="hidden" name="lima_belas" value="{{ strip_tags(old('lima_belas')) }}">
                            <trix-editor input="lima_belas"></trix-editor>
                            @error('lima_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'16'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="enam_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="enam_belas" type="hidden" name="enam_belas" value="{{ strip_tags(old('enam_belas')) }}">
                            <trix-editor input="enam_belas"></trix-editor>
                            @error('enam_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'17'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tujuh_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tujuh_belas" type="hidden" name="tujuh_belas" value="{{ strip_tags(old('tujuh_belas')) }}">
                            <trix-editor input="tujuh_belas"></trix-editor>
                            @error('tujuh_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'18'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="delapan_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="delapan_belas" type="hidden" name="delapan_belas" value="{{ strip_tags(old('delapan_belas')) }}">
                            <trix-editor input="delapan_belas"></trix-editor>
                            @error('delapan_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'19'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sembilan_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sembilan_belas" type="hidden" name="sembilan_belas" value="{{ strip_tags(old('sembilan_belas')) }}">
                            <trix-editor input="sembilan_belas"></trix-editor>
                            @error('sembilan_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'20'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_puluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_puluh" type="hidden" name="dua_puluh" value="{{ strip_tags(old('dua_puluh')) }}">
                            <trix-editor input="dua_puluh"></trix-editor>
                            @error('dua_puluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'21'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_satu" type="hidden" name="dua_satu" value="{{ strip_tags(old('dua_satu')) }}">
                            <trix-editor input="dua_satu"></trix-editor>
                            @error('dua_satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'22'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_dua" type="hidden" name="dua_dua" value="{{ strip_tags(old('dua_dua')) }}">
                            <trix-editor input="dua_dua"></trix-editor>
                            @error('dua_dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'23'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_tiga" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_tiga" type="hidden" name="dua_tiga" value="{{ strip_tags(old('dua_tiga')) }}">
                            <trix-editor input="dua_tiga"></trix-editor>
                            @error('dua_tiga')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'24'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_empat" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_empat" type="hidden" name="dua_empat" value="{{ strip_tags(old('dua_empat')) }}">
                            <trix-editor input="dua_empat"></trix-editor>
                            @error('dua_empat')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'25'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_lima" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_lima" type="hidden" name="dua_lima" value="{{ strip_tags(old('dua_lima')) }}">
                            <trix-editor input="dua_lima"></trix-editor>
                            @error('dua_lima')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'26'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_enam" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_enam" type="hidden" name="dua_enam" value="{{ strip_tags(old('dua_enam')) }}">
                            <trix-editor input="dua_enam"></trix-editor>
                            @error('dua_enam')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'27'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_tujuh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_tujuh" type="hidden" name="dua_tujuh" value="{{ strip_tags(old('dua_tujuh')) }}">
                            <trix-editor input="dua_tujuh"></trix-editor>
                            @error('dua_tujuh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'28'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_delapan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_delapan" type="hidden" name="dua_delapan" value="{{ strip_tags(old('dua_delapan')) }}">
                            <trix-editor input="dua_delapan"></trix-editor>
                            @error('dua_delapan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'29'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_sembilan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_sembilan" type="hidden" name="dua_sembilan" value="{{ strip_tags(old('dua_sembilan')) }}">
                            <trix-editor input="dua_sembilan"></trix-editor>
                            @error('dua_sembilan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'30'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_puluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_puluh" type="hidden" name="tiga_puluh" value="{{ strip_tags(old('tiga_puluh')) }}">
                            <trix-editor input="tiga_puluh"></trix-editor>
                            @error('tiga_puluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'31'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_satu" type="hidden" name="tiga_satu" value="{{ strip_tags(old('tiga_satu')) }}">
                            <trix-editor input="tiga_satu"></trix-editor>
                            @error('tiga_satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'32'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_dua" type="hidden" name="tiga_dua" value="{{ strip_tags(old('tiga_dua')) }}">
                            <trix-editor input="tiga_dua"></trix-editor>
                            @error('tiga_dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'33'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_tiga" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_tiga" type="hidden" name="tiga_tiga" value="{{ strip_tags(old('tiga_tiga')) }}">
                            <trix-editor input="tiga_tiga"></trix-editor>
                            @error('tiga_tiga')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'34'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_empat" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_empat" type="hidden" name="tiga_empat" value="{{ strip_tags(old('tiga_empat')) }}">
                            <trix-editor input="tiga_empat"></trix-editor>
                            @error('tiga_empat')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'35'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_lima" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_lima" type="hidden" name="tiga_lima" value="{{ strip_tags(old('tiga_lima')) }}">
                            <trix-editor input="tiga_lima"></trix-editor>
                            @error('tiga_lima')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'36'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_enam" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_enam" type="hidden" name="tiga_enam" value="{{ strip_tags(old('tiga_enam')) }}">
                            <trix-editor input="tiga_enam"></trix-editor>
                            @error('tiga_enam')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'37'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_tujuh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_tujuh" type="hidden" name="tiga_tujuh" value="{{ strip_tags(old('tiga_tujuh')) }}">
                            <trix-editor input="tiga_tujuh"></trix-editor>
                            @error('tiga_tujuh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'38'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_delapan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_delapan" type="hidden" name="tiga_delapan" value="{{ strip_tags(old('tiga_delapan')) }}">
                            <trix-editor input="tiga_delapan"></trix-editor>
                            @error('tiga_delapan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'39'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_sembilan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_sembilan" type="hidden" name="tiga_sembilan" value="{{ strip_tags(old('tiga_sembilan')) }}">
                            <trix-editor input="tiga_sembilan"></trix-editor>
                            @error('tiga_sembilan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'40'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_puluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_puluh" type="hidden" name="empat_puluh" value="{{ strip_tags(old('empat_puluh')) }}">
                            <trix-editor input="empat_puluh"></trix-editor>
                            @error('empat_puluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'41'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_satu" type="hidden" name="empat_satu" value="{{ strip_tags(old('empat_satu')) }}">
                            <trix-editor input="empat_satu"></trix-editor>
                            @error('empat_satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                    <label class="mt-3">{{ $pernyataan->{'42'} }}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_dua" type="hidden" name="empat_dua" value="{{ strip_tags(old('empat_dua')) }}">
                            <trix-editor input="empat_dua"></trix-editor>
                            @error('empat_dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div>

        </form>
        {{-- </div> --}}
    </div>
@endsection
