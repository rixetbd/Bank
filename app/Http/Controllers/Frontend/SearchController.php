<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Industry;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{

    public function getalldata(){
        $lead_dataDB = Lead::paginate(15);
        $lead_datasearch = "";
        foreach ($lead_dataDB as $lead) {
            $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
        }
        return response()->json([
            'lead_datasearch'=>$lead_datasearch,
        ]);
    }

    public function search(Request $request)
    {
        $cities='<option value="">-- All City</option>';
        $all_cities = City::where( 'country_id' , $request->country)->orderBy('name', 'asc')->get();
        foreach ($all_cities as $city) {
            $cities .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }
        $country = Country::find($request->country);
        $lead_dataDB = Lead::where('country', "=" , $country->name)->limit(20)->get();
        // $lead_dataDB = Lead::where('country', "=" , $country->name)->paginate(15);
        if($lead_dataDB->count() != 0 ){
            $lead_datasearch = "";
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'country_name'=>$country->name,
                'cities'=>$cities,
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
            return response()->json([
                'country_name'=>$country->name,
                'cities'=>$cities,
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }
    }

    public function searchCitiesData(Request $request)
    {
        if($request->country != ""){
            $country = Country::find($request->country);
            $cities_name = json_decode(stripslashes($request->city_Name));
            foreach($cities_name as $city){
                $lead_dataDB = Lead::whereIn('city', $cities_name)
                ->where('country', $country->name)->limit(20)->get();
            }
            $lead_datasearch = "";
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }

            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
            ]);
        }else{
            $cities_name = json_decode(stripslashes($request->city_Name));
            foreach($cities_name as $city){
                $lead_dataDB = Lead::whereIn('city', $cities_name)->limit(20)->get();
            }
            $lead_datasearch = "";
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
            ]);
        }
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
                            ->whereIn('industry', $industry_Name)->limit(20)->get();
        }
        foreach ($lead_dataDB as $lead) {
            $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
        }

        return response()->json([
            'lead_datasearch'=> $lead_datasearch,
        ]);
    }


    // New features

    // Search All Leads || Start
    public function searchall(Request $request)
    {
        $lead_datasearch = "";
        $country = Country::find($request->country);
        // $city_Name = City::find($request->city_Name);
        // $industry_Name = Industry::find($request->industry_Name);
        $cities_name = json_decode(stripslashes($request->city_Name));
        $industry_Name = json_decode(stripslashes($request->industry_Name));
        foreach($cities_name as $city){
            $lead_dataDB = Lead::whereIn('city', $cities_name)
                            ->where('country', $country->name)
                            ->whereIn('industry', $industry_Name)->limit(20)->get();
        }

        if($lead_dataDB->count() != 0 ){
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
            return response()->json([
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }
    }
    // Search All Leads || End

    // Search Country Leads Only|| Start
    public function searchcountryonly(Request $request)
    {
        $cities = '<option value="">-- All City</option>';
        $all_cities = City::where( 'country_id' , $request->country)->orderBy('name', 'asc')->get();
        foreach ($all_cities as $city) {
            $cities .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }

        $lead_datasearch = "";
        $country = Country::find($request->country);
        $lead_dataDB = Lead::where('country', $country->name)->limit(20)->get();
        if($lead_dataDB->count() != 0 ){
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
                'cities'=> $cities,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
            return response()->json([
                'lead_datasearch'=>$lead_datasearch,
                'cities'=> $cities,
            ]);
        }
    }
    // Search Country Leads Only|| End

    // Search City Leads Only|| Start
    public function searchcityonly(Request $request)
    {
        $lead_datasearch = "";
        $cities_name = json_decode(stripslashes($request->city_Name));
        foreach($cities_name as $city){
            $lead_dataDB = Lead::whereIn('city', $cities_name)->inRandomOrder()->limit(20)->get();
        }
        if($lead_dataDB->count() != 0 ){
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
            return response()->json([
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }
    }
    // Search City Leads Only|| End

    // Search Industry Leads Only|| Start
    public function searchindustryonly(Request $request)
    {
        $lead_datasearch = "";
        $industry_Name = json_decode(stripslashes($request->industry_Name));
        foreach($industry_Name as $industry){
            $lead_dataDB = Lead::whereIn('industry', $industry_Name)->inRandomOrder()->limit(20)->get();
        }
        if($lead_dataDB->count() != 0 ){
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
            return response()->json([
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }
    }
    // Search Industry Leads Only|| End


    public function searchcountryandcity(Request $request)
    {
        $lead_datasearch = "";
        $country = Country::find($request->country);
        $cities_name = json_decode(stripslashes($request->city_Name));
        foreach($cities_name as $city){
            $lead_dataDB = Lead::whereIn('city', $cities_name)->where('country', $country->name)->inRandomOrder()->limit(20)->get();
        }
        if($lead_dataDB->count() != 0 ){
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
            return response()->json([
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }
    }

    public function searchcountryandindustry(Request $request)
    {
        $lead_datasearch = "";
        $country = Country::find($request->country);
        $industry_Name = json_decode(stripslashes($request->industry_Name));
        foreach($industry_Name as $industry){
            $lead_dataDB = Lead::where('country', $country->name)
                            ->whereIn('industry', $industry_Name)->inRandomOrder()->limit(20)->get();
        }
        if($lead_dataDB->count() != 0 ){
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
            return response()->json([
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }
    }

    public function searchcityandindustry(Request $request)
    {
        $lead_datasearch = "";
        $cities_name = json_decode(stripslashes($request->city_Name));
        $industry_Name = json_decode(stripslashes($request->industry_Name));
        foreach($cities_name as $city){
            $lead_dataDB = Lead::whereIn('city', $cities_name)
                            ->whereIn('industry', $industry_Name)->inRandomOrder()->limit(20)->get();
        }
        if($lead_dataDB->count() != 0 ){
            foreach ($lead_dataDB as $lead) {
                $lead_datasearch .= '<tr><td>'.$lead->person_name.'</td><td>'.$lead->title.'</td><td>'.Str::substr($lead->email, 0, 3).'****@*****'.Str::substr($lead->email, -5).'</td><td>'.Str::substr($lead->phone, 0, 6)."*****".'</td><td>'.Str::substr($lead->company_name, 0, 15)."...".'</td><td>'.$lead->company_size.'</td><td>'.$lead->revenue.'</td><td>'.$lead->city.'</td><td>'.$lead->zip_code.'</td><td>'.Str::substr($lead->website, 0, 10).'***.'.Str::substr($lead->website, -3).'</td></tr>';
            }
            return response()->json([
                'lead_datasearch'=> $lead_datasearch,
            ]);
        }else{
            $lead_datasearch = '<tr><td colspan="10" style="text-align:center;line-height:100px;">No More Collected leads</td></tr>';
            return response()->json([
                'lead_datasearch'=>$lead_datasearch,
            ]);
        }
    }

}
