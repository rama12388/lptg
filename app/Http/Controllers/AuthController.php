<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function ReadLoginPage()
    {
        return view('auth/login');
    }

    // public function index(){
    //     if(!Session::get('login')){
    //         return redirect('login')->with('alert','Kamu harus login dulu');
    //     }
    //     else{
    //         return view('user');
    //     }
    // }
    //Ini sama dengan masuk ke halaman admin tp harus login dulu

    // public function login(){
    //     return view('admin/login');
    // }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('zhomewk');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
}
