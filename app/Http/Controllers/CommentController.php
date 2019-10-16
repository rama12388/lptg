<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use DB;


class CommentController extends Controller
{
    //public function __construct()
    //{
        //$this->middleware('auth');
    //}

    //public function ReadComment(){
    //    $komen = DB::table('komentar')->get();
    //    return view('/user/comment');}

    public function ReadComment()
    {
        $komentar = Komentar::orderBy('created_at', 'desc')->get();
        return view('user/comment', ['komentar' =>$komentar]);
    }
    
    public function PostComment(Request $request)
    {
        
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'email' => 'required'
        //     ]);	

        Komentar::create([
            'nama' => $request ->nama,
            'email' => $request ->email,
            'komen' => $request ->komen,
            
            ]);	

        // DB::table('pegawai')->insert([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'komen' => $request->komen]);

        // $komentar = new Komentar;
        // $komentar->nama = $request->nama;
        // $komentar->email = $request->email;
        // $komentar->komen = $request->komen;
            
        // $komentar -> save();

        return redirect ('/user/comment');
        // return back()->with('success', 'oks');
    }
}
