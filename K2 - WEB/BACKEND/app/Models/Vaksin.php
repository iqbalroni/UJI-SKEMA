<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vaksin extends Model
{
    public function showData(){
        return DB::table('vaksin')
        ->join('warga','vaksin.warga_nik','=','warga.nik')
        ->join('petugas','vaksin.petugas_id','=','petugas.id_petugas')
        ->get();
    }

    public function AddData($data){
        DB::table('vaksin')->insert($data);
    }
}
