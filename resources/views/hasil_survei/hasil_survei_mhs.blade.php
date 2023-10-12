@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white"> 
    <br><br><br>
    {{-- @dd($results); --}}
    <div class="container">
        <div class=" flex justify-center text-2xl mt-10">
            <label class="text-xl font-open font-bold text-center">Hasil Survei Kepuasan Mahasiswa Fakultas Sains dan Matematika Tahun 2020</label>
        </div> <br>
            <form id="prodiFilter" action="/hasilmahasiswa/filterProdi" class="py-0.5" method="GET">
                <label class="mt-3">Tahun:</label>
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    <select name="tahun" id="tahun" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Pilih Tahun</option>
                        @foreach($uniqueYears as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="mt-3">Program Studi:</label>
                <label for="program_studi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                <select name="program_studi" id="program_studi" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Pilih Program Studi</option>
                    <option value="MAGISTER BIOLOGI">MAGISTER BIOLOGI</option>
                    <option value="MAGISTER FISIKA">MAGISTER FISIKA</option>
                    <option value="MAGISTER KIMIA">MAGISTER KIMIA</option>
                    <option value="MAGISTER MATEMATIKA">MAGISTER MATEMATIKA</option>
                    <option value="SARJANA BIOLOGI">SARJANA BIOLOGI</option>
                    <option value="SARJANA BIOTEKNOLOGI">SARJANA BIOTEKNOLOGI</option>
                    <option value="SARJANA FISIKA">SARJANA FISIKA</option>
                    <option value="SARJANA INFORMATIKA">SARJANA INFORMATIKA</option>
                    <option value="SARJANA KIMIA">SARJANA KIMIA</option>
                    <option value="SARJANA MATEMATIKA">SARJANA MATEMATIKA</option>
                    <option value="SARJANA STATITISKA">SARJANA STATITISKA</option>
                </select>
            </label>
            </form>
            
        
        <div class="container-fluid mt-10 mx-auto">
            <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg">
                <div class="card card-primary">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Keandalan (Reliability)</h3>
                    <canvas id="myChart1" width="500" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Keandalan (Reliability)</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><label>No.</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;"><label>Pernyataan</label></th>
                            <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><label>Hasil Survei</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><label>Rata - Rata</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;"><label>Kriteria</label></th>
                        </tr>
                        <tr>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 10%;">
                                <label>Sangat Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Cukup</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Kurang</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= 7; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i}}.</td>
                            <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                            @for ($j = 0; $j <= 3; $j++)
                            <td class="border-b border-black text-center">
                                {{ $results[$j]['Total'][$i] }}</td>
                            @endfor
                            {{-- <td class="border-b border-black text-center">
                                {{ $totalData }}</td> --}}
                            <td class="border-b border-black text-center">
                                {{ number_format($weightedTotals[$i], 2) }}</td>
                            <td class="border-b border-r border-black text-center">
                                {{ $labelWeightedTotals[$i] }}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata - Rata</label></td>
                            <td class="border-b border-black text-center font-bold">
                                <label>{{ number_format($averages[1], 2) }}</label>
                            </td>
                            <td class="border-b border-r font-bold border-black text-center">
                                <label>{{ $labels[1] }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container-fluid mt-10 mx-auto">
            <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                <div class="card card-primary">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan Pengembangan Kompetensi</h3>
                    <canvas id="myChart2" width="500" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Daya Tanggap (Responsiveness)</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><label>No.</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;"><label>Pernyataan</label></th>
                            <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><label>Hasil Survei</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><label>Rata - Rata</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;"><label>Kriteria</label></th>
                        </tr>
                        <tr>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 10%;">
                                <label>Sangat Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Cukup</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Kurang</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 8; $i <= 11; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i-7}}.</td>
                            <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                            @for ($j = 0; $j <= 3; $j++)
                            <td class="border-b border-black text-center">
                                {{ $results[$j]['Total'][$i] }}</td>
                            @endfor
                            {{-- <td class="border-b border-black text-center">
                                {{ $totalData }}</td> --}}
                            <td class="border-b border-black text-center">
                                {{ number_format($weightedTotals[$i], 2) }}</td>
                            <td class="border-b border-r border-black text-center">
                                {{ $labelWeightedTotals[$i] }}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata - Rata</label></td>
                            <td class="border-b border-black text-center font-bold">
                                <label>{{ number_format($averages[1], 2) }}</label>
                            </td>
                            <td class="border-b border-r font-bold border-black text-center">
                                <label>{{ $labels[1] }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-fluid mt-10 mx-auto">
            <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                <div class="card card-primary">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Kepastian (Assurance)</h3>
                    <canvas id="myChart3" width="500" height="110"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Kepastian (Assurance)</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><label>No.</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;"><label>Pernyataan</label></th>
                            <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><label>Hasil Survei</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><label>Rata - Rata</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;"><label>Kriteria</label></th>
                        </tr>
                        <tr>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 10%;">
                                <label>Sangat Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Cukup</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Kurang</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 12; $i <= 16; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i-11}}.</td>
                            <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                            @for ($j = 0; $j <= 3; $j++)
                            <td class="border-b border-black text-center">
                                {{ $results[$j]['Total'][$i] }}</td>
                            @endfor
                            {{-- <td class="border-b border-black text-center">
                                {{ $totalData }}</td> --}}
                            <td class="border-b border-black text-center">
                                {{ number_format($weightedTotals[$i], 2) }}</td>
                            <td class="border-b border-r border-black text-center">
                                {{ $labelWeightedTotals[$i] }}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata - Rata</label></td>
                            <td class="border-b border-black text-center font-bold">
                                <label>{{ number_format($averages[1], 2) }}</label>
                            </td>
                            <td class="border-b border-r font-bold border-black text-center">
                                <label>{{ $labels[1] }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-fluid mt-10 mx-auto">
            <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                <div class="card card-primary">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Empati (Empathy)</h3>
                    <canvas id="myChart4" width="500" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Empati (Empathy)</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><label>No.</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;"><label>Pernyataan</label></th>
                            <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><label>Hasil Survei</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><label>Rata - Rata</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;"><label>Kriteria</label></th>
                        </tr>
                        <tr>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 10%;">
                                <label>Sangat Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Cukup</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Kurang</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 17; $i <= 20; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i-16}}.</td>
                            <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                            @for ($j = 0; $j <= 3; $j++)
                            <td class="border-b border-black text-center">
                                {{ $results[$j]['Total'][$i] }}</td>
                            @endfor
                            {{-- <td class="border-b border-black text-center">
                                {{ $totalData }}</td> --}}
                            <td class="border-b border-black text-center">
                                {{ number_format($weightedTotals[$i], 2) }}</td>
                            <td class="border-b border-r border-black text-center">
                                {{ $labelWeightedTotals[$i] }}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata - Rata</label></td>
                            <td class="border-b border-black text-center font-bold">
                                <label>{{ number_format($averages[1], 2) }}</label>
                            </td>
                            <td class="border-b border-r font-bold border-black text-center">
                                <label>{{ $labels[1] }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-fluid mt-10 mx-auto">
            <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                <div class="card card-primary">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap (Tangible)</h3>
                    <canvas id="myChart5" width="500" height="120"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap (Tangible)</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><label>No.</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;"><label>Pernyataan</label></th>
                            <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><label>Hasil Survei</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><label>Rata - Rata</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;"><label>Kriteria</label></th>
                        </tr>
                        <tr>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 10%;">
                                <label>Sangat Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Cukup</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Kurang</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 21; $i <= 26; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i-20}}.</td>
                            <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                            @for ($j = 0; $j <= 3; $j++)
                            <td class="border-b border-black text-center">
                                {{ $results[$j]['Total'][$i] }}</td>
                            @endfor
                            {{-- <td class="border-b border-black text-center">
                                {{ $totalData }}</td> --}}
                            <td class="border-b border-black text-center">
                                {{ number_format($weightedTotals[$i], 2) }}</td>
                            <td class="border-b border-r border-black text-center">
                                {{ $labelWeightedTotals[$i] }}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata - Rata</label></td>
                            <td class="border-b border-black text-center font-bold">
                                <label>{{ number_format($averages[1], 2) }}</label>
                            </td>
                            <td class="border-b border-r font-bold border-black text-center">
                                <label>{{ $labels[1] }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-fluid mt-10 mx-auto">
            <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                <div class="card card-primary">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Ketersediaan Layanan Mahasiswa</h3>
                    <canvas id="myChart6" width="500" height="120"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Ketersediaan Layanan Mahasiswa</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><label>No.</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;"><label>Pernyataan</label></th>
                            <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><label>Hasil Survei</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><label>Rata - Rata</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;"><label>Kriteria</label></th>
                        </tr>
                        <tr>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 10%;">
                                <label>Sangat Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Cukup</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Kurang</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 27; $i <= 31; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i-26}}.</td>
                            <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                            @for ($j = 0; $j <= 3; $j++)
                            <td class="border-b border-black text-center">
                                {{ $results[$j]['Total'][$i] }}</td>
                            @endfor
                            {{-- <td class="border-b border-black text-center">
                                {{ $totalData }}</td> --}}
                            <td class="border-b border-black text-center">
                                {{ number_format($weightedTotals[$i], 2) }}</td>
                            <td class="border-b border-r border-black text-center">
                                {{ $labelWeightedTotals[$i] }}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata - Rata</label></td>
                            <td class="border-b border-black text-center font-bold">
                                <label>{{ number_format($averages[1], 2) }}</label>
                            </td>
                            <td class="border-b border-r font-bold border-black text-center">
                                <label>{{ $labels[1] }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-fluid mt-10 mx-auto">
            <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                <div class="card card-primary">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Proses Belajar Mengajar</h3>
                    <canvas id="myChart7" width="500" height="300"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Proses Belajar Mengajar</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><label>No.</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;"><label>Pernyataan</label></th>
                            <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><label>Hasil Survei</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><label>Rata - Rata</label></th>
                            <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;"><label>Kriteria</label></th>
                        </tr>
                        <tr>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 10%;">
                                <label>Sangat Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Baik</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Cukup</label>
                            </th>
                            <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                                <label>Kurang</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 32; $i <= 45; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i-31}}.</td>
                            <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                            @for ($j = 0; $j <= 3; $j++)
                            <td class="border-b border-black text-center">
                                {{ $results[$j]['Total'][$i] }}</td>
                            @endfor
                            {{-- <td class="border-b border-black text-center">
                                {{ $totalData }}</td> --}}
                            <td class="border-b border-black text-center">
                                {{ number_format($weightedTotals[$i], 2) }}</td>
                            <td class="border-b border-r border-black text-center">
                                {{ $labelWeightedTotals[$i] }}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata - Rata</label></td>
                            <td class="border-b border-black text-center font-bold">
                                <label>{{ number_format($averages[1], 2) }}</label>
                            </td>
                            <td class="border-b border-r font-bold border-black text-center">
                                <label>{{ $labels[1] }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var labels = ["{{ $hasil->{'1'} }}",
                "{{ $hasil->{'2'} }}",
                "{{ $hasil->{'3'} }}",
                "{{ $hasil->{'4'} }}",
                "{{ $hasil->{'5'} }}",
                "{{ $hasil->{'6'} }}",
                "{{ $hasil->{'7'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                        "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                            "rgb(253,73,84)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 1];
                        stack:
                            true
                    })
                };
            });
            var config = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            min: 0,
                            max: 100,
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem, index, tooltipItems, data) {
                                    console.log(tooltipItem);
                                    var label = config.data.datasets[tooltipItem.datasetIndex].label;
                                    var val = config.data.datasets[tooltipItem.datasetIndex].data[
                                        tooltipItem.dataIndex];
                                    return label + ': ' + val.toFixed(2) + ' %';
                                }
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart1").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var labels = ["{{ $hasil->{'8'} }}",
                "{{ $hasil->{'9'} }}",
                "{{ $hasil->{'10'} }}",
                "{{ $hasil->{'11'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                        "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                            "rgb(253,73,84)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 8];
                        stack:
                            true
                    })
                };
            });
            var config = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            min: 0,
                            max: 100,
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem, index, tooltipItems, data) {
                                    console.log(tooltipItem);
                                    var label = config.data.datasets[tooltipItem.datasetIndex].label;
                                    var val = config.data.datasets[tooltipItem.datasetIndex].data[
                                        tooltipItem.dataIndex];
                                    return label + ': ' + val.toFixed(2) + ' %';
                                }
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart2").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var labels = ["{{ $hasil->{'12'} }}",
                "{{ $hasil->{'13'} }}",
                "{{ $hasil->{'14'} }}",
                "{{ $hasil->{'15'} }}",
                "{{ $hasil->{'16'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                        "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                            "rgb(253,73,84)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 12];
                        stack:
                            true
                    })
                };
            });
            var config = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            min: 0,
                            max: 100,
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem, index, tooltipItems, data) {
                                    console.log(tooltipItem);
                                    var label = config.data.datasets[tooltipItem.datasetIndex].label;
                                    var val = config.data.datasets[tooltipItem.datasetIndex].data[
                                        tooltipItem.dataIndex];
                                    return label + ': ' + val.toFixed(2) + ' %';
                                }
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart3").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var labels = ["{{ $hasil->{'17'} }}",
                "{{ $hasil->{'18'} }}",
                "{{ $hasil->{'19'} }}",
                "{{ $hasil->{'20'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                        "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                            "rgb(253,73,84)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 17];
                        stack:
                            true
                    })
                };
            });
            var config = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            min: 0,
                            max: 100,
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem, index, tooltipItems, data) {
                                    console.log(tooltipItem);
                                    var label = config.data.datasets[tooltipItem.datasetIndex].label;
                                    var val = config.data.datasets[tooltipItem.datasetIndex].data[
                                        tooltipItem.dataIndex];
                                    return label + ': ' + val.toFixed(2) + ' %';
                                }
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart4").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var labels = ["{{ $hasil->{'21'} }}",
                "{{ $hasil->{'22'} }}",
                "{{ $hasil->{'23'} }}",
                "{{ $hasil->{'24'} }}",
                "{{ $hasil->{'25'} }}",
                "{{ $hasil->{'26'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                        "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                            "rgb(253,73,84)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 21];
                        stack:
                            true
                    })
                };
            });
            var config = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            min: 0,
                            max: 100,
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem, index, tooltipItems, data) {
                                    console.log(tooltipItem);
                                    var label = config.data.datasets[tooltipItem.datasetIndex].label;
                                    var val = config.data.datasets[tooltipItem.datasetIndex].data[
                                        tooltipItem.dataIndex];
                                    return label + ': ' + val.toFixed(2) + ' %';
                                }
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart5").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var labels = ["{{ $hasil->{'27'} }}",
                "{{ $hasil->{'28'} }}",
                "{{ $hasil->{'29'} }}",
                "{{ $hasil->{'30'} }}",
                "{{ $hasil->{'31'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                        "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                            "rgb(253,73,84)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 27];
                        stack:
                            true
                    })
                };
            });
            var config = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            min: 0,
                            max: 100,
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem, index, tooltipItems, data) {
                                    console.log(tooltipItem);
                                    var label = config.data.datasets[tooltipItem.datasetIndex].label;
                                    var val = config.data.datasets[tooltipItem.datasetIndex].data[
                                        tooltipItem.dataIndex];
                                    return label + ': ' + val.toFixed(2) + ' %';
                                }
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart6").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var labels = ["{{ $hasil->{'32'} }}",
                "{{ $hasil->{'33'} }}",
                "{{ $hasil->{'34'} }}",
                "{{ $hasil->{'35'} }}",
                "{{ $hasil->{'36'} }}",
                "{{ $hasil->{'37'} }}",
                "{{ $hasil->{'38'} }}",
                "{{ $hasil->{'39'} }}",
                "{{ $hasil->{'40'} }}",
                "{{ $hasil->{'41'} }}",
                "{{ $hasil->{'42'} }}",
                "{{ $hasil->{'43'} }}",
                "{{ $hasil->{'44'} }}",
                "{{ $hasil->{'45'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                        "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                            "rgb(253,73,84)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 32];
                        stack:
                            true
                    })
                };
            });
            var config = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            min: 0,
                            max: 100,
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem, index, tooltipItems, data) {
                                    console.log(tooltipItem);
                                    var label = config.data.datasets[tooltipItem.datasetIndex].label;
                                    var val = config.data.datasets[tooltipItem.datasetIndex].data[
                                        tooltipItem.dataIndex];
                                    return label + ': ' + val.toFixed(2) + ' %';
                                }
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart7").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
</section>
<script>
    const prodi = document.getElementById('program_studi');
    const prodiForm = document.getElementById('prodiFilter');

    prodi.addEventListener('change', () => {
        prodiForm.submit();
        prodi.style.display = "block";
    })
</script>
@endsection
