<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class HasilExport implements FromView
{
    use Exportable;
    protected $hasil;

    public function __construct($hasil)
    {
        $this->hasil = $hasil;

        // dd($hasil);
    }

    public function view(): View
    {
        return view('hasil_survei.tes', ['hasil' => $this->hasil]); // Replace with the actual path to your view
    }
}
