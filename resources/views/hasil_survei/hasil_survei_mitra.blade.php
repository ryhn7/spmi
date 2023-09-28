@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white"> 
<br><br><br>
<div class="container">
    <div class=" flex justify-center text-2xl mt-10">
        <label class="text-xl font-open font-bold text-center">Hasil Survei Kepuasan Mitra Kerjasama Fakultas Sains dan Matematika</label>
    </div>
    <div class="container-fluid mt-10 mx-auto">
        <div class="card card-primary">
            <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mitra Kerjasama</h3>
                <canvas id="myChart1" width="500" height="250"></canvas>
            </div>
        </div>
    </div>
    <div class="card card-primary mt-5">
        <div class="card-header flex justify-center">
            <h3 class="text-l font-open font-bold text-center">Survei Kepuasan Mitra Kerjasama</h3><br>
        </div>
        <div>
            <h3 class="text-l font-open text-center mb-2">Jumlah data: {{ $totalData }}</h3>
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
                    @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td class="border border-black text-center" style="width: 5%;">{{ $i }}.</td>
                        <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                        @foreach ($results as $result)
                        <td class="border-b border-black text-center">
                            {{ $result['Total'][$i] }}
                        </td>
                        @endforeach
                        <td class="border-b border-black text-center">
                            {{ number_format($weightedTotals[$i], 2) }}
                        </td>
                        <td class="border-b border-r border-black text-center">
                            {{ $labelWeightedTotals[$i] }}
                        </td>
                    </tr>
                    @endfor

                    <tr>
                        <td class="border-l border-b border-black text-center font-bold" colspan="6">
                            <label>Rata - Rata</label>
                        </td>
                        <td class="border-b border-black text-center font-bold">
                            <label>{{ number_format($averageAll, 2) }}</label>
                        </td>
                        <td class="border-b border-r border-black text-center font-bold">
                            <label>{{ $labelAverageAll }}</label>
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
            "{{ $hasil->{'7'} }}",
            "{{ $hasil->{'8'} }}",
            "{{ $hasil->{'9'} }}",
            "{{ $hasil->{'10'} }}"
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
</section>
@endsection