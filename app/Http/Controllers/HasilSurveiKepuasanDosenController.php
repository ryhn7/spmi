<?php

namespace App\Http\Controllers;
use App\Models\kepuasan_dosen;
use App\Models\pernyataan;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Exports\DosenExport;
use Maatwebsite\Excel\Facades\Excel;

class HasilSurveiKepuasanDosenController extends Controller
{
    private $results = []; // Definisikan variabel $results di sini

    public function __construct()
    {
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 42);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_dosen::count();

        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_dosen::where("$column", $category)->count();

                $average = $totalCategory / $totalData;

                $averages["$column"] = $average * 100;
                $total["$column"] = $totalCategory;
            }

            $results[] = [
                'Category' => $category,
                'Averages' => $averages,
                'Total' => $total,
            ];
        }

        foreach ($columns as $column) {
            $columnTotal = 0;

            foreach ($categories as $category) {
                $totalCategory = kepuasan_dosen::where("$column", $category)->count();

                if ($category == 'Sangat Baik') {
                    $columnTotal += $totalCategory * 4;
                } elseif ($category == 'Baik') {
                    $columnTotal += $totalCategory * 3;
                } elseif ($category == 'Cukup') {
                    $columnTotal += $totalCategory * 2;
                } else {
                    $columnTotal += $totalCategory;
                }
            }

            $weightedTotals["$column"] = $columnTotal / $totalData;
        }

        foreach ($columns as $column) {
            $label = $weightedTotals[$column] >= 3.51 ? 'Sangat Baik' : ($weightedTotals[$column] >= 3.01 ? 'Baik' : ($weightedTotals[$column] >= 2.51 ? 'Cukup' : 'Kurang'));
            $labelWeightedTotals["$column"] = $label;
        }

        $columnRanges = [
            ['start' => 0, 'end' => 3],
            // section 1
            ['start' => 4, 'end' => 8],
            // section 2
            ['start' => 9, 'end' => 15],
            // section 3
            ['start' => 16, 'end' => 24],
            // section 4
            ['start' => 25, 'end' => 31],
            // section 5
            ['start' => 32, 'end' => 41] // section 6
        ];

        $averages = [];
        $labels = [];

        foreach ($columnRanges as $range) {
            $sum = array_sum(array_slice($weightedTotals, $range['start'], $range['end'] - $range['start'] + 1));
            $count = $range['end'] - $range['start'] + 1;
            $average = $sum / $count;
            $averages[] = $average;

            // Define labels based on the average
            $label = ($average >= 3.51) ? 'Sangat Baik' : ($average >= 3.01 ? 'Baik' : ($average >= 2.51 ? 'Cukup' : 'Kurang'));
            $labels[] = $label;
        }

        // Simpan hasil perhitungan dalam variabel $this->results
        $this->results = [
            'results' => $results,
            'weightedTotals' => $weightedTotals,
            'labelWeightedTotals' => $labelWeightedTotals,
            'totalData' => $totalData,
            'averages' => $averages,
            'labels' => $labels,
        ];
    }

    public function index()
    {
        // ...
        return view('hasil_survei.hasil_survei_dosen', $this->results); // Menggunakan $this->results di sini
    }

    public function show()
    {
        $hasil = pernyataan::where('status', 'pernyataan_dosen')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_dosen::selectRaw('YEAR(date_time) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);

        return view('hasil_survei.hasil_survei_dosen', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears, 'final' => $final])); // Menggunakan $this->results di sini juga
    }

    public function cetak_excel(Request $request)
    {
        // dd($request->all());
        
        $hasil = pernyataan::where('status', 'pernyataan_dosen')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_dosen::selectRaw('YEAR(date_time) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');

        // $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);
        $final = json_decode($request->input('excel'), true);

        
        if (isset($final['tahun'])){
            return Excel::download(new DosenExport($final), 'Hasil Survei Dosen Tahun ' . $final['tahun'] . '.xlsx');
        }
        else{
            return Excel::download(new DosenExport($final), 'Hasil Survei Dosen.xlsx');
        }
        
    }

    public function Filter(Request $request)
    {
        $tahun = $request->input('tahun');
        // dd($tahun);
        // dd($programStudi);
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 42);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_dosen::whereYear('date_time', $tahun)->count();
        if ($totalData == 0) {
            return redirect('/hasildosen')->with('error', 'Hasil Survei Tidak Ditemukan');
        }
        // dd($totalData);
        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_dosen::whereYear('date_time', $tahun)->where("$column", $category)->count();

                $average = $totalCategory / $totalData;

                $averages["$column"] = $average * 100;
                $total["$column"] = $totalCategory;
            }

            $results[] = [
                'Category' => $category,
                'Averages' => $averages,
                'Total' => $total,
            ];
        }

        foreach ($columns as $column) {
            $columnTotal = 0;

            foreach ($categories as $category) {
                $totalCategory = kepuasan_dosen::whereYear('date_time', $tahun)->where("$column", $category)->count();

                if ($category == 'Sangat Baik') {
                    $columnTotal += $totalCategory * 4;
                } elseif ($category == 'Baik') {
                    $columnTotal += $totalCategory * 3;
                } elseif ($category == 'Cukup') {
                    $columnTotal += $totalCategory * 2;
                } else {
                    $columnTotal += $totalCategory;
                }
            }

            $weightedTotals["$column"] = $columnTotal / $totalData;
        }

        foreach ($columns as $column) {
            $label = $weightedTotals[$column] >= 3.51 ? 'Sangat Baik' : ($weightedTotals[$column] >= 3.01 ? 'Baik' : ($weightedTotals[$column] >= 2.51 ? 'Cukup' : 'Kurang'));
            $labelWeightedTotals["$column"] = $label;
        }

        $columnRanges = [
            ['start' => 0, 'end' => 3],
            // section 1
            ['start' => 4, 'end' => 8],
            // section 2
            ['start' => 9, 'end' => 15],
            // section 3
            ['start' => 16, 'end' => 24],
            // section 4
            ['start' => 25, 'end' => 31],
            // section 5
            ['start' => 32, 'end' => 41] // section 6
        ];

        $averages = [];
        $labels = [];

        foreach ($columnRanges as $range) {
            $sum = array_sum(array_slice($weightedTotals, $range['start'], $range['end'] - $range['start'] + 1));
            $count = $range['end'] - $range['start'] + 1;
            $average = $sum / $count;
            $averages[] = $average;

            // Define labels based on the average
            $label = ($average >= 3.51) ? 'Sangat Baik' : ($average >= 3.01 ? 'Baik' : ($average >= 2.51 ? 'Cukup' : 'Kurang'));
            $labels[] = $label;
        }

        // Simpan hasil perhitungan dalam variabel $this->results
        $this->results = [
            'results' => $results,
            'weightedTotals' => $weightedTotals,
            'labelWeightedTotals' => $labelWeightedTotals,
            'totalData' => $totalData,
            'averages' => $averages,
            'labels' => $labels,
            'tahun' => $tahun
        ];
        $hasil = pernyataan::where('status', 'pernyataan_dosen')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_dosen::selectRaw('YEAR(date_time) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);

        return view('hasil_survei.hasil_survei_dosen', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears, 'final' => $final]));
    }


}
