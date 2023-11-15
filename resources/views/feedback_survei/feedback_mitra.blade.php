@extends('layouts.main')

@section('container')
    <section class="sectionSize bg-white">
        <div><br><br>
            <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Upaya Tindak Lanjut dan Perbaikan
                Hasil
                Survei Kepuasan Mitra Fakultas Sains dan Matematika</h2>
                <form id="filter" action="/upaya-tindak-lanjut-dan-perbaikan-hasil-survei-kepuasan-mitra/filter" class="py-0.5" method="GET">
                    <label class="mt-3">Tahun:</label>
                    <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        <select name="tahun" id="tahun"
                            class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Pilih Tahun</option>
                            @foreach ($uniqueYears as $year)
                                <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>
                                    {{ $year }}</option>
                            @endforeach
                        </select>
                    </label>
                </form>
                <table class="shadow-lg bg-white">
                    <tr>
                        <th class="bg-[#03051e] text-white text-center py-3" style="width: 5%;">No.</th>
                        <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Pernyataan</th>
                        <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Usulan Tindak Lanjut</th>
                        <th class="bg-[#03051e] text-white text-center py-3" style="width: 30%;">Upaya Perbaikan</th>
                    </tr>
                    @for ($nomor = 1; $nomor <= 10; $nomor++)
                        <tr>
                            <td class="border-b border-black px-3 py-3">{{ $nomor }}.</td>
                            <td class="border-b border-black px-3 py-3">{{ $pernyataan->{$nomor} }}</td>
                            <td class="border-b border-black px-3 py-3">{!! $feedbackTpmf->{$nomor} !!}</td>
                            <td class="border-b border-r border-black px-3 py-3">{!! $feedbackDekan->{$nomor} !!}</td>
                        </tr>
                    @endfor
                </table>
        </div>
        <script>
            const tahun = document.getElementById('tahun');
            const form = document.getElementById('filter');
            tahun.addEventListener('change', () => {
                // Cek apakah tahun dan prodi sudah terpilih
                tahun.style.display = "block";
                if (tahun.value) {
                    form.submit();
                }
            })
        </script>
    </section>
@endsection
