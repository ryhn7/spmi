<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilSurveiKepuasanMahasiswaController extends Controller
{
    //
    public function index()
    {
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 42);
        $results = [];
        $weightedTotals = [];
        $labelWeightedTotals = [];

        foreach ($categories as $category) {
            $averages = [];
            $total = [];
            $totalData = kepuasan_mahasiswa::count();
            // $averageResponden = [];


            foreach ($columns as $column) {
                $totalCategory = kepuasan_mahasiswa::where("$column", $category)
                    ->count();
                //count totalCategory data in each column
                $average = $totalCategory / $totalData;
                // $averageRespon = $category=='Sangat Baik'?$totalCategory*4:(($category=='Baik'?$totalCategory*3:(($category=='Cukup'?$totalCategory*2:$totalCategory*1))));

                $averages["$column"] = $average * 100;
                $total["$column"] = $totalCategory;
                // $averageResponden["$column"] = $averageRespon;
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

                // Menghitung total berbobot sesuai dengan kategori
                if ($category == 'Sangat Baik') {
                    $columnTotal += $totalCategory * 4;
                } elseif ($category == 'Baik') {
                    $columnTotal += $totalCategory * 3;
                } elseif ($category == 'Cukup') {
                    $columnTotal += $totalCategory * 2;
                } else {
                    $columnTotal += $totalCategory; // Untuk kategori 'Kurang'
                }
            }

            // Menyimpan total berbobot di dalam array weightedTotals
            $weightedTotals["$column"] = $columnTotal / $totalData;
        }

        foreach ($columns as $column){
            $label = $weightedTotals[$column] >= 3.51 ? 'Sangat Baik' : ($weightedTotals[$column] >= 3.01 ? 'Baik' : ($weightedTotals[$column] >= 2.51 ? 'Cukup' : 'Kurang'));
            $labelWeightedTotals["$column"] = $label;
        }
        // dd($labelWeightedTotals);
        // dd($results);
        return view('hasil_survei.hasil_survei_mhs', ['results' => $results, 'weightedTotals' => $weightedTotals, 'labelWeightedTotals' => $labelWeightedTotals, 'totalData' => $totalData]);
    }

}
