@extends('layouts.main')
@section('container')
    <div class="pt-32">
        <form action="{{ route('tanggapandosen.update', $feedback->ID ) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateWordCount();">
            @csrf
            @method('PUT')
            <div class="flex justify-center items-center">
                <p class="text-xl font-open font-bold">Survei Kepuasan Terkait Layanan Pengembangan Kompetensi</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="bg-[#03051e] w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg">
                    <div class="text-white">Warning: Inputan maksimal adalah 100 words</div>
                </div>
            </div>  
            <div class="flex justify-center items-center">
                <div class="w-4/5 m-5 select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    @php
                        $inputs = ['satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas', 'dua_belas', 'tiga_belas', 'empat_belas', 'lima_belas', 'enam_belas', 'tujuh_belas', 'delapan_belas', 'sembilan_belas', 'dua_puluh', 'dua_satu', 'dua_dua', 'dua_tiga', 'dua_empat', 'dua_lima', 'dua_enam', 'dua_tujuh', 'dua_delapan', 'dua_sembilan', 'tiga_puluh', 'tiga_satu', 'tiga_dua', 'tiga_tiga', 'tiga_empat', 'tiga_lima', 'tiga_enam', 'tiga_tujuh', 'tiga_delapan', 'tiga_sembilan', 'empat_puluh', 'empat_satu', 'empat_dua']; // id untuk setiap pertanyaan;
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
        {{-- </div> --}}
    </div>
    <script>
        function validateWordCount() {
            var inputs = ['satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas', 'dua_belas', 'tiga_belas', 'empat_belas', 'lima_belas', 'enam_belas', 'tujuh_belas', 'delapan_belas', 'sembilan_belas', 'dua_puluh', 'dua_satu', 'dua_dua', 'dua_tiga', 'dua_empat', 'dua_lima', 'dua_enam', 'dua_tujuh', 'dua_delapan', 'dua_sembilan', 'tiga_puluh', 'tiga_satu', 'tiga_dua', 'tiga_tiga', 'tiga_empat', 'tiga_lima', 'tiga_enam', 'tiga_tujuh', 'tiga_delapan', 'tiga_sembilan', 'empat_puluh', 'empat_satu', 'empat_dua']; // id untuk setiap pertanyaan;
    
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
