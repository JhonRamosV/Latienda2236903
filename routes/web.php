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
    return view('welcome');
});

Route::get('paises' , function(){ 
    $paises =[
        "Colombia" => [
            "cap" => "Bogota",
            "mon" => "Peso",
            "pob" => "51.6",
            "ciudades" => [
                "Medellin",
                "Cali", 
                "Barranquilla"
            ]
            ],
            "Ecuador" => [
                "cap" => "Quito",
                "mon" => "Dolar",
                "pob" => "20",
             "ciudades"=> [
            "Cuenca",
            "Guayaquil"
             ]
             ],
             "Venezuela" => [
                "cap" => "Caracas",
                "mon" => "Bolivar",
                "pob" => "28.44",
             "ciudades"=> [
            "Maracaibo",
            "Zulia",
            "Barquisimeto",
            "Merida"
             ]
             ],
             "Paraguay" => [
                "cap" => "Asunción",
                "mon" => "Guaraní",
                "pob" => "7.1",
             "ciudades"=> [
            "Ciudad del este"
             ]
             ],
             "Jamaica" => [
                "cap" => "Kingston",
                "mon" => "Dólar Jaimaiquino",
                "pob" => "2.9",
             "ciudades"=> [
            "Bahía Montego",
            "Port Antonio",
            "Falmouth",
            "Nagril",
            "Mandeville"
             ]
             ]
        
             ];

        //mostrar vistas

           return view('paises')->with('paises',$paises); 
});


Route::get('prueba', function(){
    return view('productos.create');
});