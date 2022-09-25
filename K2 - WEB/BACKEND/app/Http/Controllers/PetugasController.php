<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function __construct()
    {
        if (session('status')) {
        } else {
            return redirect('/');
        }
        $this->Petugas = new Petugas();
    }

    public function index()
    {
        if (session('status')) {
            $data = [
                'all' => $this->Petugas->ShowData(),
            ];
            return view('petugas.index', $data);
        } else {
            return redirect('/');
        }
    }

    public function create()
    {
        if (session('status')) {
            return view('petugas.create');
        } else {
            return redirect('/');
        }
    }

    public function save()
    {
        if (session('status')) {
            request()->validate([
                'nama' => 'required',
                'username' => 'required',
                'password' => 'required',
            ]);

            $data = [
                'nama_petugas' => Request()->nama,
                'username' => Request()->username,
                'password' => Hash::make(Request()->password),
            ];

            $this->Petugas->AddData($data);

            return redirect()->route('petugas');
        } else {
            return redirect('/');
        }
    }
}
