<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Petugas extends Model
{
    public function ShowData(){
        return DB::table('petugas')->get();
    }

    public function Detail($nama){
        return DB::table('petugas')->where('username',$nama)->first();
    }

    public function AddData($data){
        DB::table('petugas')->insert($data);
    }
}
