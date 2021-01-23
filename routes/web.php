<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "Hola, estás en la raíz del dominio";
});

Route::get("/noticias", function () {
    return "Estás en la sección de noticias";
});

Route::post("/noticias", function ()
{
    return "Esta ruta es para agregar nuevas noticias";
});

Route::match(["get", "post"], "/blog", function ()
{
    return "Aquí llegamos con get o post";
});

Route::any("/promociones", function ()
{
    return "Aquí llegamos con todos los métodos";
});

Route::get("/usuarios/{id}", function ($id)
{
    return "Aquí se muestra la información del usuario: ".$id;
});

Route::get("/bienvenida/{nombre}", function ($nombre = NULL)
{
    $respuesta = "Bienvenida";
    if($nombre)
    {
        $respuesta .= "".$nombre;
    }else{
        $respuesta .= " usuario";
    }
    return $respuesta;;
});