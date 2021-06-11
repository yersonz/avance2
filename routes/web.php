<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\DireccionController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view("/", "welcome");
Route::view("/ingreso-usuario","ingresarUsuario");
Route::post("/ingresar-usuario",[UsuarioController::class,"guardar"]);
Route::get("/mostrar-usuario",[UsuarioController::class,"mostrar"]);
Route::get("/actualizar-usuario/{id}",[UsuarioController::class,"mostrarUsu"]);
Route::post("/actualizar-usuario",[UsuarioController::class,"actualizar"]);
Route::delete("/eliminar-usuario/{id}",[UsuarioController::class,"eliminar"])->name("eliminar");



Route::view("/ingreso-proveedor","ingresarProveedor");
Route::post("/ingresar-proveedor",[ProveedorController::class,"guardar"]);

Route::view("/ingreso-servicios","servicios");
Route::get("/ingresar-servicio",function (){
   if (Auth::check()){
       return view("servicios");
   }else{
       return redirect("/login");
   }
})->name("servicio");

Route::get("/mostrar-proveedor",[ProveedorController::class,"mostrar"]);
Route::get("/actualizar-proveedor/{id}",[ProveedorController::class,"mostrarProveedor"]);
Route::post("/actualizar-proveedor",[ProveedorController::class,"actualizar"]);

Route::delete("/eliminar-proveedor/{id}",[ProveedorController::class,"eliminar"])->name("eliminar");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view("/subir-archivos", "archivos");
Route::post("/subir-archivos",function (){
    return \request()->file("archivo")->store("imagenes");
});



Route::view("/ingresar-direccion", "guardarDireccion");
Route::post("/guardar-direccion",[DireccionController::class,'guardar']);

Route::get("/mostrar-servicio",function () {
    if (Auth::check()){
        return view("mostrarServicios");
    }else{
        return redirect("/login");
    }

})->name("mostrar_servicio");

Route::get("/ingresar-detalles",function () {
    if (Auth::check()){
        return view("ingresarDetalle");
    }else{
        return redirect("/login");
    }

})->name("compras");

Route::get("/mostrar-detalles",function () {
    if (Auth::check()){
        return view("mostarDetalle");
    }else{
        return redirect("/login");
    }

})->name("mostrar_compra");


