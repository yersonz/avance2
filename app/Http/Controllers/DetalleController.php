<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use Illuminate\Http\Request;
use App\Models\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\categoria;


class DetalleController extends Controller
{
    public function archivo(){

        $consulta = Detalle::orderBy('ide','DESC')
                            ->take(1)->get();
        $cuantos = count($consulta);
        if ($cuantos==0){
            $idesigue=1;
        }else{
            $idesigue = $consulta[0]->ide+1;
        }
        $categorias = categoria::orderBy('nombre')->get();
        return view('archivos')
                    ->with('idesigue',$idesigue)
                    ->with('categoria',$categorias);
    }
    public function GuardarArchivo(Request $request){
        $request->validate(
            [   'nombre'=>'required | alpha',
                'descripcion'=>'required',
            ]
        );
        $detalle = New Detalle();
        $detalle->ide = $request->ide;
        $detalle->nombre = $request->nombre;
        $detalle->descripcion = $request->descripcion;
        $detalle->idd = $request->idd;
        $detalle->save();

        return view('mensajes')->with('proceso', "AVISO")->with('mensaje','La publicacion el con titulo'.' '.$request->nombre.' '. 'ha sido creado correctamente');


        /*  $foto = $request->file('archivo');
        $contenido = $foto->openFile()->fread($foto->getSize());

        $detalle = Detalle::find(Auth::id());
      */

      /*  $name = $request->file('archivo')->getClientOriginalName();
        $path = $request->file('archivo')->storeAs('public/image',$name);
        return $path; */
    }
}
