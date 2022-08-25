<?php

namespace App\Imports;

use App\Models\Country;
use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // name	iso3	iso2	phonecode	capital	region

        // $country = new Country([
        //     'name' => $row[0],
        //     'iso3' => $row[1],
        //     'iso2' => $row[2],
        //     'phonecode' => $row[3],
        //     'capital' => $row[4],
        //     'region' => $row[5],
        //     'created_at'=>Carbon::now(),
        // ]);

        // Country::where('name', 'name')->delete();

        // return $country;
    }
}
