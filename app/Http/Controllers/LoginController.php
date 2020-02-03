<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $result = DB::table('admin')->where('username', $request->user && 'password', $request->pass)->get();
        if($result > 0){
            return view('admin');
        }
    }
}