@extends('layouts.main')

@section('container')
    <br><br><br><br><br><br>
    <div class="container">
        <h1>Hasil Survei Kepuasan Dosen Fakultas Sains dan Matematika Tahun 2020</h1>
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Survei Kepuasan Dosen Terhadap Pengelolaan Sumber Daya Manusia</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart1" width="500" height="98"></canvas>
                </div>
            </div>
        </div>
        {{-- @foreach ($results as $result)
            <h2>Category: {{ $result['Category'] }}</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Column</th>
                        <th>Average</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result['Averages'] as $column => $average)
                        <tr>
                            <td>{{ $column }}</td>
                            <td>{{ number_format($average, 2) }}%</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script>
        var results = @json($results);
        if (results.length > 0){
            window.onload = function() {
                var config = {
                    type: 'horizontalBar',
                    data: {
                        labels: ["Ketegasan pimpinan dalam melaksanakan sistem pengelolaan SDM",
                            "Sistem rekrutmen dosen yang dilakukan Fakultas Sains dan Matematika",
                            "Sistem seleksi dosen yang dilaksanakan di Fakultas Sains dan Matematika",
                            "Penempatan dosen di Fakultas Sains dan Matematika"
                        ],
                        datasets: [{
                            label: "Sangat Baik",
                            backgroundColor: "rgba(0, 255, 0, 0.7)",
                            data: [$results[0]['Averages'][1], $results[0]['Averages'][2], $results[0][
                                'Averages'
                            ][3], $results[0]['Averages'][4]],
                        }, {
                            label: "Baik",
                            backgroundColor: "rgba(0, 0, 255, 0.7)",
                            data: [$results[1]['Averages'][1], $results[1]['Averages'][2], $results[1][
                                'Averages'
                            ][3], $results[1]['Averages'][4]]
                        }, {
                            label: "Cukup",
                            backgroundColor: "rgba(255, 128, 0, 0.7)",
                            data: [$results[2]['Averages'][1], $results[2]['Averages'][2], $results[2][
                                'Averages'
                            ][3], $results[2]['Averages'][4]]
                        }, {
                            label: "Kurang",
                            backgroundColor: "rgba(255, 0, 0, 0.7)",
                            data: [$results[4]['Averages'][1], $results[4]['Averages'][2], $results[4][
                                'Averages'
                            ][3], $results[4]['Averages'][4]]
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            xAxes: [{
                                stacked: true,
                                ticks: {
                                    min: 0,
                                    max: 100,
                                    callback: function(value) {
                                        return value + "%"
                                    }
                                }
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        },
                        tooltips: {
                            enabled: true,
                            mode: 'label',
                            callbacks: {
                                label: function(tooltipItems, data) {
                                    return data.datasets[tooltipItems.datasetIndex].label + ': ' + tooltipItems
                                        .xLabel + ' %';
                                }
                            }
                        }
                    }
                };
                var ctx = document.getElementById("myChart1").getContext("2d");
                new Chart(ctx, config);
            }
        }
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var results = @json($results);
            var config = {
                type: 'horizontalBar',
                data: {
                    labels: ["Ketegasan pimpinan dalam melaksanakan sistem pengelolaan SDM",
                        "Sistem rekrutmen dosen yang dilakukan Fakultas Sains dan Matematika",
                        "Sistem seleksi dosen yang dilaksanakan di Fakultas Sains dan Matematika",
                        "Penempatan dosen di Fakultas Sains dan Matematika"
                    ],
                    datasets: [{
                        label: "Sangat Baik",
                        backgroundColor: "rgba(0, 255, 0, 0.7)",
                        data: [$results[0]['Averages'][1], $results[0]['Averages'][2], $results[
                            0][
                            'Averages'
                        ][3], $results[0]['Averages'][4]],
                    }, {
                        label: "Baik",
                        backgroundColor: "rgba(0, 0, 255, 0.7)",
                        data: [$results[1]['Averages'][1], $results[1]['Averages'][2], $results[
                            1][
                            'Averages'
                        ][3], $results[1]['Averages'][4]]
                    }, {
                        label: "Cukup",
                        backgroundColor: "rgba(255, 128, 0, 0.7)",
                        data: [$results[2]['Averages'][1], $results[2]['Averages'][2], $results[
                            2][
                            'Averages'
                        ][3], $results[2]['Averages'][4]]
                    }, {
                        label: "Kurang",
                        backgroundColor: "rgba(255, 0, 0, 0.7)",
                        data: [$results[4]['Averages'][1], $results[4]['Averages'][2], $results[
                            4][
                            'Averages'
                        ][3], $results[4]['Averages'][4]]
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                            ticks: {
                                min: 0,
                                max: 100,
                                callback: function(value) {
                                    return value + "%"
                                }
                            }
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    },
                    tooltips: {
                        enabled: true,
                        mode: 'label',
                        callbacks: {
                            label: function(tooltipItems, data) {
                                return data.datasets[tooltipItems.datasetIndex].label + ': ' +
                                    tooltipItems
                                    .xLabel + ' %';
                            }
                        }
                    }
                }
            };
            var ctx = document.getElementById("myChart1").getContext("2d");
            new Chart(ctx, config);
        });
    </script>
@endsection
