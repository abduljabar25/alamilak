<?php

namespace App\Exports;

use App\Models\Slide;
use Maatwebsite\Excel\Concerns\FromCollection;

class SlideExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Slide::all();
    }
}
