<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Lead;
use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Industry;
use App\Models\Package;
use App\Models\PackageList;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $lead_data = Lead::paginate(20);
        // $all_cities =
        return view('frontend.index',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    public function index2()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $lead_data = Lead::paginate(20);
        // $all_cities =
        return view('frontend.index2',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    public function index3()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $lead_data = Lead::paginate(20);
        // $all_cities =
        return view('frontend.index3',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
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

    public function getCityName()
    {

    }

    public function index_home2()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        return view('frontend.betheme.home2',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    public function index_mainpage()
    {
        return view('frontend.betheme.mainpage');
    }

    // The Final Round

    public function index_0()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        $service_list = Service::where('status', 1)->get();
        return view('frontend.final.mainpage',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
            'service_list'=>$service_list,
        ]);
    }

    public function getservicedata_first(Request $request){
        $service = Service::where('status', '1')->first();
        $service_img = ServiceImage::where('service_id', $service->id)->get();
        $package = Package::where('service_id', $service->id)->orderBy('packages_index', 'asc')->get();
        $packageList = PackageList::where('package_id', $package[0]->id)->orderBy('status', 'desc')->get();
        $imgData = "";
        foreach ($service_img as  $img) {
            $imgData .= '<div class="slide2"><img src="'.asset('uploads/service_banner/'.$img->banner).'" alt="'.$img->banner.'" class="img-fluid"></div>';
        }
        $packageData = "";
        foreach ($package as  $key=>$item) {
            $packageData .= '<div class="col col'.$key.'" onclick="selectedPackage('.$item->id.', \'.col'.$key.'\''.')">'.$item->name.'</div>';
        }
        $packageListData = "";
        foreach ($packageList as  $item) {
            $packageListData .= '<li><i class="fas fa-check '.($item->status == "1"?"text-success":"").'"></i> '.$item->info.'</li>';
        }
        return response()->json([
            'service'=>$service,
            'service_img'=>$imgData,
            'package'=>$package,
            'packageData'=>$packageData,
            'packageListData'=>$packageListData,
        ]);
    }

    public function getservicedata(Request $request){
        $service = Service::find($request->ServiceID);
        $service_img = ServiceImage::where('service_id', $request->ServiceID)->get();
        $package = Package::where('service_id', $service->id)->orderBy('packages_index', 'asc')->get();
        $packageList = PackageList::where('package_id', $package[0]->id)->orderBy('status', 'desc')->get();

        // $imgData = "";
        // foreach ($service_img as  $img) {
        //     $imgData .= '<div class="slide2"><img src="'.asset('uploads/service_banner/'.$img->banner).'" alt="'.$img->banner.'" class="img-fluid"></div>';
        // }

        // $packageData = "";
        // foreach ($package as  $key=> $item) {
        //     $packageData .= '<div class="col col'.$key.'" onclick="selectedPackage('.$item->id.', \'.col'.$key.'\''.')">'.$item->name.'</div>';
        // }

        // $packageListData = "";
        // foreach ($packageList as  $item) {
        //     $packageListData .= '<li><i class="fas fa-check '.($item->status == "1"?"text-success":"").'"></i> '.$item->info.'</li>';
        // }

        return response()->json([
            'service'=>$service,
            // 'service_img'=>$imgData,
            // 'package'=>$package,
            // 'packageData'=>$packageData,
            // 'packageListData'=>$packageListData,
        ]);
    }


    public function getservicedata_selected(Request $request){
        $package = Package::find($request->ServiceID);
        $packageList = PackageList::where('package_id', $package->id)->orderBy('status', 'desc')->get();

        $packageListData = "";
        foreach ($packageList as  $item) {
            $packageListData .= '<li><i class="fas fa-check '.($item->status == "1"?"text-success":"").'"></i> '.$item->info.'</li>';
        }
        return response()->json([
            'package'=>$package,
            'packageListData'=>$packageListData,
        ]);
    }

}
