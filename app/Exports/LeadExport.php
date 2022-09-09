<?php

namespace App\Exports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;


class LeadExport implements FromCollection
{

    protected $name;

    function __construct($name) {
            $this->name = $name;
    }

    public function collection()
    {
        // return Lead::where('lifeskill_id',$this->name)->get()([
        //     'first_name', 'email'
        // ]);

        if($this->name == 'all')
        {
            return Lead::all();
        }else{
            return Lead::where('country', '=', $this->name)->get();
        }
    }

}
