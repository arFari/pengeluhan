<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function submit(Request $request){
        DB::table('pengeluhan')->insert([
            'id_pengeluhan' => date("dhs").rand(11,99),
            'nik' => $request->nik,
            'jenis' => $request->jenis,
            'keluhan' => $request->keluhan,
            'lokasi' => $request->lokasi,
            'status' => "Diproses",
            'feedback' => "Belum Diberi Feedback"
        ]);
        return redirect('/');
    }
}