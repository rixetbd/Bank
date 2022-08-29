<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
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

    public function search(Request $request)
    {

        $cities="";

        $all_cities = City::where( 'country_id' , $request->country)->orderBy('name', 'asc')->get();
        foreach ($all_cities as $city) {
            $cities .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }

        $country = Country::find($request->country);
        $lead_dataDB = Lead::where('country', "=" , $country->name)->take(20)->get();

        if($lead_dataDB->count() != 0 ){
            $lead_datasearch = "";
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.$lead->phone.'</td><td>'.Str::limit($lead->company_name, 20).'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }

            return response()->json([
                'cities'=>$cities,
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';

            return response()->json([
                'cities'=>$cities,
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }

    }


    public function searchCitiesData(Request $request)
    {

        if($request->city_Name == ""){

            $cities="";
            $all_cities = City::where( 'country_id' , $request->country)->orderBy('name', 'asc')->get();
            foreach ($all_cities as $city) {
                $cities .= '<option value="'.$city->id.'">'.$city->name.'</option>';
            }

            $country = Country::find($request->country);
            $lead_dataDB = Lead::where('country', "=" , $country->name)->take(20)->get();

            if($lead_dataDB->count() != 0 ){
                $lead_datasearch = "";
                foreach ($lead_dataDB as $lead) {
                    $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.$lead->phone.'</td><td>'.Str::limit($lead->company_name, 20).'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
                }

                return response()->json([
                    'cities'=>$cities,
                    'lead_datasearch'=>$lead_datasearch,
                ]);
            }else{
                $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';

                return response()->json([
                    'cities'=>$cities,
                    'lead_datasearch'=>$lead_datasearch,
                ]);
            }
        }else{

        $city_names = [];
        foreach ($request->city_Name as $single_city) {
            $city = City::find($single_city);
            array_push($city_names, $city->name);
        }
        foreach ($city_names as $city_name) {
            $lead_dataDB = Lead::where('city', "=" , $city_name)->take(20)->get();
            if($lead_dataDB->count() != 0 ){
                $lead_datasearch = "";
                foreach ($lead_dataDB as $lead) {
                    $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.$lead->phone.'</td><td>'.Str::limit($lead->company_name, 20).'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
                }
            }else{
                $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
                return response()->json([
                    'lead_datasearch'=>$lead_datasearch,
                ]);
            }
        }

        return response()->json([
            'lead_datasearch'=>$lead_datasearch,
        ]);
    }
    }
}
