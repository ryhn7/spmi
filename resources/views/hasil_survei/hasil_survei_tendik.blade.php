@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <br><br><br>
    {{-- @dd($results); --}}
    <div class="container">
        <div class=" flex justify-center text-2xl mt-10">
            <label class="text-xl font-open font-bold text-center">Hasil Survei Kepuasan Tenaga Pendidik Fakultas Sains dan Matematika</label>
        </div> <br>
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
        <form id="filter" action="/hasiltendik/filter" class="py-0.5" method="GET">
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
            <label class="mt-3">Lokasi:</label>
            <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                <select name="lokasi" id="lokasi"
                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Pilih Lokasi</option>
                <option value="Fakultas"
                    {{ request('lokasi') == 'Fakultas' ? 'selected' : '' }}>FAKULTAS SAINS DAN MATEMATIKA</option>
                <option value="Biologi"
                    {{ request('lokasi') == 'Biologi' ? 'selected' : '' }}>DEPARTEMEN BIOLOGI</option>
                <option value="Fisika" {{ request('lokasi') == 'Fisika' ? 'selected' : '' }}> DEPARTEMEN FISIKA
                    </option>
                <option value="Informatika"
                    {{ request('lokasi') == 'Informatika' ? 'selected' : '' }}>DEPARTEMEN INFORMATIKA
                </option>
                <option value="Kimia" {{ request('lokasi') == 'Kimia' ? 'selected' : '' }}> DEPARTEMEN KIMIA
                    </option>
                <option value="Matematika"
                    {{ request('lokasi') == 'Matematika' ? 'selected' : '' }}>DEPARTEMEN MATEMATIKA
                </option>
                <option value="Statistika"
                    {{ request('lokasi') == 'Statistika' ? 'selected' : '' }}>DEPARTEMEN STATISTIKA
                </option>
            </select>
        </label>
        </form>
        <label class="mt-3 text-center justify-center">Total Data: {{ $totalData }}</label>
        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Mahasiswa Terhadap Keandalan (Reliability)</h3>
                    <canvas id="myChart1" width="500" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center">Survei Kepuasan Mahasiswa Terhadap Keandalan (Reliability)</h3>
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
                        @for ($i = 1; $i <= 5; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i }}.</td>
                        <td class="border-b border-black text-left px-3 py-3">{{ $hasil->{$i} }}</td>
                            @for ($j = 0; $j < 4; $j++)
                            <td class="border-b border-black text-center">
                                {{ $results[$j]['Total'][$i] }}</td>
                            @endfor
                            <td class="border-b border-black text-center">
                                {{ number_format($weightedTotals[$i], 2) }}</td>
                            <td class="border-b border-r border-black text-center">
                                {{ $labelWeightedTotals[$i] }}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td class="border-l border-b border-black text-center font-bold" colspan="6"><strong>Rata -
                                    Rata</strong></td>
                            <td class="border-b border-black text-center font-bold">
                                <strong>{{ number_format($averages[0], 2) }}</strong>
                            </td>
                            <td class="border-b border-r border-black text-center font-bold">
                                <strong>{{ $labels[0] }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>

        <div class="container-fluid mt-10 mx-auto">
            <div class="card card-primary">
                <div class="select-none rounded-lg border border-gray-100 p-6 shadow-lg ">
                    <h3 class="text-l font-open font-bold text-center mb-2">Survei Kepuasan Dosen Terhadap Layanan Pengembangan Kompetensi</h3>
                    <canvas id="myChart2" width="500" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="card card-primary mt-5">
            <div class="card-header flex justify-center">
                <h3 class="text-l font-open font-bold text-center">Survei Kepuasan Dosen Terhadap Layanan Pengembangan Kompetensi</h3>
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
                        @for ($i = 6; $i <= 12; $i++)
                        <tr>
                            <td class="border border-black text-center" style="width: 5%;">{{ $i - 5 }}.</td>
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
                    backgroundColor: index == 0 ? " rgb(1,143,95)" : (index == 1 ?
                        "rgb(1,191,127)" : (index == 2 ? "rgb(251,168,28)" :
                            "rgb(253,73,84)")),
                    data: labels.map(function(label, labelIndex) {
                        return results[index].Averages[labelIndex + 6];
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
    const lokasi = document.getElementById('lokasi');
    const tahun = document.getElementById('tahun');
    const form = document.getElementById('filter');

        tahun.addEventListener('change', () => {
            // Cek apakah tahun dan lokasi sudah terpilih
            tahun.style.display = "block";
            if (tahun.value && lokasi.value) {
                form.submit();
            }
        })

        lokasi.addEventListener('change', () => {
            // Cek apakah tahun dan lokasi sudah terpilih
            tahun.style.display = "block";
            if (tahun.value && lokasi.value) {
                form.submit();
            }
        })
    </script>
</section>
@endsection
