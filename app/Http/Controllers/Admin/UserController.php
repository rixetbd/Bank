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

    public function index()
    {
        $all_user = User::where('role', '!=' ,'SuperAdmin')->where('id', '!=' , Auth::id())->orderBy('created_at', 'desc')->get();
        return view('backend.users.all',[
            'all_user'=>$all_user,
        ]);
    }

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

    public function update(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'role'=> 'required',
        ]);

        User::where('id', $request->id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'role'=> $request->role,
        ]);

        if ($request->password != " ") {
            User::where('id', $request->id)->update([
                'password'=> Hash::make($request->password),
            ]);
        }

        return back();
    }

    public function destroy($id)
    {
        User::find(Crypt::decrypt($id))->delete();
        return back();
    }

    public function profile_index()
    {
        return view('backend.users.profile');
    }
}
