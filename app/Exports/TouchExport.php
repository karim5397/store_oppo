<?php

namespace App\Exports;

use App\Models\Touch;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TouchExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Phone',
            'Message',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Touch::select('name','email','phone','message')->get();
        // return Touch::get();
    }
}
