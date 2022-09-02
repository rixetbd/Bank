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

    public function index(){}

    public function create(){}

    public function store(Request $request){}

    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}

    public function search(Request $request)
    {
        $cities="";
        $all_cities = City::where( 'country_id' , $request->country)->orderBy('name', 'asc')->get();
        foreach ($all_cities as $city) {
            $cities .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }
        $country = Country::find($request->country);
        $lead_dataDB = Lead::where('country', "=" , $country->name)->paginate(15);
        if($lead_dataDB->count() != 0 ){
            $lead_datasearch = "";
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::limit($lead->company_name, 20).'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
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

        $country = Country::find($request->country);
        $lead_datasearch = "";
        $cities_name = json_decode(stripslashes($request->city_Name));
        foreach($cities_name as $city){
            $lead_dataDB = Lead::whereIn('city', $cities_name)
                            ->where('country', $country->name)->get();
        }
        foreach ($lead_dataDB as $lead) {
            $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.$lead->phone.'</td><td>'.Str::limit($lead->company_name, 20).'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
        }

        return response()->json([
            'lead_datasearch'=> $lead_datasearch,
        ]);
    }

    public function getdataindustries(Request $request)
    {
        $country = Country::find($request->country);

        $lead_datasearch = "";

        $cities_name = json_decode(stripslashes($request->city_Name));
        $industry_Name = json_decode(stripslashes($request->industry_Name));

        foreach($cities_name as $city){
            $lead_dataDB = Lead::whereIn('city', $cities_name)
                            ->where('country', $country->name)
                            ->whereIn('industry', $industry_Name)->get();
        }
        foreach ($lead_dataDB as $lead) {
            $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.$lead->phone.'</td><td>'.Str::limit($lead->company_name, 20).'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
        }

        return response()->json([
            'lead_datasearch'=> $lead_datasearch,
        ]);
    }
}
