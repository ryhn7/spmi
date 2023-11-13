<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table style="width: 100%;" id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 5%;"><label>No.</label></th>
                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 25%;">
                    <label>Pernyataan</label>
                </th>
                <th colspan="4" class="bg-[#03051e] text-white text-center pt-3" style="width: 32%;"><label>Hasil
                        Survei</label></th>
                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 10%;"><label>Rata -
                        Rata</label></th>
                <th rowspan="2" class="bg-[#03051e] text-white text-center" style="width: 12%;">
                    <label>Kriteria</label>
                </th>
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
                    <td class="border-b border-black text-left px-3 py-3">{{ $hasil['hasil'][$i] }}</td>
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
                <td class="border-l border-b border-black text-center font-bold" colspan="6"><label>Rata -
                        Rata</label></td>
                <td class="border-b border-black text-center font-bold">
                    <label>{{ number_format($hasil['averages'][1], 2) }}</label>
                </td>
                <td class="border-b border-r font-bold border-black text-center">
                    <label>{{ $hasil['labels'][1] }}</label>
                </td>
            </tr>

        </tbody>
    </table>

</body>

</html>

