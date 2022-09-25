<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;

class IndexController extends Controller
{
    public function __construct(){
        $this->Vaksin = new Vaksin();
    }
    public function index(){
        $data = [
            'all' => $this->Vaksin->showData(),
        ];
        return view('index',$data);
    }
}
