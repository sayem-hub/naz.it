<?php

namespace App\Exports;

use App\Models\Computer;
use Maatwebsite\Excel\Concerns\FromCollection;

class ComputersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Computer::all();
    }

}
