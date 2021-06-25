<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Detalle;
use App\Models\categoria;

class ConsultaController extends Controller
{
    public function consulta(){
        $consulta = Detalle::join('categorias','detalles.idd','=','categorias.idd')
            ->select('detalles.ide','detalles.nombre','detalles.descripcion','categorias.nombre as cate')
            ->get();
        return view('servicios')->with('consulta',$consulta);
    }
}
