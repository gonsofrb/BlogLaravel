<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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
//Si se pone class, llama al metodo invoke
Route::get('/', HomeController::class);


//Definimos otra ruta
//De esta manera asignamos el método index.
Route::get('cursos',[CursoController::class,'index']);


//cursos/create
//queremos crear una ruta que contenga un formulario para crear un curso
Route::get('cursos/create',[CursoController::class,'create']);

//cursos/javascript
//Definimos otra ruta pasandome un parámetro por la url
Route::get('cursos/{curso}',[CursoController::class,'show']);

//Pasmos mas de un parametro por la url
//con ? indicamos que esa variable puede ser opcional
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if($categoria){
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso: $curso";
//     }
      
// });