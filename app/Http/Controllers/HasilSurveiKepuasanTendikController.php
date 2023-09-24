<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_tendik;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilSurveiKepuasanTendikController extends Controller
{
    private $results = []; // Definisikan variabel $results di sini

    public function __construct()
    {
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 45);
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

        foreach ($columns as $column){
            $label = $weightedTotals[$column] >= 3.51 ? 'Sangat Baik' : ($weightedTotals[$column] >= 3.01 ? 'Baik' : ($weightedTotals[$column] >= 2.51 ? 'Cukup' : 'Kurang'));
            $labelWeightedTotals["$column"] = $label;
        }

        // Simpan hasil perhitungan dalam variabel $this->results
        $this->results = [
            'results' => $results,
            'weightedTotals' => $weightedTotals,
            'labelWeightedTotals' => $labelWeightedTotals,
            'totalData' => $totalData,
        ];
    }

    public function index()
    {
        // ...
        return view('hasil_survei.hasil_survei_tendik', $this->results); // Menggunakan $this->results di sini
    }

    public function show()
    {
        $hasil = pertanyaan::where('status', 'pernyataan_tendik')->first();

        if (!$hasil) {
            $hasil = new pertanyaan();
        }

        return view('hasil_survei.hasil_survei_tendik', array_merge($this->results, ['hasil' => $hasil])); // Menggunakan $this->results di sini juga
    }
}
