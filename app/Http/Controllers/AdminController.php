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

    public function edit($id){
        DB::table('pengeluhan')->orderBy('id_pengeluhan')->where('id_pengeluhan', $id)->update(['status' => 'Telah Diselesaikan']);
        return redirect('/admin');
    }

    public function search(Request $request){
        $result = null;
        if(isset($request->date)){
            $result = DB::table('pengeluhan')->whereDate('tanggal', $request->date)->get();
        }
        else if(isset($request->bulan)){
            $result = DB::table('pengeluhan')->whereMonth('tanggal', $request->bulan)->get();
        }
        else if (isset($request->nik)) {
            $result = DB::table('pengeluhan')->where('nik', $request->nik)->get();
        }
        else if (isset($request->jenis)) {
            $result = DB::table('pengeluhan')->where('jenis', $request->jenis)->get();
        }
        return view('admin', ['pengeluhan' => $result]);
    }

    public function searchMonth(Request $request){
        DB::table('pengeluhan')->whereMonth('tanggal', $request->bulan);
        return redirect('/admin');
    }

    public function searchNik(Request $request){
        $result = DB::table('pengeluhan')->where('nik', 'like', '%'+$request->nik+'%')->get;
        return redirect('/admin');
    }

    public function searchJenis(Request $request){
        $result = DB::table('pengeluhan')->where('jenis', 'like', '%'+$request->jenis+'%')->get;
        return redirect('/admin');
    }
}