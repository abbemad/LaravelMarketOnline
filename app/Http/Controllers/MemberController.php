<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class MemberController extends AdminController
{ 

    public function index()
    {
            $memberlist = DB::table('memberlist')
                ->selectRaw('memberlist.id,
                memberlist.name,
                memberlist.email
')
                ->get();
            return view('members.index',compact('memberlist'));

        return view('members.index');
    }

    public function save(Request $request)
    {
            $data = ['name'=>$request->name,
            'email'=>$request->email,
            'member'=>$request->member];
            DB::table('memberlist')->insert($data);
            return back();
    }
            
    public function insert()
    {
            return view ('members.insert',['members'=>Member::all()]);

    }
}
