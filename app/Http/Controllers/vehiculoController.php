<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehiculo;
class vehiculoController extends Controller
{
    public function index(){
        $vehiculos = vehiculo::all();
       return view('index', compact('vehiculos'));
    }
    public function create(){
     return (view('index'));
    }
    public function store(Request $request){
      $vehiculo = new vehiculo();
      $vehiculo->marca = $request->marca;
      $vehiculo->Modelo = $request->Modelo;
      $vehiculo->tipo = $request->tipo;
      $vehiculo->save();

        return redirect('index');
        
    }

}
