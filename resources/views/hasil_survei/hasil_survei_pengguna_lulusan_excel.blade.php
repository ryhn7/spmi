<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- @dd($hasil); --}}
    <h1>
        @if (isset($hasil['tahun']))
            {{ 'Hasil Survei Pengguna Lulusan ' . $hasil['program_studi'] . ' Tahun ' . $hasil['tahun'] }}
        @else
            {{ 'Hasil Survei Pengguna Lulusan' }}
        @endif
    </h1>
    <h3>Survei Kepuasan Mitra Kerjasama</h3>
    <table style="width: 100%;" id="0" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><b>No.</b></th>
                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;">
                    <b>Pernyataan</b>
                </th>
                <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><b>Hasil
                        Survei</b></th>
                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><b>Rata -
                        Rata</b></th>
                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;">
                    <b>Kriteria</b>
                </th>
            </tr>
            <tr>
                <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 10%;">
                    <b>Sangat Baik</b>
                </th>
                <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                    <b>Baik</b>
                </th>
                <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                    <b>Cukup</b>
                </th>
                <th class="bg-[#03051e] text-white text-center border-black py-2" style="width: 8%;">
                    <b>Kurang</b>
                </th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 9; $i++)
                <tr>
                    <td class="border border-black text-center" style="width: 5%;">{{ $i }}.</td>
                    <td class="border-b border-black text-left px-3 py-3">{{ $hasil['hasil'][$i-1] }}</td>
                    @for ($j = 0; $j <= 3; $j++)
                        <td class="border-b border-black text-center">
                            {{ $hasil['results'][$j]['Total'][$i] }}</td>
                    @endfor
                    <td class="border-b border-black text-center">
                        {{ number_format($hasil['weightedTotals'][$i], 2) }}</td>
                    <td class="border-b border-r border-black text-center">
                        {{ $hasil['labelWeightedTotals'][$i] }}</td>
                </tr>
            @endfor
            <tr>
                <td class="border-l border-b border-black text-center font-bold" colspan="6"><b>Rata -
                        Rata</b></td>
                <td class="border-b border-black text-center font-bold">
                    <label>{{ number_format($hasil['averageAll'], 2) }}</label>
                </td>
                <td class="border-b border-r font-bold border-black text-center">
                    <label>{{ $hasil['labelAverageAll'] }}</label>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>
