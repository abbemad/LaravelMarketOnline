<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

            $users = DB::table('users')
                ->selectRaw('users.id,
                users.name,
                users.email,
                users.password
')
                ->get();
            return view('users.index',compact('users'));

        return view('users.index');
    }

    public function insert(){
        return view('users.insert');
    }

    public function save(Request $request){

        $data = [   'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>$request->password];

        DB::table('users')->insert($data);
        return back();
    }

    public function edit($id){
        $users = DB::table('users')->where('id',$id)->first();
        return view('users.edit',compact('members', 'users'))->with('id',$id);
    }

    public function update(Request $request){
        $data = [   'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>$request->password];
                    
        DB::table('users')->where('id',$request->id)->update($data);
        return redirect('admin/users/list');
    }

    public function delete(Request $request){
        
        DB::table('users')->where('id',$request->id)->delete();
         return redirect('admin/users/list');
    }
}
