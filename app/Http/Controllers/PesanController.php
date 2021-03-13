<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;
use App\Models\PesanModel;
use Illuminate\Support\Facades\Auth;

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

    public function showKeranjang(){
        $email = Auth::user()->email;

        $data = [
            'data' => $this->PesanModel->getCart($email), 
        ];
        $data2['data'] = array();    
        $tmp = array();
        foreach($data['data'] as $item){
            $tmp = $this->MenuModel->detailMenu($item->id_menu);
            $tmp->Jumlah = $item->jumlah;
            array_push($data2['data'],$tmp);
        }
        return view('keranjang', $data2);
    }

    public function setKeranjang($id, $jumlah){
        $email = Auth::user()->email;
        $data = [
            'id_menu' => $id,
            'jumlah' => $jumlah,
            'email' => Auth::user()->email,
        ];  
        $this->PesanModel->addCart($data, $id, $email);
        return redirect('/menu')->with('message', 'Pesanan berhasil dimasukkan ke keranjang');
    }

    public function pesanDariKeranjang(){

    }

    public function deleteDariKeranjang(){
        
    }
}
