@extends('layouts.main')

@section('container')
    <br><br><br><br><br><br>
    {{-- @dd($results); --}}
    <div class="container">
        <div class=" flex justify-center text-2xl">
            <strong>Hasil Survei Kepuasan Dosen Fakultas Sains dan Matematika</strong>
        </div>
        //section 1
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Dosen Terhadap Pengelolaan Sumber Daya Manusia</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart1" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Dosen Terhadap Pengelolaan Sumber Daya Manusia</h3>
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
                        @for ($i = 1; $i <= 4; $i++)
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
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><strong>Rata - Rata</strong></td>
                            <td class="border-b border-black text-center font-bold">
                                <strong>{{ number_format($averages[1], 2) }}</strong>
                            </td>
                            <td class="border-b border-r font-bold border-black text-center">
                                <strong>{{ $labels[1] }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        //section 2
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Pengembangan Kompetensi</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart2" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Pengembangan Kompetensi</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>No.</strong></th>
                            <th style="width: 25%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Pernyataan</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                colspan="4"><strong>Hasil Survei</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Jumlah Responden</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Rata - Rata</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Kriteria</strong></th>
                        </tr>
                        <tr>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Sangat Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Cukup</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Kurang</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">1.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'5'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][5] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][5] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][5] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][5] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[5], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[5] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'6'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][6] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][6] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][6] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][6] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[6], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[6] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'7'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][7] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][7] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][7] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][7] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[7], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[7] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'8'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][8] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][8] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][8] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][8] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[8], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[8] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'9'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][9] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][9] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][9] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][9] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[9], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[9] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;"
                                colspan="7"><strong>Rata - Rata</strong></td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ number_format($averages[1], 2) }}</strong>
                            </td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ $labels[1] }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        //section 3
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Pengembangan Karir/Jabatan</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart3" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Pengembangan Karir/Jabatan</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>No.</strong></th>
                            <th style="width: 25%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Pernyataan</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                colspan="4"><strong>Hasil Survei</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Jumlah Responden</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Rata - Rata</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Kriteria</strong></th>
                        </tr>
                        <tr>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Sangat Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Cukup</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Kurang</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">1.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'10'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][10] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][10] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][10] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][10] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[10], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[10] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'11'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][11] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][11] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][11] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][11] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[11], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[11] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'12'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][12] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][12] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][12] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][12] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[12], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[12] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'13'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][13] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][13] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][13] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][13] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[13], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[13] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'14'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][14] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][14] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][14] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][14] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[14], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[14] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">6.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'15'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][15] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][15] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][15] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][15] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[15], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[15] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">7.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'16'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][16] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][16] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][16] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][16] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[16], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[16] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;"
                                colspan="7"><strong>Rata - Rata</strong></td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ number_format($averages[2], 2) }}</strong>
                            </td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ $labels[2] }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        //section 4
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Penelitian dan Karya Ilmiah</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart4" width="500" height="183"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Penelitian dan Karya Ilmiah</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>No.</strong></th>
                            <th style="width: 25%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Pernyataan</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                colspan="4"><strong>Hasil Survei</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Jumlah Responden</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Rata - Rata</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Kriteria</strong></th>
                        </tr>
                        <tr>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Sangat Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Cukup</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Kurang</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">1.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'17'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][17] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][17] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][17] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][17] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[17], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[17] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'18'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][18] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][18] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][18] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][18] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[18], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[18] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'19'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][19] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][19] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][19] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][19] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[19], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[19] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'20'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][20] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][20] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][20] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][20] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[20], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[20] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'21'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][21] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][21] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][21] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][21] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[21], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[21] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">6.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'22'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][22] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][22] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][22] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][22] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[22], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[22] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">7.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'23'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][23] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][23] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][23] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][23] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[23], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[23] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">8.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'24'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][24] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][24] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][24] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][24] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[24], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[24] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">9.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'25'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][25] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][25] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][25] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][25] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[25], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[25] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;"
                                colspan="7"><strong>Rata - Rata</strong></td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ number_format($averages[3], 2) }}</strong>
                            </td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ $labels[3] }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        //section 5
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Pengabdian kepada Masyarakat</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart5" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Pengabdian kepada Masyarakat</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>No.</strong></th>
                            <th style="width: 25%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Pernyataan</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                colspan="4"><strong>Hasil Survei</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Jumlah Responden</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Rata - Rata</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Kriteria</strong></th>
                        </tr>
                        <tr>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Sangat Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Cukup</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Kurang</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">1.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'26'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][26] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][26] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][26] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][26] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[26], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[26] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'27'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][27] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][27] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][27] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][27] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[27], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[27] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'28'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][28] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][28] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][28] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][28] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[28], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[28] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'29'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][29] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][29] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][29] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][29] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[29], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[29] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'30'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][30] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][30] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][30] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][30] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[30], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[30] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">6.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'31'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][31] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][31] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][31] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][31] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[31], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[31] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">7.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'32'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][32] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][32] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][32] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][32] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[32], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[32] }}</td>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;"
                                colspan="7"><strong>Rata - Rata</strong></td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ number_format($averages[4], 2) }}</strong>
                            </td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ $labels[4] }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        //section 6
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Keuangan, Sarana dan Prasarana</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart6" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Dosen Terhadap Layanan Keuangan, Sarana dan Prasarana</h3>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>No.</strong></th>
                            <th style="width: 25%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Pernyataan</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                colspan="4"><strong>Hasil Survei</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Jumlah Responden</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Rata - Rata</strong></th>
                            <th style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;"
                                rowspan="2"><strong>Kriteria</strong></th>
                        </tr>
                        <tr>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Sangat Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Baik</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Cukup</strong>
                            </th>
                            <th
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>Kurang</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">1.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'33'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][33] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][33] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][33] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][33] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[33], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[33] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'34'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][34] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][34] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][34] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][34] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[34], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[34] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'35'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][35] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][35] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][35] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][35] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[35], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[35] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'36'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][36] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][36] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][36] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][36] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[36], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[36] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'37'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][37] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][37] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][37] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][37] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[37], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[37] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">6.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'38'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][38] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][38] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][38] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][38] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[38], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[38] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">7.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'39'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][39] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][39] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][39] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][39] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[39], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[39] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">8.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'40'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][40] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][40] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][40] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][40] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[40], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[40] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">9.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'41'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][41] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][41] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][41] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][41] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[41], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[41] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">10.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'42'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][42] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][42] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][42] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][42] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[42], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[42] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;"
                                colspan="7"><strong>Rata - Rata</strong></td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ number_format($averages[5], 2) }}</strong>
                            </td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ $labels[5] }}</strong>
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
@endsection
