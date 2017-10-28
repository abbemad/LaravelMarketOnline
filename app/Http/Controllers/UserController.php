<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function insert()
    {
        return view('users.insert');
    }
    public function save(Request $request)
    {
        $data = [   'first_name'=>$request->first_name,
                    'email_name'=>$request->email_name,
                    'password_name'=>$request->passwordname];
                    
        DB::table('users')->insert($data);
        return back();
    }
    public function edit($id)
    {
        return view('users.edit')->with('id',$id);
    }
    public function delete()
    {
        return view('users.delete');
    }
}
