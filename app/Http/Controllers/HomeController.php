<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

   public function adminHome() {
       return view('admin.adminHome');
    }
    public function estoqueMenu(){
        return view('estoqueMenu');
    }
    public function estoqueEntradas(){
        return view('entrada');
    }
    public function profile(){
        return view('admin.perfil');
    }
    public function editProfile(){
        return view('admin.editarPerfil');
    }
}
