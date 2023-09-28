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
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'1'} }}</td>
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
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'2'} }}</td>
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
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'3'} }}</td>
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
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'4'} }}</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">6.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">7.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
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
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Kepastian (Assurance)</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart3" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Kepastian (Assurance)</h3>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
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
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Empati (Empathy)</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart4" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Empati (Empathy)</h3>
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
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap (Tangible)</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart5" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap (Tangible)</h3>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">6.</td>
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
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Ketersediaan Layanan Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart6" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Ketersediaan Layanan Mahasiswa</h3>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
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
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="card-header flex justify-center">
                    <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Proses Belajar Mengajar</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart7" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="card-title">Survei Kepuasan Mahasiswa Terhadap Proses Belajar Mengajar</h3>
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
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">2.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">3.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">4.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">5.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">6.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">7.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">8.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">9.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">10.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">11.</td>
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
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">12.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'43'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][43] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][43] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][43] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][43] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[43], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[43] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">13.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'44'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][44] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][44] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][44] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][44] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[44], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[44] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;">14.</td>
                            <td style="width: 25%; text-align: justify; padding-left: 1px; padding-right: 1px;">
                                {{ $hasil->{'45'} }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[0]['Total'][45] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[1]['Total'][45] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[2]['Total'][45] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $results[3]['Total'][45] }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $totalData }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ number_format($weightedTotals[45], 2) }}</td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                {{ $labelWeightedTotals[45] }}</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; padding-left: 1px; padding-right: 1px;"
                                colspan="7"><strong>Rata - Rata</strong></td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ number_format($averages[6], 2) }}</strong>
                            </td>
                            <td
                                style="width: 10%; text-align: center; vertical-align: middle; padding-left: 1px; padding-right: 1px;">
                                <strong>{{ $labels[6] }}</strong>
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
            var ctx = document.getElementById("myChart7").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
@endsection
