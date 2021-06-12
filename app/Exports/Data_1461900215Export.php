<?php

namespace App\Exports;

use App\Data_1461900215;
use Maatwebsite\Excel\Concerns\FromCollection;

class Data_1461900215Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data_1461900215::all();
    }
}
