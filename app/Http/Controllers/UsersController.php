<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user= new User();
        return view('users.form_nuevo', compact('user'));
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
        $user= (new User)->fill([
            'name'=>$request->get('user_name'),
            'email'=>$request->get('user_email'),
            'password'=>Hash::make($request->get('user_pass')),
            'role_id'=>1
        ]);
        request()->validate([
            "file_avatar"=>"image",
            "user_name" => "required",
            "user_email" => "required|email",
            "user_pass"=>"required|confirmed"
        ]);
        if($request->hasFile('file_avatar')){
            $user->avatar=$request->file('file_avatar')->store('public');
        }
        return redirect()->route('usuario.index');
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
        $user= User::findOrFail($id);
        return view('users.form_editar',compact('user'));
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
        $user = User::findOrFail($id);
        request()->validate([
            "user_name" => "required",
            "user_email" => "required|email",
            "user_pass"=>"required|confirmed"
        ]);
        if($request->hasFile('file_avatar')){
            $user->avatar=$request->file('file_avatar')->store('public');
        }
        $user->update([
            'name'=>$request->get('user_name'),
            'email'=>$request->get('user_email'),
            //'password'=>Hash::make($request->get('user_pass')),
            'role_id'=>1
        ]);
        return redirect()->route('usuario.index');
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
}
