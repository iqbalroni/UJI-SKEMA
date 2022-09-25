<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use App\Models\Vaksin;

class VaksinController extends Controller
{
    public function __construct(){
        $this->Warga = new Warga();
        $this->Vaksin = new Vaksin();
    }

    public function index(){
        if(session('status')){
            $data = [
                'all' => $this->Vaksin->showData(),
            ];
            return view('vaksin.index',$data);
        }else{
            return redirect('/');
        }
    }

    public function create(){
        if(session('status')){
            return view('vaksin.create');
        }else{
            return redirect('/');
        }
    }

    public function save(){
        if(session('status')){
            request()->validate([
                'nik' => 'required',
                'periode' => 'required',
                'deskripsi' => 'required',
            ]);
    
            $tes = request()->nik;
    
            if(!$this->Warga->detail($tes) == null){
                $data = [
                    'periode' => Request()->periode,
                    'deskripsi' => Request()->deskripsi,
                    'warga_nik' => Request()->nik,
                    'petugas_id' => session('id_user'),
                ];
    
                $this->Vaksin->AddData($data);
    
                return redirect()->route('vaksin');
            }else{
                return redirect()->route('reg')->with('pesan','Nik Belum Terdaftar Di Data Warga');
            }
        }else{
            return redirect('/');
        }
    }
}
