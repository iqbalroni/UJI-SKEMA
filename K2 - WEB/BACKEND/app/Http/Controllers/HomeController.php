<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(session('status')){
            return view('dashboard');
        }else{
            return redirect('/');
        }
    }
}
