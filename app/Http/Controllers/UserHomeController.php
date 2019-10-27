<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journals;
use DB;


class UserHomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function First()
    // {
    //     return view ('user/u-home');
    // }

    public function index()
    {
    	$datas_location = DB::table('journals')
            ->select(DB::raw('count(*) as jumlah_data, location'))
            ->groupBy('location')
            ->get();
        $datas_kk = DB::table('journals')
            ->select(DB::raw('count(*) as jumlah_kk, jenis_kk'))
            ->groupBy('jenis_kk')
            ->get();
        return view('user/u-home', compact('datas_location', 'datas_kk'));


    }
}
