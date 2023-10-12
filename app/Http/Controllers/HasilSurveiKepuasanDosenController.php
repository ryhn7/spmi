<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_dosen;
use App\Models\pernyataan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $uniqueYears = kepuasan_dosen::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');

        return view('hasil_survei.hasil_survei_dosen', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears])); // Menggunakan $this->results di sini juga
    }

    public function yearFilter(Request $request)
    {
        $year = $request->year;
        $filteredResults = kepuasan_dosen::whereYear('created_at', $year)->get();

        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 42);
        $filteredResultsCount = $filteredResults->count();
        $filteredAverages = [];
        $filteredTotal = [];

        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_dosen::where("$column", $category)->whereYear('created_at', $year)->count();

                $average = $totalCategory / $filteredResultsCount;

                $averages["$column"] = $average * 100;
                $total["$column"] = $totalCategory;
            }

            $filteredAverages[] = [
                'Category' => $category,
                'Averages' => $averages,
                'Total' => $total,
            ];
        }

        foreach($columns as $column){
            $columnTotal = 0;

            foreach($categories as $category){
                $totalCategory = kepuasan_dosen::where("$column", $category)->whereYear('created_at', $year)->count();

                if($category == 'Sangat Baik'){
                    $columnTotal += $totalCategory * 4;
                } elseif($category == 'Baik'){
                    $columnTotal += $totalCategory * 3;
                } elseif($category == 'Cukup'){
                    $columnTotal += $totalCategory * 2;
                } else {
                    $columnTotal += $totalCategory;
                }
            }

            $filteredWeightedTotals["$column"] = $columnTotal / $filteredResultsCount;
        }

        foreach($columns as $column){
            $label = $filteredWeightedTotals[$column] >= 3.51 ? 'Sangat Baik' : ($filteredWeightedTotals[$column] >= 3.01 ? 'Baik' : ($filteredWeightedTotals[$column] >= 2.51 ? 'Cukup' : 'Kurang'));
            $filteredLabelWeightedTotals["$column"] = $label;
        }

        $columnRanges = [
            ['start' => 0, 'end' => 3], // section 1
            ['start' => 4, 'end' => 8], // section 2
            ['start' => 9, 'end' => 15], // section 3
            ['start' => 16, 'end' => 24], // section 4
            ['start' => 25, 'end' => 31], // section 5
            ['start' => 32, 'end' => 41] // section 6
        ];

        $filteredAverages = [];
        $filteredLabels = [];

        foreach ($columnRanges as $range) {
            $sum = array_sum(array_slice($filteredWeightedTotals, $range['start'], $range['end'] - $range['start'] + 1));
            $count = $range['end'] - $range['start'] + 1;
            $average = $sum / $count;
            $filteredAverages[] = $average;

            // Define labels based on the average
            $label = ($average >= 3.51) ? 'Sangat Baik' : ($average >= 3.01 ? 'Baik' : ($average >= 2.51 ? 'Cukup' : 'Kurang'));
            $filteredLabels[] = $label;
        }

        $filteredResults = [
            'results' => $filteredAverages,
            'weightedTotals' => $filteredWeightedTotals,
            'labelWeightedTotals' => $filteredLabelWeightedTotals,
            'totalData' => $filteredResultsCount,
            'averages' => $filteredAverages,
            'labels' => $filteredLabels,
        ];

        return view('hasil_survei.hasil_survei_dosen', array_merge($this->results, ['filteredResults' => $filteredResults, 'year' => $year]));
        
    }
}
