<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validador_F;
use Illuminate\Http\Request;

class Controlador_V extends Controller
{
  public function ShowFormulario(){
    return view('Formulario');
  }
  public function ShowTabla(){
    return view('Tabla');
  }
  public function Procesador(Validador_F $req){
    return redirect('Formulario')->with('Succesful', 'Envio correcto');
  }
}
