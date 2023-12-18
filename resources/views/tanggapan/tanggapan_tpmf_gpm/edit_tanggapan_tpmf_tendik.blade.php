@extends('layouts.main')
@section('container')
    <div class="pt-32">
        {{-- <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1"> --}}
        <form action="{{ route('tanggapantendik.update', $feedback->ID ) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateWordCount();">
            @csrf
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none   p-6  ">
                    <div class="mt-3 flex flex-col justify-between space-y-1">
                        <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)"
                            class="w-full px-3 overflow-hidden rounded-lg shadow-xs">
                            @if ($errors->any())
                                <div alert
                                    class="relative p-4 pr-12 mb-4 text-white border border-red-300 border-solid rounded-lg bg-gradient-to-tl from-red-600 to-rose-400"
                                    role="alert">
                                    {{-- <strong class="font-bold">Oops!</strong> --}}
                                    <strong class="font-bold">{{ 'Periksa kembali isian anda' }}</strong>
                                    <button type="button" alert-close
                                        class="box-content absolute top-0 right-0 p-4 text-sm text-white bg-transparent border-0 rounded w-4 h-4 z-2">
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @method('PUT')
            <div class="flex justify-center items-center">
                <p class="text-xl font-open font-bold">Survei Kepuasan Terkait
                    Layanan Pengembangan Kompetensi</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="bg-[#03051e] w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg">
                    <div class="text-white">Warning: Inputan maksimal adalah 100 words</div>
                </div>
            </div>  
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    @php
                        $inputs = ['satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas', 'dua_belas'];
                    @endphp
        
                    @for ($i = 0; $i < count($inputs); $i++)
                        <label class="mt-3">{{ ($i+1) . ". " . $pernyataan->{$i+1} }}</label>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 m-5 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="mt-3 flex flex-col justify-between space-y-1">
                            <label for="{{ $inputs[$i] }}" class="block mb-2 text-sm font-medium text-gray-900">
                                <input id="{{ $inputs[$i] }}" type="hidden" name="{{ $inputs[$i] }}" value="{{ $feedback->{$i+1} }}">
                                <trix-editor input="{{ $inputs[$i] }}"></trix-editor>
                                @error($inputs[$i])
                                    <p class="text-xs mt-1 text-red-700 font-franklin">{{ 'Pertanyaan wajib diisi' }}</p>
                                @enderror
                            </label>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="flex justify-center items-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Edit Tanggapan</button>
            </div> <br>
        </form>
    </div>
    <script>
        function validateWordCount() {
            var inputs = ['satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas', 'dua_belas'];
    
            for (var i = 0; i < inputs.length; i++) {
                var inputName = inputs[i];
                var inputText = document.getElementById(inputName).value;
                var wordCount = inputText.trim().split(/\s+/).length;
    
                console.log(inputName + ' word count:', wordCount);
    
                if (wordCount > 100) {
                    var pernyataanValue = @json($pernyataan->{"i"});
                    alert('Tanggapan ke-' + (i + 1) + ' Melebihi 100 Words');
                    return false; 
                }
            }
    
            return true;
        }
    </script>
@endsection
