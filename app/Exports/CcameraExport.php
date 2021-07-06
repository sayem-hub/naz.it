<?php

namespace App\Exports;

use App\Models\Ccamera;
use Maatwebsite\Excel\Concerns\FromCollection;

class CcameraExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ccamera::all();
    }
}
