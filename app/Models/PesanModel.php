<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesanModel extends Model
{
    public function addOrder($data){
        DB::table('orders')->insert($data);
    }
}
