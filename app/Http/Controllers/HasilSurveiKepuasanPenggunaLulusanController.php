<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_pengguna_lulusan;
use App\Models\pernyataan;
use Illuminate\Http\Request;
use App\Exports\PenggunaLulusanExport;
use Maatwebsite\Excel\Facades\Excel;

class HasilSurveiKepuasanPenggunaLulusanController extends Controller
{
    private $results = []; // Definisikan variabel $results di sini

    public function __construct()
    {
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 9);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_pengguna_lulusan::count();

        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_pengguna_lulusan::where("$column", $category)->count();

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
                $totalCategory = kepuasan_pengguna_lulusan::where("$column", $category)->count();

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
        ];
    }

    public function filter(Request $request)
    {
        $programStudi = $request->input('program_studi');
        $tahun = $request->input('tahun');
        // dd($tahun);
        // dd($programStudi);
        // Inisialisasi variabel $results di dalam konstruktor
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 9);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_pengguna_lulusan::where('program_studi', $programStudi)->whereYear('date_time', $tahun)->count();
        if($totalData == 0){
            return redirect('/hasilpenggunalulusan')->with('error', 'Hasil Survei Tidak Ditemukan');
        }
        // dd($totalData);

        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_pengguna_lulusan::where('program_studi', $programStudi)->whereYear('date_time', $tahun)->where("$column", $category)->count();

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
                $totalCategory = kepuasan_pengguna_lulusan::where('program_studi', $programStudi)->whereYear('date_time', $tahun)->where("$column", $category)->count();

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
            'tahun' => $tahun,
            'program_studi' => $programStudi
        ];
        $hasil = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_pengguna_lulusan::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);

        return view('hasil_survei.hasil_survei_pengguna_lulusan', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears, 'final' => $final]));

    }

    public function index()
    {
        // ...
        return view('hasil_survei.hasil_survei_pengguna_lulusan', $this->results); // Menggunakan $this->results di sini
    }

    public function show()
    {
        $hasil = pernyataan::where('status', 'pernyataan_pengguna_lulusan')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_pengguna_lulusan::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);

        return view('hasil_survei.hasil_survei_pengguna_lulusan', array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears, 'final' => $final])); // Menggunakan $this->results di sini juga
    }

    public function cetak_excel(Request $request)
    {
        // dd($request->all());
        
        $hasil = pernyataan::where('status', 'pernyataan_mahasiswa')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_pengguna_lulusan::selectRaw('YEAR(date_time) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');

        // $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);
        $final = json_decode($request->input('excel'), true);

        // dd($final);

        return Excel::download(new PenggunaLulusanExport($final), 'Hasil Survei Pengguna Lulusan '. $final['program_studi'] . ' Tahun ' . $final['tahun'] . '.xlsx');
    }
}