<?php

namespace App\Exports;

use App\Models\mostafed;
use Maatwebsite\Excel\Concerns\FromCollection;

class moExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return mostafed::all();
    }
}
