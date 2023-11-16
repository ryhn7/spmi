<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_mitra_kerjasama;
use App\Models\pernyataan;
use Illuminate\Http\Request;
use App\Exports\MitraExport;
use Maatwebsite\Excel\Facades\Excel;

class HasilSurveiKepuasanMitraController extends Controller
{

    private $results = []; // Definisikan variabel $results di sini 

    public function __construct()
    {
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Setuju', 'Setuju', 'Kurang Setuju', 'Tidak Setuju'];
        $columns = range(1, 10);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_mitra_kerjasama::count();

        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_mitra_kerjasama::where("$column", $category)->count();

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
                $totalCategory = kepuasan_mitra_kerjasama::where("$column", $category)->count();

                if ($category == 'Sangat Setuju') {
                    $columnTotal += $totalCategory * 4;
                } elseif ($category == 'Setuju') {
                    $columnTotal += $totalCategory * 3;
                } elseif ($category == 'Kurang Setuju') {
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

        //get average from all value in weightedTotals
        $averageAll = array_sum($weightedTotals) / count($weightedTotals);

        //label averageAll
        $labelAverageAll = $averageAll >= 3.51 ? 'Sangat Baik' : ($averageAll >= 3.01 ? 'Baik' : ($averageAll >= 2.51 ? 'Cukup' : 'Kurang'));

        // Simpan hasil perhitungan dalam variabel $this->results
        $this->results = [
            'results' => $results,
            'weightedTotals' => $weightedTotals,
            'labelWeightedTotals' => $labelWeightedTotals,
            'totalData' => $totalData,
            'averageAll' => $averageAll,
            'labelAverageAll' => $labelAverageAll
        ];
    }

    public function index()
    {
        // ...
        return view('hasil_survei.hasil_survei_mitra', $this->results); // Menggunakan $this->results di sini
    }

    public function show()
    {
        $hasil = pernyataan::where('status', 'pernyataan_mitra')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_mitra_kerjasama::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);
        return view('hasil_survei.hasil_survei_mitra', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears, 'final' => $final])); // Menggunakan $this->results di sini juga
    }

    public function cetak_excel(Request $request)
    {
        // dd($request->all());
        
        $hasil = pernyataan::where('status', 'pernyataan_mitra')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_mitra_kerjasama::selectRaw('YEAR(date_time) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');

        // $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);
        $final = json_decode($request->input('excel'), true);

        // dd($final);
        if (isset($final['tahun'])){
            return Excel::download(new MitraExport($final), 'Hasil Survei Dosen Mitra Kerjasama Tahun' . $final['tahun'] . '.xlsx');
        }
        else{
            return Excel::download(new MitraExport($final), 'Hasil Survei Mitra Kerjasama.xlsx');
        }
    }

    public function filter(Request $request)
    {
        $tahun = $request->input('tahun');
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Setuju', 'Setuju', 'Kurang Setuju', 'Tidak Setuju'];
        $columns = range(1, 10);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_mitra_kerjasama::whereYear('date_time', $tahun)->count();
        if($totalData == 0){
            return redirect('/hasilmitra')->with('error', 'Hasil Survei Tidak Ditemukan');
        }

        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_mitra_kerjasama::whereYear('date_time', $tahun)->where("$column", $category)->count();

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
                $totalCategory = kepuasan_mitra_kerjasama::whereYear('date_time', $tahun)->where("$column", $category)->count();

                if ($category == 'Sangat Setuju') {
                    $columnTotal += $totalCategory * 4;
                } elseif ($category == 'Setuju') {
                    $columnTotal += $totalCategory * 3;
                } elseif ($category == 'Kurang Setuju') {
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

        //get average from all value in weightedTotals
        $averageAll = array_sum($weightedTotals) / count($weightedTotals);

        //label averageAll
        $labelAverageAll = $averageAll >= 3.51 ? 'Sangat Baik' : ($averageAll >= 3.01 ? 'Baik' : ($averageAll >= 2.51 ? 'Cukup' : 'Kurang'));

        // Simpan hasil perhitungan dalam variabel $this->results
        $this->results = [
            'results' => $results,
            'weightedTotals' => $weightedTotals,
            'labelWeightedTotals' => $labelWeightedTotals,
            'totalData' => $totalData,
            'averageAll' => $averageAll,
            'labelAverageAll' => $labelAverageAll,
            'tahun' => $tahun
        ];
        $hasil = pernyataan::where('status', 'pernyataan_mitra')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_mitra_kerjasama::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);

        return view('hasil_survei.hasil_survei_mitra', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears, 'final' => $final]));
    }
}