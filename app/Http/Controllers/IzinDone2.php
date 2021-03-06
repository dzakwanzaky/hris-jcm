<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;
use Auth;



class IzinDone2 extends Controller
{
    //
    public function index(){
        $data = ModelIzin::where('status', 'Disetujui Manager/Supervisor')->orwhere('status', 'Ditolak Manager/Supervisor')->orwhere('status', 'Disetujui')->orwhere('status', 'Ditolak')->get();
        return view('AdminDepartemen/izindone2', compact('data'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
