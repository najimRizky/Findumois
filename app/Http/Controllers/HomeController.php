<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $data = [
            'nama_sekolah' => 'SMAN 2 Tangsel',
            'alamat' => 'tangsel'
        ];
        return view('home',$data);
    }
    
}