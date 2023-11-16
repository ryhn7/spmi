<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_tendik;
use App\Models\pernyataan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\TendikExport;
use Maatwebsite\Excel\Facades\Excel;

class HasilSurveiKepuasanTendikController extends Controller
{
    private $results = []; // Definisikan variabel $results di sini

    public function __construct()
    {
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 12);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_tendik::count();

        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_tendik::where("$column", $category)->count();

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
                $totalCategory = kepuasan_tendik::where("$column", $category)->count();

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
        // //get 2 average from weightedTotals, fisrt 5 column and last 7 column
        // $average1 = array_sum(array_slice($weightedTotals, 0, 5)) / count(array_slice($weightedTotals, 0, 5));
        // $average2 = array_sum(array_slice($weightedTotals, 5, 7)) / count(array_slice($weightedTotals, 5, 7));

        // //make label to average1 and average2
        // $labelAverage1 = $average1 >= 3.51 ? 'Sangat Baik' : ($average1 >= 3.01 ? 'Baik' : ($average1 >= 2.51 ? 'Cukup' : 'Kurang'));
        // $labelAverage2 = $average2 >= 3.51 ? 'Sangat Baik' : ($average2 >= 3.01 ? 'Baik' : ($average2 >= 2.51 ? 'Cukup' : 'Kurang'));

        $columnRanges = [
            ['start' => 0, 'end' => 4],
            // section 1
            ['start' => 5, 'end' => 11] // section 2
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

    public function filter(Request $request)
    {
        $tahun = $request->input('tahun');
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 12);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_tendik::whereYear('date_time', $tahun)->count();
        if($totalData == 0){
            return redirect('/hasiltendik')->with('error', 'Hasil Survei Tidak Ditemukan');
        }

        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_tendik::whereYear('date_time', $tahun)->where("$column", $category)->count();

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
                $totalCategory = kepuasan_tendik::whereYear('date_time', $tahun)->where("$column", $category)->count();

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
        // //get 2 average from weightedTotals, fisrt 5 column and last 7 column
        // $average1 = array_sum(array_slice($weightedTotals, 0, 5)) / count(array_slice($weightedTotals, 0, 5));
        // $average2 = array_sum(array_slice($weightedTotals, 5, 7)) / count(array_slice($weightedTotals, 5, 7));

        // //make label to average1 and average2
        // $labelAverage1 = $average1 >= 3.51 ? 'Sangat Baik' : ($average1 >= 3.01 ? 'Baik' : ($average1 >= 2.51 ? 'Cukup' : 'Kurang'));
        // $labelAverage2 = $average2 >= 3.51 ? 'Sangat Baik' : ($average2 >= 3.01 ? 'Baik' : ($average2 >= 2.51 ? 'Cukup' : 'Kurang'));

        $columnRanges = [
            ['start' => 0, 'end' => 4],
            // section 1
            ['start' => 5, 'end' => 11] // section 2
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
        $hasil = pernyataan::where('status', 'pernyataan_tendik')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_tendik::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);

        return view('hasil_survei.hasil_survei_tendik', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears, 'final' => $final]));

    }

    public function index()
    {
        // ...
        return view('hasil_survei.hasil_survei_tendik', $this->results); // Menggunakan $this->results di sini
    }

    public function show()
    {
        $hasil = pernyataan::where('status', 'pernyataan_tendik')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_tendik::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);

        return view('hasil_survei.hasil_survei_tendik', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears, 'final' => $final])); // Menggunakan $this->results di sini juga
    }

    public function cetak_excel(Request $request)
    {
        // dd($request->all());
        
        $hasil = pernyataan::where('status', 'pernyataan_tendik')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_tendik::selectRaw('YEAR(date_time) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');

        // $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);
        $final = json_decode($request->input('excel'), true);

        // dd($final);

        return Excel::download(new TendikExport($final), 'Hasil Survei Tenaga Kependidikan Tahun ' . $final['tahun'] . '.xlsx');
    }
}