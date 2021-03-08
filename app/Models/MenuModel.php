<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MenuModel extends Model{
    public function allMenu(){
        return DB::table('menu')->get();
    }

    public function detailMenu($ID) {
        return DB::table('menu')->where('ID',$ID)->first();
    }

    public function showByKategori($kategori){
        return DB::table('menu')->where('Kategori',$kategori)->get();
    }
}
