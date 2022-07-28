<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriodoAcademicoController;
use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\ProgramaController;

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
/*use Spatie\Permission\Models\Role;
Role::create(['name' => 'admin']);
Role::create(['name' => 'docente']);*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function () {
    Route::get('/admin', function () {
        return view('home');
    });
Route::resource('users', UserController::class);
Route::resource('periodo-academicos', PeriodoAcademicoController::class);
Route::resource('ambientes', AmbienteController::class);
Route::resource("horarios", HorarioController::class);
Route::resource("competencias", CompetenciaController::class);
Route::resource("docentes", DocenteController::class);
Route::resource('programas', ProgramaController::class);

});


Route::group(['prefix'=>'docente','middleware'=>['auth','role:docente']],function () {
    //Route::get('/docentes/horario/{id}', [DocenteController::class,'horario']);
    //Route::resource("docentes", DocenteController::class);
    });





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
