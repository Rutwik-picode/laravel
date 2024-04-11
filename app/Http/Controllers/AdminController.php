<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_data = DB::table('new_users')->get();

        return view('Admin', compact("users_data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('new_users')->insert([
            'userName' => $request->userName,
            'email' => $request->useremail,
            'password' => $request->userpass,
            'cpassword' => $request->usercpass
        ]);

        return view('adminDeshbord');
    }
    public function delete($id)
    {
        DB::table('new_users')->where('id', $id)->delete();

        return view('adminDeshbord');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_data = DB::table('new_users')->where('id', $id)->first();

        return view('edituser', compact("user_data"));
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
        $id = $request->id;
        DB::table('new_users')->where('id', $id)->update([
            'userName' => $request->userName,
            'email' => $request->email,
            'password' => $request->pass,
            'cpassword' => $request->cpass
        ]);

        return view('Admindeshbord');
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
