<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
            // return 'save';
            return back();
        }elseif($request->input('action') == 'next'){

            return redirect()->route('admin.service.price.index', $id);
            // return view('backend.services.price');
        }else{
            return back();
        }

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




    public function price_create (Request $request)
    {
        echo "<pre>";
        print_r($request->all());
    }



    public function price_index ($id)
    {
        return view('backend.services.price',[
            'id'=>$id,
        ]);
    }
}
