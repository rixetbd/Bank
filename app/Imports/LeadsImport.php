<?php

namespace App\Imports;

use Illuminate\Support\Carbon;
use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class LeadsImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new Lead([
        //     //
        // ]);

        $person_name = $row[0];
        $title = ($row[1] != ''? $row[1] : "N/A");
        $email = ($row[2] != ''? $row[2] : "N/A");
        $phone = ($row[3] != ''? $row[3] : "N/A");
        $company_name = ($row[4] != ''? $row[4] : "N/A");
        $industry = ($row[5] != ''? $row[5] : "N/A");
        $company_size = ($row[6] != ''? $row[6] : "N/A");
        $revenue = ($row[7] != ''? $row[7] : "N/A");
        $zip_code = ($row[8] != ''? $row[8] : "N/A");
        $city = ($row[9] != ''? $row[9] : "N/A");
        $country = ($row[10] != ''? $row[10] : "N/A");
        $website = ($row[11] != ''? $row[11] : "N/A");
        $source_link = ($row[12] != ''? $row[12] : "N/A");
        $source_link2 = ($row[13] != ''? $row[13] : "N/A");

        $leads = new Lead([
            'person_name' => $person_name,
            'title' => $title,
            'email' => $email,
            'phone' => $phone,
            'company_name' => $company_name,
            'industry' => $industry,
            'company_size' => $company_size,
            'revenue' => $revenue,
            'zip_code' => $zip_code,
            'city' => $city,
            'country' => $country,
            'website' => $website,
            'source_link' => $source_link,
            'source_link2' => $source_link2,
            'created_at'=>Carbon::now(),
        ]);

        return $leads;
    }
    public function startRow(): int
    {
        return 2;
    }
}
