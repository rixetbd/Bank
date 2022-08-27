<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Industry;
use App\Models\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
        $all_state = State::orderby('name', 'asc')->get();
        // $all_cities = DB::table('cities')->get();
        return view('backend.country',[
            'all_countries'=>$all_countries,
            'all_state'=>$all_state,
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



    public function stateCreate(Request $request)
    {
        $request->validate([
            'country_id'=>'required',
            'name'=>'required'
        ]);

        $state = explode("," , $request->name);

        for ($i=0; $i < count($state); $i++) {
            State::insert([
                'country_id'=>$request->country_id,
                'name'=>$state[$i],
                'created_at'=>Carbon::now(),
            ]);
        }

        return back();
    }

    public function cityIndex()
    {
        $all_countries = Country::orderby('name', 'asc')->get();
        $all_cities = City::orderby('name', 'asc')->get();
        return view('backend.city',[
            'all_countries'=>$all_countries,
            'all_cities'=>$all_cities
        ]);
    }

    public function cityCreate(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'country_id'=>'required',
        ]);

        $name = explode("," , $request->name);

        for ($i=0; $i < count($name); $i++) {
            City::insert([
                'name'=>$name[$i],
                'country_id'=>$request->country_id,
                'created_at'=>Carbon::now(),
            ]);
        }
        return back();
    }

    public function cityUpdate(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'state_name'=>'required',
            'country_id'=>'required',
        ]);

        City::where('id', $request->id)->update([
            'country_id'=>$request->country_id,
            'state_name'=>$request->state_name,
            'name'=>$request->name,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }

    public function cityDestroy($id)
    {
        City::find($id)->delete();
        return back();
    }

}
