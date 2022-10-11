<?php

namespace App\Http\Controllers;

use App\Certificado;
use Illuminate\Http\Request;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
            
            return view('auth/login');

    }
    public function gestao()
    {
        return view('gestoes.index');
    }

    public function curriculo()
    {
        return view('curriculos.index');
    }
    public function producao()
    {
        return view('producoes.index');
    }
    public function protagonismo()
    {
        return view('protagonismos.index');
    }
    public function comunitaria()
    {
        return view('comunitarias.index');
    }
    public function colaborativa()
    {
        return view('colaborativas.index');
    }
}
