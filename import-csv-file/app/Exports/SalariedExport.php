<?php

namespace App\Exports;

use App\Salaried;
use Maatwebsite\Excel\Concerns\FromCollection;

class SalariedExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Salaried::all();
    }
}
