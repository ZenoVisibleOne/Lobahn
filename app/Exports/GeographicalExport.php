<?php

namespace App\Exports;

use App\Models\Geographical;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GeographicalExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Geographical::select('id', 'geographical_name')->get();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Geograhpical Name',
        ];
    }
}
