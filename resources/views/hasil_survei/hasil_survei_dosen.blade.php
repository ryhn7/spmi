@extends('layouts.main')

@section('container')
    <section class="sectionSize bg-white">
        <br><br><br>
        {{-- @dd($final); --}}
        {{-- @dd($results); --}}
        <form id="excel" action="/tesExcel" method="POST">
            @csrf
            <input type="hidden" name="excel" value="{{ json_encode($final) }}">
            <button type="submit">Export excel</button>
        </form>

        <div class="container">
            <div class=" flex justify-center text-2xl mt-10">
                <label class="text-xl font-open font-bold text-center">Hasil Survei Kepuasan Dosen Fakultas Sains dan
                    Matematika</label>
            </div><br>
            <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)"
                class="w-full px-3 overflow-hidden rounded-lg shadow-xs">
                @if (session()->has('error'))
                    <div class="mb-3 inline-flex w-full items-center rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700"
                        role="alert">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <form id="filter" action="/hasildosen/filter" class="py-0.5" method="GET">
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
            <label class="mt-3 text-center justify-center">Total Data: {{ $totalData }}</label>
            <div class="container-fluid mt-10 mx-auto">
                <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <div class="card card-primary">
                        <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Pengelolaan
                            Sumber Daya Manusia</h3>
                        <canvas id="myChart1" width="500" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="card card-primary mt-5">
                <div class="card-header flex justify-center">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Pengelolaan
                        Sumber Daya Manusia</h3>
                </div>
                <div class="card-body">
                    <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;">
                                    <label>No.</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;">
                                    <label>Pernyataan</label></th>
                                <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;">
                                    <label>Hasil Survei</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;">
                                    <label>Rata - Rata</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;">
                                    <label>Kriteria</label></th>
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
                            @for ($i = 1; $i <= 4; $i++)
                                <tr>
                                    <td class="border border-black text-center" style="width: 5%;">{{ $i }}.</td>
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
                                <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata
                                        - Rata</label></td>
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
                        <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                            Pengembangan Kompetensi</h3>
                        <canvas id="myChart2" width="500" height="120"></canvas>
                    </div>
                </div>
            </div>
            <div class="card card-primary mt-5">
                <div class="card-header flex justify-center">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                        Pengembangan Kompetensi</h3>
                </div>
                <div class="card-body">
                    <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;">
                                    <label>No.</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;">
                                    <label>Pernyataan</label></th>
                                <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;">
                                    <label>Hasil Survei</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;">
                                    <label>Rata - Rata</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;">
                                    <label>Kriteria</label></th>
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
                            @for ($i = 5; $i <= 9; $i++)
                                <tr>
                                    <td class="border border-black text-center" style="width: 5%;">{{ $i - 4 }}.
                                    </td>
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
                                <td class="border-l border-b border-black text-center font-bold" colspan="6">
                                    <label>Rata - Rata</label></td>
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
                        <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                            Pengembangan Karir/Jabatan</h3>
                        <canvas id="myChart3" width="500" height="150"></canvas>
                    </div>
                </div>
            </div>
            <div class="card card-primary mt-5">
                <div class="card-header flex justify-center">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                        Pengembangan Karir/Jabatan</h3>
                </div>
                <div class="card-body">
                    <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;">
                                    <label>No.</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;">
                                    <label>Pernyataan</label></th>
                                <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;">
                                    <label>Hasil Survei</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;">
                                    <label>Rata - Rata</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;">
                                    <label>Kriteria</label></th>
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
                            @for ($i = 10; $i <= 16; $i++)
                                <tr>
                                    <td class="border border-black text-center" style="width: 5%;">{{ $i - 9 }}.
                                    </td>
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
                                <td class="border-l border-b border-black text-center font-bold" colspan="6">
                                    <label>Rata - Rata</label></td>
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
                        <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                            Penelitian dan Karya Ilmiah</h3>
                        <canvas id="myChart4" width="500" height="190"></canvas>
                    </div>
                </div>
            </div>
            <div class="card card-primary mt-5">
                <div class="card-header flex justify-center">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                        Penelitian dan Karya Ilmiah</h3>
                </div>
                <div class="card-body">
                    <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;">
                                    <label>No.</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;">
                                    <label>Pernyataan</label></th>
                                <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;">
                                    <label>Hasil Survei</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;">
                                    <label>Rata - Rata</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;">
                                    <label>Kriteria</label></th>
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
                            @for ($i = 17; $i <= 25; $i++)
                                <tr>
                                    <td class="border border-black text-center" style="width: 5%;">{{ $i - 16 }}.
                                    </td>
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
                                <td class="border-l border-b border-black text-center font-bold" colspan="6">
                                    <label>Rata - Rata</label></td>
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
                        <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                            Pengabdian kepada Masyarakat</h3>
                        <canvas id="myChart5" width="500" height="150"></canvas>
                    </div>
                </div>
            </div>
            <div class="card card-primary mt-5">
                <div class="card-header flex justify-center">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                        Pengabdian kepada Masyarakat</h3>
                </div>
                <div class="card-body">
                    <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;">
                                    <label>No.</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;">
                                    <label>Pernyataan</label></th>
                                <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;">
                                    <label>Hasil Survei</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;">
                                    <label>Rata - Rata</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;">
                                    <label>Kriteria</label></th>
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
                            @for ($i = 25; $i <= 31; $i++)
                                <tr>
                                    <td class="border border-black text-center" style="width: 5%;">{{ $i - 24 }}.
                                    </td>
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
                                <td class="border-l border-b border-black text-center font-bold" colspan="6">
                                    <label>Rata - Rata</label></td>
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
                        <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                            Keuangan, Sarana dan Prasarana</h3>
                        <canvas id="myChart6" width="500" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="card card-primary mt-5">
                <div class="card-header flex justify-center">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan
                        Keuangan, Sarana dan Prasarana</h3>
                </div>
                <div class="card-body">
                    <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;">
                                    <label>No.</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;">
                                    <label>Pernyataan</label></th>
                                <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;">
                                    <label>Hasil Survei</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;">
                                    <label>Rata - Rata</label></th>
                                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;">
                                    <label>Kriteria</label></th>
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
                            @for ($i = 31; $i <= 40; $i++)
                                <tr>
                                    <td class="border border-black text-center" style="width: 5%;">{{ $i - 30 }}.
                                    </td>
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
                                <td class="border-l border-b border-black text-center font-bold" colspan="6">
                                    <label>Rata - Rata</label></td>
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
                var labels = [
                    "{{ $hasil->{'5'} }}",
                    "{{ $hasil->{'6'} }}",
                    "{{ $hasil->{'7'} }}",
                    "{{ $hasil->{'8'} }}",
                    "{{ $hasil->{'9'} }}",
                ];
                var datasets = results.map(function(result, index) {
                    return {
                        label: result.Category,
                        backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                            "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                                "rgb(253,73,84)")),
                        data: labels.map(function(label, labelIndex) {
                            return results[index].Averages[labelIndex + 5];
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
                var labels = [
                    "{{ $hasil->{'10'} }}",
                    "{{ $hasil->{'11'} }}",
                    "{{ $hasil->{'12'} }}",
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
                            return results[index].Averages[labelIndex + 10];
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
                var labels = [
                    "{{ $hasil->{'17'} }}",
                    "{{ $hasil->{'18'} }}",
                    "{{ $hasil->{'19'} }}",
                    "{{ $hasil->{'20'} }}",
                    "{{ $hasil->{'21'} }}",
                    "{{ $hasil->{'22'} }}",
                    "{{ $hasil->{'23'} }}",
                    "{{ $hasil->{'24'} }}",
                    "{{ $hasil->{'25'} }}"
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
                var labels = [
                    "{{ $hasil->{'26'} }}",
                    "{{ $hasil->{'27'} }}",
                    "{{ $hasil->{'28'} }}",
                    "{{ $hasil->{'29'} }}",
                    "{{ $hasil->{'30'} }}",
                    "{{ $hasil->{'31'} }}",
                    "{{ $hasil->{'32'} }}"
                ];
                var datasets = results.map(function(result, index) {
                    return {
                        label: result.Category,
                        backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                            "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                                "rgb(253,73,84)")),
                        data: labels.map(function(label, labelIndex) {
                            return results[index].Averages[labelIndex + 26];
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
                var labels = [
                    "{{ $hasil->{'33'} }}",
                    "{{ $hasil->{'34'} }}",
                    "{{ $hasil->{'35'} }}",
                    "{{ $hasil->{'36'} }}",
                    "{{ $hasil->{'37'} }}",
                    "{{ $hasil->{'38'} }}",
                    "{{ $hasil->{'39'} }}",
                    "{{ $hasil->{'40'} }}",
                    "{{ $hasil->{'41'} }}",
                    "{{ $hasil->{'42'} }}"
                ];
                var datasets = results.map(function(result, index) {
                    return {
                        label: result.Category,
                        backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                            "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                                "rgb(253,73,84)")),
                        data: labels.map(function(label, labelIndex) {
                            return results[index].Averages[labelIndex + 33];
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
