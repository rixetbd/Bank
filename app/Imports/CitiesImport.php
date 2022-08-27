<?php

namespace App\Imports;

use App\Models\City;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CitiesImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $city = new City([
            'country_id' => ($row[0] != ''? $row[0] : "N/A"),
            'name' =>  ($row[1] != ''? $row[1] : "N/A"),
            'state_name' =>  ($row[2] != ''? $row[2] : "N/A"),
            'created_at' => Carbon::now(),
        ]);

        City::where('name', 'name')->delete();
        return $city;
    }

    public function startRow(): int
    {
        return 2;
    }
}
