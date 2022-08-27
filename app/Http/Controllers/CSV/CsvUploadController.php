<?php

namespace App\Http\Controllers\CSV;

use App\Http\Controllers\Controller;
use App\Imports\CitiesImport;
use App\Imports\CountryImport;
use App\Imports\LeadsImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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


}
