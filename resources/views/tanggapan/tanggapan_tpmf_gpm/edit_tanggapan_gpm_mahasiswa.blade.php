@extends('layouts.main')
@section('container')
<div class="pt-32">
    <form action="{{ route('tanggapanmahasiswa.update', $feedback->ID ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="flex justify-center items-center">
                <p class="text-xl font-open font-bold">Survei Kepuasan Terkait Layanan Pengembangan Kompetensi</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                <label class="mt-3">{{ $pernyataan->{'1'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="satu" type="hidden" name="satu" value="{{ $feedback->{'1'} }}">
                            <trix-editor input="satu"></trix-editor>
                            @error('satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'2'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua" type="hidden" name="dua" value="{{ $feedback->{'2'} }}">
                            <trix-editor input="dua"></trix-editor>
                            @error('dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'3'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga" type="hidden" name="tiga" value="{{ $feedback->{'3'} }}">
                            <trix-editor input="tiga"></trix-editor>
                            @error('tiga')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'4'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat" type="hidden" name="empat" value="{{ $feedback->{'4'} }}">
                            <trix-editor input="empat"></trix-editor>
                            @error('empat')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'5'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="lima" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="lima" type="hidden" name="lima" value="{{ $feedback->{'5'} }}">
                            <trix-editor input="lima"></trix-editor>
                            @error('lima')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'6'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="enam" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="enam" type="hidden" name="enam" value="{{ $feedback->{'6'} }}">
                            <trix-editor input="enam"></trix-editor>
                            @error('enam')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'7'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tujuh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tujuh" type="hidden" name="tujuh" value="{{ $feedback->{'7'} }}">
                            <trix-editor input="tujuh"></trix-editor>
                            @error('tujuh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'8'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="delapan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="delapan" type="hidden" name="delapan" value="{{ $feedback->{'8'} }}">
                            <trix-editor input="delapan"></trix-editor>
                            @error('delapan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'9'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sembilan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sembilan" type="hidden" name="sembilan" value="{{ $feedback->{'9'} }}">
                            <trix-editor input="sembilan"></trix-editor>
                            @error('sembilan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'10'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sepuluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sepuluh" type="hidden" name="sepuluh" value="{{ $feedback->{'10'} }}">
                            <trix-editor input="sepuluh"></trix-editor>
                            @error('sepuluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'11'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sebelas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sebelas" type="hidden" name="sebelas" value="{{ $feedback->{'11'} }}">
                            <trix-editor input="sebelas"></trix-editor>
                            @error('sebelas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'12'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_belas" type="hidden" name="dua_belas" value="{{ $feedback->{'12'} }}">
                            <trix-editor input="dua_belas"></trix-editor>
                            @error('dua_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'13'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_belas" type="hidden" name="tiga_belas" value="{{ $feedback->{'13'} }}">
                            <trix-editor input="tiga_belas"></trix-editor>
                            @error('tiga_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'14'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_belas" type="hidden" name="empat_belas" value="{{ $feedback->{'14'} }}">
                            <trix-editor input="empat_belas"></trix-editor>
                            @error('empat_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'15'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="lima_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="lima_belas" type="hidden" name="lima_belas" value="{{ $feedback->{'15'} }}">
                            <trix-editor input="lima_belas"></trix-editor>
                            @error('lima_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'16'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="enam_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="enam_belas" type="hidden" name="enam_belas" value="{{ $feedback->{'16'} }}">
                            <trix-editor input="enam_belas"></trix-editor>
                            @error('enam_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'17'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tujuh_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tujuh_belas" type="hidden" name="tujuh_belas" value="{{ $feedback->{'17'} }}">
                            <trix-editor input="tujuh_belas"></trix-editor>
                            @error('tujuh_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                    
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'18'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="delapan_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="delapan_belas" type="hidden" name="delapan_belas" value="{{ $feedback->{'18'} }}">
                            <trix-editor input="delapan_belas"></trix-editor>
                            @error('delapan_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'19'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sembilan_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sembilan_belas" type="hidden" name="sembilan_belas" value="{{ $feedback->{'19'} }}">
                            <trix-editor input="sembilan_belas"></trix-editor>
                            @error('sembilan_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'20'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_puluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_puluh" type="hidden" name="dua_puluh" value="{{ $feedback->{'20'} }}">
                            <trix-editor input="dua_puluh"></trix-editor>
                            @error('dua_puluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'21'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_satu" type="hidden" name="dua_satu" value="{{ $feedback->{'21'} }}">
                            <trix-editor input="dua_satu"></trix-editor>
                            @error('dua_satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'22'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_dua" type="hidden" name="dua_dua" value="{{ $feedback->{'22'} }}">
                            <trix-editor input="dua_dua"></trix-editor>
                            @error('dua_dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'23'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_tiga" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_tiga" type="hidden" name="dua_tiga" value="{{ $feedback->{'23'} }}">
                            <trix-editor input="dua_tiga"></trix-editor>
                            @error('dua_tiga')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'24'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_empat" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_empat" type="hidden" name="dua_empat" value="{{ $feedback->{'24'} }}">
                            <trix-editor input="dua_empat"></trix-editor>
                            @error('dua_empat')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror                        
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'25'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_lima" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_lima" type="hidden" name="dua_lima" value="{{ $feedback->{'25'} }}">
                            <trix-editor input="dua_lima"></trix-editor>
                            @error('dua_lima')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'26'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_enam" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_enam" type="hidden" name="dua_enam" value="{{ $feedback->{'26'} }}">
                            <trix-editor input="dua_enam"></trix-editor>
                            @error('dua_enam')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'27'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_tujuh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_tujuh" type="hidden" name="dua_tujuh" value="{{ $feedback->{'27'} }}">
                            <trix-editor input="dua_tujuh"></trix-editor>
                            @error('dua_tujuh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'28'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_delapan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_delapan" type="hidden" name="dua_delapan" value="{{ $feedback->{'28'} }}">
                            <trix-editor input="dua_delapan"></trix-editor>
                            @error('dua_delapan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'29'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_sembilan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_sembilan" type="hidden" name="dua_sembilan" value="{{ $feedback->{'29'} }}">
                            <trix-editor input="dua_sembilan"></trix-editor>
                            @error('dua_sembilan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'30'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_puluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_puluh" type="hidden" name="tiga_puluh" value="{{ $feedback->{'30'} }}">
                            <trix-editor input="tiga_puluh"></trix-editor>
                            @error('tiga_puluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'31'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_satu" type="hidden" name="tiga_satu" value="{{ $feedback->{'31'} }}">
                            <trix-editor input="tiga_satu"></trix-editor>
                            @error('tiga_satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'32'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_dua" type="hidden" name="tiga_dua" value="{{ $feedback->{'32'} }}">
                            <trix-editor input="tiga_dua"></trix-editor>
                            @error('tiga_dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'33'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_tiga" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_tiga" type="hidden" name="tiga_tiga" value="{{ $feedback->{'33'} }}">
                            <trix-editor input="tiga_tiga"></trix-editor>
                            @error('tiga_tiga')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'34'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_empat" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_empat" type="hidden" name="tiga_empat" value="{{ $feedback->{'34'} }}">
                            <trix-editor input="tiga_empat"></trix-editor>
                            @error('tiga_empat')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'35'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_lima" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_lima" type="hidden" name="tiga_lima" value="{{ $feedback->{'35'} }}">
                            <trix-editor input="tiga_lima"></trix-editor>
                            @error('tiga_lima')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'36'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_enam" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_enam" type="hidden" name="tiga_enam" value="{{ $feedback->{'36'} }}">
                            <trix-editor input="tiga_enam"></trix-editor>
                            @error('tiga_enam')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'37'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_tujuh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_tujuh" type="hidden" name="tiga_tujuh" value="{{ $feedback->{'37'} }}">
                            <trix-editor input="tiga_tujuh"></trix-editor>
                            @error('tiga_tujuh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'38'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_delapan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_delapan" type="hidden" name="tiga_delapan" value="{{ $feedback->{'38'} }}">
                            <trix-editor input="tiga_delapan"></trix-editor>
                            @error('tiga_delapan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'39'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga_sembilan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga_sembilan" type="hidden" name="tiga_sembilan" value="{{ $feedback->{'39'} }}">
                            <trix-editor input="tiga_sembilan"></trix-editor>
                            @error('tiga_sembilan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'40'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_puluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_puluh" type="hidden" name="empat_puluh" value="{{ $feedback->{'40'} }}">
                            <trix-editor input="empat_puluh"></trix-editor>
                            @error('empat_puluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'41'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_satu" type="hidden" name="empat_satu" value="{{ $feedback->{'41'} }}">
                            <trix-editor input="empat_satu"></trix-editor>
                            @error('empat_satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'42'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_dua" type="hidden" name="empat_dua" value="{{ $feedback->{'42'} }}">
                            <trix-editor input="empat_dua"></trix-editor>
                            @error('empat_dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'43'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_tiga" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_tiga" type="hidden" name="empat_tiga" value="{{ $feedback->{'43'} }}">
                            <trix-editor input="empat_tiga"></trix-editor>
                            @error('empat_tiga')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'44'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_empat" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_empat" type="hidden" name="empat_empat" value="{{ $feedback->{'44'} }}">
                            <trix-editor input="empat_empat"></trix-editor>
                            @error('empat_empat')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'45'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat_lima" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat_lima" type="hidden" name="empat_lima" value="{{ $feedback->{'45'} }}">
                            <trix-editor input="empat_lima"></trix-editor>
                            @error('empat_lima')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Edit Tanggapan</button>
            </div>

        </form>
    {{-- </div> --}}
</div>

@endsection