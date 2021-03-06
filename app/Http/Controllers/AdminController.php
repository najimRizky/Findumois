<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\MenuModel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
        $this->MenuModel = new MenuModel();
    }
    public function index()
    {
        return view('admin.v_admin');
    }

    public function editMenu(){
        $data = [
            'menus' => $this->MenuModel->allMenu(), 
        ];
        return view('admin.editMenu',$data);
    }

    public function addMenu(){
        return view('admin.addmenu');
    }

    public function insert(){
        Request()->validate([
            'id' => 'required|unique:menu,ID',
            'nama' => 'required|min:5|max:25',
            'harga' => 'required',
            'desc' => 'required|min:10|max:100',
            'kategori' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:3072'
        ]);
    }
}
