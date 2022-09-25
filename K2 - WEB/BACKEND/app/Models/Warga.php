<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Warga extends Model
{
    public function ReadData(){
        return DB::table('warga')->get();
    }

    public function SearchData($key){
        return DB::table('warga')
        ->where('nama_warga','LIKE','%'.$key.'%')
        ->get();
    }

    public function AddData($data){
        DB::table('warga')->insert($data);
    }

    public function detail($nik){
        return DB::table('warga')->where('nik',$nik)->first();
    }

    public function EditData($nik,$data){
        DB::table('warga')
            ->where('nik',$nik)
            ->update($data);
    }

    public function DeleteData($nik){
        DB::table('warga')
            ->where('nik','=',$nik)
            ->delete();
    }
}
