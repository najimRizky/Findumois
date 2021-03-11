<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->MenuModel = new MenuModel();
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
}
