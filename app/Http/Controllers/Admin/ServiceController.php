<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageList;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{

    public function index()
    {
        $all_service = Service::all();
        return view('backend.services.index',[
            'all_service'=>$all_service,
        ]);
    }


    public function create()
    {
        return view('backend.services.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'category'=>'required',
            'description'=>'required'
        ]);

        $id = Service::insertGetId([
            'name'=>$request->name,
            'title'=>$request->title,
            'category'=>$request->category,
            // 'price'=>$request->price,
            'author'=>Auth::user()->name,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $files = $request->file('image');

        if($request->hasFile('image'))
        {
            foreach ($files as $key=>$file) {
                $img = $id.'_service_'.uniqid().'.'.$file->getClientOriginalExtension();
                Image::make($file)->fit(800, 600)->save(public_path('uploads/service_banner/'.$img));

                ServiceImage::insert([
                    'service_id'=>$id,
                    'banner_index'=>$key+1,
                    'banner'=>$img,
                    'created_at'=>Carbon::now(),
                ]);
            }
        }

        if($request->input('action') == 'save'){
            Service::find($id)->update([
                'status'=>0,
            ]);
            return redirect()->route('admin.service.index');

        }elseif($request->input('action') == 'next'){
            return redirect()->route('admin.service.price.index', $id);
        }else{
            return back();
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $service_img = ServiceImage::where('service_id', $id)->get();
        return view('backend.services.edit',[
            'service'=>$service,
            'service_img'=>$service_img,
        ]);
    }

    public function update(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'category'=>'required',
            'description'=>'required'
        ]);

        Service::find($request->id)->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'category'=>$request->category,
            // 'price'=>$request->price,
            'author'=>Auth::user()->name,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $files = $request->file('image');

        if($request->hasFile('image'))
        {
            foreach ($files as $key=>$file) {
                $img = $request->id.'_service_'.uniqid().'.'.$file->getClientOriginalExtension();
                Image::make($file)->fit(800, 600)->save(public_path('uploads/service_banner/'.$img));

                ServiceImage::insert([
                    'service_id'=>$request->id,
                    'banner_index'=>$key+1,
                    'banner'=>$img,
                    'created_at'=>Carbon::now(),
                ]);
            }
        }

        if($request->input('action') == 'save'){
            return redirect()->route('admin.service.index');
        }elseif($request->input('action') == 'next'){
            return redirect()->route('admin.service.price.index', $request->id);
        }else{
            return back();
        }
    }


    public function destroy($id)
    {
        Service::find($id)->delete();
        $service_img = ServiceImage::where('service_id', $id)->get();

        foreach ($service_img as $service) {

            $img_path = public_path('uploads/service_banner/'.$service->banner);
            if(File::exists($img_path)) {
                File::delete($img_path);
            }

            ServiceImage::find($service->id)->delete();
        }


        return back();
    }

    public function status($id)
    {

        $service = Service::find($id);

        if ($service->status == 1) {
            Service::find($id)->update([
                'status'=>0,
            ]);
        } else {
            Service::find($id)->update([
                'status'=>1,
            ]);
        }

        return back();

    }


    public function price_index ($id)
    {
        $package_info = Package::where('service_id', $id)->orderBy('packages_index', 'asc')->get();

        if(!empty($package_info))
        {
            return view('backend.services.price_edit',[
                'id'=>$id,
                'package_info'=>$package_info,
            ]);
        }else{
            return view('backend.services.price',[
                'id'=>$id,
                'package_info'=>$package_info,
            ]);
        }
    }

    public function serviceimgdatadelete(Request $request)
    {

        $service_img = ServiceImage::find($request->imgeID);
        $img_path = public_path('uploads/service_banner/'.$service_img->banner);
        if(File::exists($img_path)) {
            File::delete($img_path);
        }
        ServiceImage::find($request->imgeID)->delete();

        // return response()->json([
        //     'imgeID'=>'hi',
        // ]);

    }

}
