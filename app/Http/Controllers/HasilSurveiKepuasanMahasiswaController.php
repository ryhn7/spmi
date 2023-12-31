<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_mahasiswa;
use App\Models\pernyataan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class HasilSurveiKepuasanMahasiswaController extends Controller
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
        $totalData = kepuasan_mahasiswa::count();

        // Sisipkan kode perhitungan $results dari metode index() ke sini
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_mahasiswa::where("$column", $category)->count();

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
                $totalCategory = kepuasan_mahasiswa::where("$column", $category)->count();

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
            ['start' => 0, 'end' => 6],
            // section 1
            ['start' => 7, 'end' => 10],
            // section 2
            ['start' => 11, 'end' => 15],
            // section 3
            ['start' => 16, 'end' => 19],
            // section 4
            ['start' => 20, 'end' => 25],
            // section 5
            ['start' => 26, 'end' => 30],
            // section 6
            ['start' => 31, 'end' => 44],
            // section 7
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
            'labels' => $labels
        ];
    }

    public function index()
    {
        // ...
        return view('hasil_survei.hasil_survei_mhs', $this->results); // Menggunakan $this->results di sini
    }

    public function show()
    {
        $hasil = pernyataan::where('status', 'pernyataan_mahasiswa')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $programstudi = kepuasan_mahasiswa::distinct('program_studi')->pluck('program_studi');
        $uniqueYears = kepuasan_mahasiswa::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);
        return view('hasil_survei.hasil_survei_mhs', array_merge($this->results, ['hasil' => $hasil, 'programstudi' => $programstudi, 'uniqueYears' => $uniqueYears, 'final' => $final]));
    }

    public function cetak_excel(Request $request)
    {
        // dd($request->all());
        
        $hasil = pernyataan::where('status', 'pernyataan_mahasiswa')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $uniqueYears = kepuasan_mahasiswa::selectRaw('YEAR(date_time) as year')->distinct()->orderBy('year', 'desc')->get()->pluck('year');

        // $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);
        $final = json_decode($request->input('excel'), true);

        // dd($final);
        if (isset($final['tahun'])){
            return Excel::download(new MahasiswaExport($final), 'Hasil Survei Mahasiswa '. $final['program_studi'] . ' Tahun ' . $final['tahun'] . '.xlsx');
        }
        else{
            return Excel::download(new MahasiswaExport($final), 'Hasil Survei Mahasiswa.xlsx');
        }
    }

    public function filter(Request $request)
    {
        $programStudi = $request->input('program_studi');
        $tahun = $request->input('tahun');
        // dd($tahun);
        // dd($programStudi);
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 45);
        $this->results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];
        $totalData = kepuasan_mahasiswa::where('program_studi', $programStudi)->whereYear('date_time', $tahun)->count();

        if($totalData == 0){
            return redirect('/hasilmahasiswa')->with('error', 'Hasil Survei Tidak Ditemukan');
        }
        
        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_mahasiswa::where('program_studi', $programStudi)->whereYear('date_time', $tahun)->where("$column", $category)->count();
                // dd($totalCategory);

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
                $totalCategory = kepuasan_mahasiswa::where('program_studi', $programStudi)->whereYear('date_time', $tahun)->where("$column", $category)->count();

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
            ['start' => 0, 'end' => 6],
            // section 1
            ['start' => 7, 'end' => 10],
            // section 2
            ['start' => 11, 'end' => 15],
            // section 3
            ['start' => 16, 'end' => 19],
            // section 4
            ['start' => 20, 'end' => 25],
            // section 5
            ['start' => 26, 'end' => 30],
            // section 6
            ['start' => 31, 'end' => 44],
            // section 7
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
            'tahun' => $tahun,
            'program_studi' => $programStudi
        ];
        $hasil = pernyataan::where('status', 'pernyataan_mahasiswa')->first();

        if (!$hasil) {
            $hasil = new pernyataan();
        }

        $programstudi = kepuasan_mahasiswa::distinct('program_studi')->pluck('program_studi');
        $uniqueYears = kepuasan_mahasiswa::selectRaw('YEAR(date_time) as year') ->distinct() ->orderBy('year', 'desc') ->get() ->pluck('year');
        $final = array_merge($this->results, ['hasil' => $hasil, 'uniqueYears' => $uniqueYears]);

        return view('hasil_survei.hasil_survei_mhs', array_merge($this->results, ['hasil' => $hasil, 'programstudi' => $programstudi, 'uniqueYears' => $uniqueYears, 'final' => $final]));
    }
    
}
