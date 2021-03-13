<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;
use App\Models\PesanModel;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->MenuModel = new MenuModel();
        $this->PesanModel = new PesanModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {   
        $data = [
            'id' => $id,
        ];
        return view('pesan',$data);
    }

    public function submitOrder(){
        $data = [
            'id_menu' => Request()->id_menu,
            'jumlah' => Request()->jumlah,
            'email' => Request()->email,
        ];  

        $this->PesanModel->addOrder($data);
        return redirect('/menu')->with('message', 'Pesanan berhasil ditambah');
    }

    public function keranjang(){
        return view('keranjang');
    }
}
