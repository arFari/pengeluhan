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
        DB::table('pengeluhan')->where('id_pengeluhan', $id)->update(['status' => 'Telah Diselesaikan']);
        return redirect('/admin');
    }

    public function searchDate(Request $request){
        DB::table('pengeluhan')->whereDate('tanggal', $request->date);
        return redirect('/admin');
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