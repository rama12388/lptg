<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class AdminCommentController extends Controller
{
    public function AdminComment()
    {
        $komentar = Komentar::orderBy('created_at', 'desc')->get();
        return view('a-comment', ['komentar' =>$komentar]);
    }
    

    public function destroy($id)
    {
        $komentar = Komentar::find($id);
        $komentar->delete();
        return redirect ('a-comment');
    }

}
