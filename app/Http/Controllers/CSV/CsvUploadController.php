<?php

namespace App\Http\Controllers\CSV;

use App\Exports\LeadExport;
use App\Http\Controllers\Controller;
use App\Imports\CitiesImport;
use App\Imports\CountryImport;
use App\Imports\LeadsImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvUploadController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    function CountryCsvUpload(Request $request)
    {
        Excel::import(new CountryImport, $request->CountryCsvUpload);

        return back();
    }

    function CityCsvUpload(Request $request)
    {
        Excel::import(new CitiesImport, $request->CityCsvUpload);

        return back();
    }

    function LeadsCsvUpload(Request $request)
    {
        Excel::import(new LeadsImport, $request->LeadsCsvUpload);
        return back();
    }

    public function LeadExport(Request $request)
    {

        return Excel::download(new LeadExport($request->name), 'leads.xlsx');

    }

}
