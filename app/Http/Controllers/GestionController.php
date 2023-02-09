<?php

namespace App\Http\Controllers;

use App\User;
use Redirect;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request as resques;
use Illuminate\Support\Facades\Route;




class GestionController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth')->except(['carrito','flex','resumen','comprar']);
        $this->middleware('perfilMiddleware')->only('index');
        $this->middleware('LoginMiddleware')->only('comprar');
    }
    
    function index(){
        
        $perfil=User::with('perfil')->find(Auth::user()->id);
        
        echo $perfil;
        
    }
    function administrador(Request $request){
        return view('administrador');
    }
    function root(Request $request){
        echo 'root';
    }
    function carrito(){
        return view('carrito');
    }
    function flex(){
        return view('flex');
    }
    function resumen(){
        
        
        session(['url'=>resques::path()]);
        
        return view('resumen');
    }
    function comprar(){
        
        
    }

}
