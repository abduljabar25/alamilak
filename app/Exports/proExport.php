<?php

namespace App\Exports;

use App\Models\property;
use Maatwebsite\Excel\Concerns\FromCollection;

class proExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return property::all();
    }
}
