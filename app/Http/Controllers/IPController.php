<?php

namespace App\Http\Controllers;

use App\Models\IPModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IPController extends Controller
{

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        IPModel::insert([
            'ip'=>$request->ip(),
            'created_at'=>Carbon::now(),
        ]);

        return back();
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
