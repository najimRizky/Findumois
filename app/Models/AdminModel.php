<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function addMenu($data){
        DB::table('menu')->insert($data);
    }

    public function editMenu($data){
        DB::table('menu')->where('ID', $data['ID'])->update($data);
    }
}
