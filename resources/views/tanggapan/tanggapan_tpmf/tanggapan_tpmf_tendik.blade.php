@extends('layouts.main')
@section('container')
    <div class="pt-32">
        {{-- <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1"> --}}
        <form action="/FeedbackTendik" method="POST">
            @csrf
            <div class="flex justify-center items-center">
                <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                    Layanan Pengembangan Kompetensi</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <label class="mt-3">{{ $pernyataan->{'1'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="satu" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="satu" type="hidden" name="satu" value="{{ strip_tags(old('satu')) }}">
                            <trix-editor input="satu"></trix-editor>
                            @error('satu')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'2'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua" type="hidden" name="dua" value="{{ strip_tags(old('dua')) }}">
                            <trix-editor input="dua"></trix-editor>
                            @error('dua')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'3'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tiga" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tiga" type="hidden" name="tiga" value="{{ strip_tags(old('tiga')) }}">
                            <trix-editor input="tiga"></trix-editor>
                            @error('tiga')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'4'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="empat" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="empat" type="hidden" name="empat" value="{{ strip_tags(old('empat')) }}">
                            <trix-editor input="empat"></trix-editor>
                            @error('empat')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'5'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="lima" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="lima" type="hidden" name="lima" value="{{ strip_tags(old('lima')) }}">
                            <trix-editor input="lima"></trix-editor>
                            @error('lima')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'6'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="enam" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="enam" type="hidden" name="enam" value="{{ strip_tags(old('enam')) }}">
                            <trix-editor input="enam"></trix-editor>
                            @error('enam')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'7'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="tujuh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="tujuh" type="hidden" name="tujuh" value="{{ strip_tags(old('tujuh')) }}">
                            <trix-editor input="tujuh"></trix-editor>
                            @error('tujuh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'8'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="delapan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="delapan" type="hidden" name="delapan" value="{{ strip_tags(old('delapan')) }}">
                            <trix-editor input="delapan"></trix-editor>
                            @error('delapan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'9'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sembilan" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sembilan" type="hidden" name="sembilan" value="{{ strip_tags(old('sembilan')) }}">
                            <trix-editor input="sembilan"></trix-editor>
                            @error('sembilan')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'10'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sepuluh" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sepuluh" type="hidden" name="sepuluh" value="{{ strip_tags(old('sepuluh')) }}">
                            <trix-editor input="sepuluh"></trix-editor>
                            @error('sepuluh')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'11'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="sebelas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="sebelas" type="hidden" name="sebelas" value="{{ strip_tags(old('sebelas')) }}">
                            <trix-editor input="sebelas"></trix-editor>
                            @error('sebelas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                <label class="mt-3">{{ $pernyataan->{'12'} }}</label>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg>
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <label for="dua_belas" class="block mb-2 text-sm font-medium text-gray-900">
                            <input id="dua_belas" type="hidden" name="dua_belas" value="{{ strip_tags(old('dua_belas')) }}">
                            <trix-editor input="dua_belas"></trix-editor>
                            @error('dua_belas')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>



            <div class="flex justify-center items-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div> <br>
        </form>
        {{-- </div> --}}
    </div>
@endsection
