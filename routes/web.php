<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nuevavistaController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//*get= obtener post=guardar 
//put=acutualizar 
//detele=eliminar*/
//ruta enviar un mensaje por url

Route::get('/nueva-ruta', function () {
    return "Hola mundo";
});
//Ruta para mostrar una vista

Route::view('/nueva-vista', 'nuevavista'); 
//ruta e spara enviar parametros por medio de las rutas
Route::view('/nueva-vista', 'nuevavista', ['nombre'=>'Laravel']); 

Route::get('/ruta-controlador', [nuevavistaController::class, 'index']);

//ruta para enviar un parametro en la URL

Route::get('/nueva-vista', function(Request $request){
    return "Function Request" .$request->get('variable');
});

//Ruta para recibir parametros en la URL por medio del controlador
Route::get('/ruta-controlador/{id}', [nuevavistaController::class, 'recibirParametros'])->name('prueba');

//Grupo de rutas
Route::prefix('ruta')->group(function(){
    Route::name('ruta.')->group(function(){
        Route::get('/users', function(){
            return view('nuevavista', ['nombre'=>'Laravel']);
    })->name('users'); //nombre de la ruta



Route::get('/users/create', [nuevavistaController::class, 'create'])->name('users.create');
Route::get('/users/show', [nuevavistaController::class, 'show'])->name('users.show');
Route::get('/users/edit', [nuevavistaController::class, 'edit'])->name('users.edit');
Route::get('/users/detele', [nuevavistaController::class, 'destroy'])->name('users.detele');
});


});

Route::get('productos', [nuevavistaController::class, 'mostrarProductos'])->middleware('verificar_usuario');
Route::get('no_admin', [nuevavistaController::class, 'noAdmin'])->name('no_admin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
