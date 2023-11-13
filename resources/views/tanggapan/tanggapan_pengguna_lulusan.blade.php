@extends('layouts.main')

@section('container')
    <section class="sectionSize bg-white">
        <div><br><br>
            <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Pengguna
                Lulusan</h2>
            @if ((Auth::guard('gpm')->check() && $ketua) || Auth::guard('wadek')->check() || Auth::guard('kaprodi')->check()))
                <a href="/FeedbackPenggunaLulusan"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan</span>
                </a>
                <br>
                <a href="{{ route('tanggapanpenggunalulusan.edit', ['aktor' => $roleAktor]) }}"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Edit tanggapan</span>
                </a> <br>
            @endif
            @if ((Auth::guard('dekan')->check()))
                <a href="/FeedbackPenggunaLulusan?program_studi={{ $programStudi }}"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan</span>
                </a>
                <br>
                <a href="{{ route('tanggapanpenggunalulusan.edit', ['aktor' => $roleAktor]) }}"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Edit tanggapan</span>
                </a> <br>
                <form id="filter" action="/TanggapanPenggunaLulusan/filter" class="py-0.5" method="GET">
                    @csrf
                    <label class="mt-3">Program Studi:</label>
                    <label for="program_studi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        <select name="program_studi" id="program_studi"
                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Pilih Program Studi</option>
                        <option value="Ketua Program Studi Magister Biologi"
                            {{ request('program_studi') == 'Ketua Program Studi Magister Biologi' ? 'selected' : '' }}>MAGISTER BIOLOGI
                        </option>
                        <option value="Ketua Program Studi Magister Fisika"
                            {{ request('program_studi') == 'Ketua Program Studi Magister Fisika' ? 'selected' : '' }}>MAGISTER FISIKA</option>
                        <option value="Ketua Program Studi Magister Kimia" {{ request('program_studi') == 'Ketua Program Studi Magister Kimia' ? 'selected' : '' }}>
                            MAGISTER KIMIA</option>
                        <option value="Ketua Program Studi Magister Matematika"
                            {{ request('program_studi') == 'Ketua Program Studi Magister Matematika' ? 'selected' : '' }}>MAGISTER MATEMATIKA
                        </option>
                        <option value="Ketua Program Studi Sarjana Biologi"
                            {{ request('program_studi') == 'Ketua Program Studi Sarjana Biologi' ? 'selected' : '' }}>SARJANA BIOLOGI</option>
                        <option value="Ketua Program Studi Sarjana Bioteknologi"
                            {{ request('program_studi') == 'Ketua Program Studi Sarjana Bioteknologi' ? 'selected' : '' }}>SARJANA
                            BIOTEKNOLOGI</option>
                        <option value="Ketua Program Studi Sarjana Fisika" {{ request('program_studi') == 'Ketua Program Studi Sarjana Fisika' ? 'selected' : '' }}>
                            SARJANA FISIKA</option>
                        <option value="Ketua Program Studi Sarjana Informatika"
                            {{ request('program_studi') == 'Ketua Program Studi Sarjana Informatika' ? 'selected' : '' }}>SARJANA INFORMATIKA
                        </option>
                        <option value="Ketua Program Studi Sarjana Kimia" {{ request('program_studi') == 'Ketua Program Studi Sarjana Kimia' ? 'selected' : '' }}>
                            SARJANA KIMIA</option>
                        <option value="Ketua Program Studi Sarjana Matematika"
                            {{ request('program_studi') == 'Ketua Program Studi Sarjana Matematika' ? 'selected' : '' }}>SARJANA MATEMATIKA
                        </option>
                        <option value="Ketua Program Studi Sarjana Statistika"
                            {{ request('program_studi') == 'Ketua Program Studi Sarjana Statistika' ? 'selected' : '' }}>SARJANA STATITISKA
                        </option>
                    </select>
                </label>
                </form>
            @endif
            <br>
            <table class="shadow-lg bg-white">
                <tr>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 5%;">No.</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 20%;">Pernyataan</th>
                    @if ((Auth::guard('gpm')->check()) || (Auth::guard('wadek')->check() || Auth::guard('kaprodi')->check()))
                        <th class="bg-[#03051e] text-white text-center py-3" style="width: 25%;">Tanggapan GPM</th>
                    @endif
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 25%;">Tanggapan Kaprodi</th>
                    <th class="bg-[#03051e] text-white text-center py-3" style="width: 25%;">Tanggapan Dekan</th>
                </tr>
                @for ($nomor = 1; $nomor <= 9; $nomor++)
                    <tr>
                        <td class="border border-black text-center mt-2" >{{ $nomor }}.</td>
                        <td class="border-b border-black px-3 py-3">{{ $pernyataan->{$nomor} }}</td>
                        @if ((Auth::guard('gpm')->check()) || (Auth::guard('wadek')->check() || Auth::guard('kaprodi')->check()))
                            <td class="border-b border-black px-3 py-3">{!!$feedbackGpm->{$nomor}!!}</td>
                        @endif
                        <td class="border-b border-black px-3 py-3">{!!$feedbackKaprodi->{$nomor}!!}</td>
                        <td class="border-b border-r border-black px-3 py-3">{!!$feedbackDekan->{$nomor}!!}</td>
                    </tr>
                @endfor
            </table>
        </div>
        
        <script>
        const prodi = document.getElementById('program_studi');
        const form = document.getElementById('filter');

        prodi.addEventListener('change', () => {
            // Cek apakah tahun dan prodi sudah terpilih
            console.log('Prodi dipilih:', prodi.value);
            if (prodi.value) {
                form.submit();
            }
        })
        </script>
    </section>
@endsection
