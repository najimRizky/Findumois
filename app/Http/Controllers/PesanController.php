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
        $lastKodeBeli = $this->PesanModel->getLastKodeBeli();
        $lastKodeBeli = $lastKodeBeli->kode_pembelian + 1;
        $data = [
            'id_menu' => Request()->id_menu,
            'jumlah' => Request()->jumlah,
            'email' => Request()->email,
            'kode_pembelian' => $lastKodeBeli,
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
            if($tmp!= null){
                $tmp->Jumlah = $item->jumlah;
                array_push($data2['data'],$tmp);
            }
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

    public function updateKeranjang(){
        $data = [
            'id_menu' => Request()->id_menu,
            'jumlah' => Request()->jumlah,
            'email' => Request()->email,
        ];  
        $this->PesanModel->updateCart($data, Request()->id_menu, Request()->email);
        return redirect('/keranjang')->with('message', 'Keranjang berhasil diupdate');
    }

    public function pesanDariKeranjang(){
        $email = Auth::user()->email;
        $data = array();

        $data = [
            'data' => $this->PesanModel->getCart($email),
        ];
        
        $lastKodeBeli = $this->PesanModel->getLastKodeBeli();
        $lastKodeBeli = $lastKodeBeli->kode_pembelian + 1;

        foreach($data['data'] as $item){
            $tmp = [
                'id_menu' => $item->id_menu,
                'jumlah' => $item->jumlah,
                'email' => $item->email,
                'kode_pembelian' => $lastKodeBeli,
            ];
            $this->PesanModel->addOrder($tmp);
        }
        $this->PesanModel->deleteCart($email);
        return redirect('/keranjang')->with('message', 'Checkout pesanan berhasil');
    }

    public function deleteDariKeranjang($id, $email){
        $this->PesanModel->deleteOneCart($email, $id);
        return redirect('/keranjang')->with('message', 'Item berhasil di delete');
    }

    public function history(){
        $email = Auth::user()->email;

        $data = [
            'data' => $this->PesanModel->getOrders($email), 
        ];
        $data2['data'] = array();    
        $tmp = array();
        foreach($data['data'] as $item){
            $tmp = $this->MenuModel->detailMenu($item->id_menu);
            if($tmp!= null){
                $tmp->Jumlah = $item->jumlah;
                $tmp->Tanggal = $item->tanggal;
                $tmp->Kode_Beli = $item->kode_pembelian;
                array_push($data2['data'],$tmp);
            }
        }
        return view('order', $data2);
    }
}
