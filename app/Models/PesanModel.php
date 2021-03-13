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

    public function addCart($data, $id, $email){
        if(DB::table('cart')->where('email',$email)->where('id_menu',$id)->get()->isEmpty()){
            DB::table('cart')->insert($data);
        }else{
            $tmp =  DB::table('cart')->where('email',$email)->where('id_menu',$id)->get('jumlah');
            $data['jumlah'] += $tmp[0]->jumlah;
            DB::table('cart')->where('email',$email)->where('id_menu',$id)->update($data);
        }
    }

    public function getCart($email){
        return DB::table('cart')->where('email',$email)->get();
    }

    public function deleteCart($email){
        DB::table('cart')->where('email', $email)->delete();
    }

    public function getLastKodeBeli(){
        return DB::table('orders')->latest('kode_pembelian')->first('kode_pembelian');
    }

    public function getOrders($email){
        return DB::table('orders')->where('email',$email)->get();
    }
}
