<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;


class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_countries = Country::orderby('name', 'asc')->get();
        // $all_cities = DB::table('cities')->get();
        return view('backend.country',[
            'all_countries'=>$all_countries,
            // 'all_cities'=>$all_cities,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            "name"=> 'required',
            "iso3"=>'required',
            "iso2"=>'required',
            "phonecode"=>'required',
            "capital"=>'required',
            "region"=>'required',
        ]);

        Country::insert([
            "name"=> $request->name,
            "iso3"=>$request->iso3,
            "iso2"=>$request->iso2,
            "phonecode"=>$request->phonecode,
            "capital"=>$request->capital,
            "region"=>$request->region,
        ]);

        return back();
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
    public function update(Request $request)
    {
        Country::where('id', $request->id)->update([
            "name"=> $request->name,
            "iso3"=>$request->iso3,
            "iso2"=>$request->iso2,
            "phonecode"=>$request->phonecode,
            "capital"=>$request->capital,
            "region"=>$request->region,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Country::find($id)->delete();
        return back();
    }

}
