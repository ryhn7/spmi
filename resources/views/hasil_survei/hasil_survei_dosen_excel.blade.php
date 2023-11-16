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
    @php
        $sections = [
        0 => [
            'name' => 'Survei Kepuasan Terkait Pengelolaan Sumber Daya Manusia',
            'index' => [1, 4],
        ],
        1 => [
            'name' => 'Survei Kepuasan Terkait Layanan Pengembangan Kompetensi',
            'index' => [5, 9],
        ],
        2 => [
            'name' => 'Survei Kepuasan Terkait Layanan Pengembangan Karir/Jabatan',
            'index' => [10, 16],
        ],
        3 => [
            'name' => 'Survei Kepuasan Terkait Layanan Penelitian dan Karya Ilmiah',
            'index' => [17, 25],
        ],
        4 => [
            'name' => 'Survei Kepuasan Terkait Layanan Pengabdian kepada Masyarakat',
            'index' => [26, 32],
        ],
        5 => [
            'name' => 'Survei Kepuasan Terkait Layanan Keuangan, Sarana dan Prasarana',
            'index' => [33, 42],
        ]
        ];
    @endphp
    <h1>
        @if (isset($hasil['tahun']))
            {{ 'Hasil Survei Dosen Tahun ' . $hasil['tahun'] }}
        @else
            {{ 'Hasil Survei Dosen' }}
        @endif
    </h1>
    @foreach ($sections as $sectionNumber => $section)
        @php
            $startNumber = $section['index'][0];
            $endNumber = $section['index'][1];
        @endphp
        <h3>{{ $section['name'] }}</h3>
        <table style="width: 100%;" id="{{ $sectionNumber }}" class="table table-bordered table-striped">
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
                @for ($i = $startNumber; $i <= $endNumber; $i++)
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
                        <label>{{ number_format($hasil['averages'][$sectionNumber], 2) }}</label>
                    </td>
                    <td class="border-b border-r font-bold border-black text-center">
                        <label>{{ $hasil['labels'][$sectionNumber] }}</label>
                    </td>
                </tr>
            </tbody>
        </table>
    @endforeach

</body>

</html>
