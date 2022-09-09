<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SubMenu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MenuController extends Controller
{

    public function index()
    {
        $all_menu = Menu::where('status','=', 1)->get();
        return view('backend.menu',[
            'all_menu'=>$all_menu,
        ]);
    }


    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        Menu::insert([
            'name'=>$request->name,
            'status'=>'1',
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }

    public function submenu_create(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        SubMenu::insert([
            'name'=>$request->name,
            'status'=>'1',
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

        Menu::find(Crypt::decrypt($id))->delete();
        return back();

    }
}
