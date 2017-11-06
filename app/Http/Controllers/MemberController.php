<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
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
}
