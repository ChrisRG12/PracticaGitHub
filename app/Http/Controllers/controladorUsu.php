<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Importamos el request
use App\Http\Requests\validadorUsu;

class controladorUsu extends Controller
{
     //Creamos 2 funciones en las cuales nos van a regresar una vista

    public function showWelcome(){ 
        return view ('Welcome');
      }

      public function showinicio(){ 
        return view ('inicio');
      }

      //Creamos la funcion para procesar la peticion del formulario 
      public function procesarUsu(validadorUsu $req){ 
        return view ('inicio');
      }

  
}
