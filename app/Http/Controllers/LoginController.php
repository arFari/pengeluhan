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
        $result = DB::table('admin')->where('username', $request->user)->where('password', $request->pass)->first();
        $username = $result->username ?? null;
        if($username == null){
            return redirect('/loginpage');
        } else{
            return redirect('/admin');
        }
    }
}