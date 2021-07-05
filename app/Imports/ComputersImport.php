<?php

namespace App\Imports;

use App\Models\Computer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ComputersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        return new Computer([
            'ComID' => $collection[0],
        ]);
    }
}
