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
        $valid = DB::table('penduduk')->where('nik', $request->nik)->first();
        $nik = $valid->nik ?? null;
        if($nik == null){
            return redirect()->back()->with('alert', 'Anda bukan warga Jakarta Barat');
        } else{
            $id = date("dhs").rand(11,99);
            $keluh = (string) $id;
            $result = DB::table('pengeluhan')->insert([
                'id_pengeluhan' => $id,
                'nik' => $request->nik,
                'jenis' => $request->jenis,
                'keluhan' => $request->keluhan,
                'lokasi' => $request->lokasi,
                'status' => "Diproses",
                'feedback' => "Belum Diberi Feedback"
            ]);
            return redirect()->back()->with('alert', 'Keluhan anda behasil dikirim dengan ID '.$keluh);
        }
    }

    public function searchPage(){
        return view('search');
    }

    public function search(Request $request){
        $result = null;
        if(isset($request->nik)){
            $result = DB::table('pengeluhan')->where('nik', $request->nik)->get();
        }
        else if(isset($request->id)){
            $result = DB::table('pengeluhan')->where('id_pengeluhan', $request->id)->get();
        }
        return view('search', ['pengeluhan' => $result]);
    }

    public function feedbackPage(){
        return view('feedback');
    }

    public function feedback(Request $request){
        $valid = DB::table('pengeluhan')->where('id_pengeluhan', $request->id)->first();
        $id = $valid->id_pengeluhan ?? null;
        if($id == null){
            return redirect()->back()->with('alert', 'ID tidak terdaftar');
        } else{
            DB::table('pengeluhan')->where('id_pengeluhan', $id)->update(['feedback' => $request->feedback]);
            return redirect()->back()->with('alert', 'Feedback berhasil dikirim');
        }
    }

    public function about(){
        return view('about');
    }
}