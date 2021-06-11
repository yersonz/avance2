<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\direccion;
use Illuminate\Support\Facades\Auth;

class DireccionController extends Controller
{
        public function guardar(Request $request){
            $direccion=new Direccion();
            $direccion->region=$request->region;
            $direccion->provincia=$request->provincia;
            $direccion->distrito=$request->distrito;
            $direccion->residencia=$request->residencia;
            $direccion->id_usuario=auth::id();
            $direccion->save();
            echo "Direccion Guardada";
        }
}
