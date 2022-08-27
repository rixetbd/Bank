<?php

namespace App\Imports;

use Illuminate\Support\Carbon;
use App\Models\Country;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CountryImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $country = new Country([
            'name' => $row[0],
            'iso3' => $row[1],
            'iso2' => $row[2],
            'phonecode' => $row[3],
            'capital' => $row[4],
            'region' => $row[5],
            'created_at'=>Carbon::now(),
        ]);

        Country::where('name', 'name')->delete();

        return $country;
    }

    public function startRow(): int
    {
        return 2;
    }
}
