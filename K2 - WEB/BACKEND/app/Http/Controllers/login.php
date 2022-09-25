<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class login extends Controller
{
    public function __construct(){
        $this->Petugas = new Petugas();
    }

    public function index(){
        if(session('status')){
            return redirect('/home');
        }else{
            return view('login');
        }
    }

    public function authlogin(){
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = request()->username;
        $detail = $this->Petugas->detail($user);

        if(!$detail == null){
            
            if(Hash::check(request()->password,$detail->password)){
                session()->put([
                    'id_user' => $detail->id_petugas,
                    'nama' => $detail->nama_petugas,
                    'status' => true,
                ]);

                return redirect('/home');
            }else{
                return redirect()->route('login')->with('pesan','Password Salah');
            }

        }else{
            return redirect()->route('login')->with('pesan','Username Tidak Terdaftar');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
