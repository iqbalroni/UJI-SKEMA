<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{
    public function __construct(){
        $this->Warga = new Warga();
    }
    public function index(){
        if(session('status')){

            if(request()->cari == null){
                $data = [
                    'datawarga' => $this->Warga->ReadData(),
                ];
                return view('warga.index',$data);
            }else{
                $data = [
                    'datawarga' => $this->Warga->SearchData(request()->cari),
                ];
                return view('warga.index',$data);
            }


        }else{
            return redirect('/');
        }
    }

    public function create(){
        if(session('status')){
            return view('warga.create');
        }else{
            return redirect('/');
        }
        
    }

    public function save(){
        if(session('status')){
            request()->validate([
                'nik' => 'required',
                'nama' => 'required',
                'tempat' => 'required',
                'tanggal' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
            ]);
    
            $data = [
                'nama_warga' => Request()->nama,
                'nik' => Request()->nik,
                'tempat_lahir' => Request()->tempat,
                'tanggal_lahir' => Request()->tanggal,
                'alamat_rumah' => Request()->alamat,
                'no_hp' => Request()->no_hp,
            ];
    
            $this->Warga->AddData($data);
    
            return redirect()->route('warga')->with('pesan','Data Berhasil di Tambahkan');
        }else{
            return redirect('/');
        }
    }

    public function edit($nik){
        if(session('status')){
            $data = [
                'detail' => $this->Warga->detail($nik),
            ];
            return view('warga.edit',$data);
        }else{
            return redirect('/');
        }
    }

    public function update($nik){
        if(session('status')){
            request()->validate([
                'nik' => 'required',
                'nama' => 'required',
                'tempat' => 'required',
                'tanggal' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
            ]);
    
            $data = [
                'nama_warga' => Request()->nama,
                'nik' => Request()->nik,
                'tempat_lahir' => Request()->tempat,
                'tanggal_lahir' => Request()->tanggal,
                'alamat_rumah' => Request()->alamat,
                'no_hp' => Request()->no_hp,
            ];
    
            $this->Warga->EditData($nik,$data);
    
            return redirect()->route('warga')->with('pesan','Data Berhasil di edit');
        }else{
            return redirect('/');
        }
        
    }

    public function delete($nik){
        if(session('status')){
            $this->Warga->DeleteData($nik);
            return redirect()->route('warga')->with('pesan','Data Berhasil di hapus');
        }else{
            return redirect('/');
        }
    }
}
