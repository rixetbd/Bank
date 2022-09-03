<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Industry;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $all_countries = Country::all();
        $all_city = City::all();
        $all_industry = Industry::all();
        return view('frontend.contact',[
            'all_countries'=>$all_countries,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    public function create(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
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

    }

    public function destroy($id)
    {

    }
}
