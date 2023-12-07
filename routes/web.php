<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CetproController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DetalleMatriculaController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\ProgramaController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('admin.alumnos.index');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


//RUTA PARA MOSTRAR OTRO PDF
Route::get('/generar-pdf/{alumno}/{pdfType?}', [AlumnoController::class, 'show'])->name('admin.alumnos');

//RUTA ALUMNOS
// Route::resource('alumnos', AlumnoController::class)->except('show')->names('admin.alumnos');
Route::group(['middleware' => ['auth']], function () {
    // RUTA CETPRO
    // Route::get('/alumnos/pdf/{alumnos}', [AlumnoController::class, 'pdf'])->name('admin.alumnos.pdf');
    // Route::resource('alumnos', AlumnoController::class)->except('show')->names('admin.alumnos');
    Route::resource('alumnos', AlumnoController::class)->names('admin.alumnos');

});

//RUTA CETPRO
// Route::resource('cetpros', CetproController::class)->except('show')->names('admin.cetpros');
Route::group(['middleware' => ['auth']], function () {
    // RUTA CETPRO
    Route::resource('cetpros', CetproController::class)->except('show')->names('admin.cetpros');
});

//RUTA CURSOS
// Route::resource('cetpros', CetproController::class)->except('show')->names('admin.cetpros');
Route::group(['middleware' => ['auth']], function () {
    // RUTA CETPRO
    Route::resource('cursos', CursoController::class)->except('show')->names('admin.cursos');
});

//RUTA CETPRO
// Route::resource('cetpros', CetproController::class)->except('show')->names('admin.cetpros');
Route::group(['middleware' => ['auth']], function () {
    // RUTA CETPRO
    Route::resource('marketings', MarketingController::class)->except('show')->names('admin.marketings');
});

//RUTA CETPRO
// Route::resource('cetpros', CetproController::class)->except('show')->names('admin.cetpros');
Route::group(['middleware' => ['auth']], function () {
    // RUTA CETPRO
    Route::resource('programas', ProgramaController::class)->except('show')->names('admin.programas');
});

//RUTA matriculas
// Route::resource('cetpros', CetproController::class)->except('show')->names('admin.cetpros');
Route::group(['middleware' => ['auth']], function () {
    // RUTA matriculas
    Route::resource('detallematricula', DetalleMatriculaController::class)->except('show')->names('admin.matricula');
});


