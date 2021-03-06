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
            'ID' => 'required|unique:menu,ID',
            'Nama' => 'required|min:5|max:25',
            'Harga' => 'required',
            'Deskripsi' => 'required|min:10|max:255',
            'Kategori' => 'required',
            'Gambar' => 'required|mimes:jpg,jpeg,png|max:3072'
        ]);

        
        $encode = file_get_contents(Request()->Gambar);
        $data = [
            'ID' => Request()->ID,
            'Nama' => Request()->Nama,
            'Harga' => Request()->Harga,
            'Deskripsi' => Request()->Deskripsi,
            'Gambar' => $encode,
            'Kategori' => Request()->Kategori,
        ];

        $this->AdminModel->addMenu($data);
        return redirect('admin/editmenu')->with('message', 'Menu berhasil ditambah!');
    }
}
