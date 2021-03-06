<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\ModelKaryawan;

class UserController extends Controller
{
    /**
* Create a new controller instance.
*
* @return void
    */
    public function __construct()
    {
        $this->middleware('auth');

    }
/**
* Show the application dashboard.
*
* @return \Illuminate\Http\Response

*/

    public function index(){

        return view('Admin/admin');

    }

    // public function create()
    // {
    //     return view('admin.users.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $this->validate($request, User::rules());
        
        $data = new User();
        $data->id = $request->id;
        $data->id_departemen = $request->id_departemen;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->password = bcrypt($request->password);
    //    $data->created_at = Carbon::now();
        $data->save();
        return redirect()->route('useraccess.index')->with('useraccess_success','User Akses Baru Berhasil Dibuat!');
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
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.index')->with('useraccess_success','User Akses Berhasil Dihapus!'); 
    }
}
