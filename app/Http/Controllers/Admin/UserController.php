<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_user = User::where('role', '!=' ,'SuperAdmin')->where('id', '!=' , Auth::id())->orderBy('created_at', 'desc')->get();
        return view('backend.users.all',[
            'all_user'=>$all_user,
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
            'name'=> 'required',
            'email'=> 'required',
            'role'=> 'required',
            'password'=> 'required',
        ]);

        User::insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'role'=> $request->role,
            'password'=> Hash::make($request->password),
            'created_at'=> Carbon::now(),
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
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'role'=> 'required',
            'password'=> 'required',
        ]);

        User::where('id', $request->id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'role'=> $request->role,
            'password'=> Hash::make($request->password),
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
        User::find(Crypt::decrypt($id))->delete();
        return back();
    }
}
