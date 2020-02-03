<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $pengeluhan = DB::table('pengeluhan')->get();
        return view('admin', ['pengeluhan' => $pengeluhan]);
    }

    public function login(Request $request){
        
    }
}