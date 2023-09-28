@extends('layouts.main')

@section('container')
    <br><br><br><br><br><br>
    {{-- @dd($results); --}}
    <div class="container">
        <div class=" flex justify-center text-2xl">
            <strong>Hasil Survei Kepuasan Mahasiswa Fakultas Sains dan Matematika Tahun 2020</strong>
        </div>
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Keandalan (Reliability)</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart1" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Keandalan (Reliability)</h3>
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
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'1'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][1] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][1] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][1] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][1] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[1], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[1] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'2'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][2] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][2] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][2] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][2] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[2], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[2] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'3'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][3] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][3] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][3] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][3] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[3], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[3] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'4'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][4] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][4] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][4] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][4] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[4], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[4] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'5'} }}</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;"
                                colspan="7"><strong>Rata - Rata</strong></td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ number_format($averages[0], 2) }}</strong>
                            </td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ $labels[0] }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

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
                <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Daya Tanggap (Responsiveness)</h3>
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
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'6'} }}</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'7'} }}</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'8'} }}</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'9'} }}</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'10'} }}</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">6.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'11'} }}</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">7.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">{{$hasil->{'12'} }}</td>
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
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var labels = ["{{$hasil->{'1'} }}",
                "{{$hasil->{'2'} }}",
                "{{$hasil->{'3'} }}",
                "{{$hasil->{'4'} }}",
                "{{$hasil->{'5'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? "rgba(0, 255, 0, 0.7)" : (index == 1 ?
                        "rgba(0, 0, 255, 0.7)" : (index == 2 ? "rgba(255, 128, 0, 0.7)" :
                            "rgba(255, 0, 0, 0.7)")),
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
                            stacked: true,
                            ticks: {
                                min: 0,
                                max: 100,
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        },
                        y: {
                            stacked: true
                        }
                    },
                    tooltips: {
                        enabled: true,
                        mode: 'label',
                        callbacks: {
                            label: function(tooltipItems, data) {
                                return data.datasets[tooltipItems.datasetIndex].label + ': ' + tooltipItems
                                    .xLabel.toFixed(2) + ' %';
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
            var labels = ["{{$hasil->{'6'} }}",
                "{{$hasil->{'7'} }}",
                "{{$hasil->{'8'} }}",
                "{{$hasil->{'9'} }}",
                "{{$hasil->{'10'} }}",
                "{{$hasil->{'11'} }}",
                "{{$hasil->{'12'} }}"
            ];
            var datasets = results.map(function(result, index) {
                return {
                    label: result.Category,
                    backgroundColor: index == 0 ? "rgba(0, 255, 0, 0.7)" : (index == 1 ?
                        "rgba(0, 0, 255, 0.7)" : (index == 2 ? "rgba(255, 128, 0, 0.7)" :
                            "rgba(255, 0, 0, 0.7)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 7];
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
                    tooltips: {
                        enabled: true,
                        mode: 'label',
                        callbacks: {
                            label: function(tooltipItems, data) {
                                return data.datasets[tooltipItems.datasetIndex].label + ': ' + tooltipItems
                                    .xLabel.toFixed(2) + ' %';
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart2").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
@endsection
