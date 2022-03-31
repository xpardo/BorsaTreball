<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegEmpreController;
use App\Http\Controllers\RegAlumController;

use App\Http\Controllers\BorsaController;

use App\Http\Controllers\OfEmpreController;

use App\Http\Controllers\OfAlumController;
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

Route::get('/', function (Request $request) {
    $message = 'Loading welcome page';
    Log::info($message);
    $request->session()->flash('info', $message);
    return view('welcome');
 });
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// ...
Route::get('mail/test', [MailController::class, 'test'])->middleware(['auth']);
// or
// Route::get('mail/test', 'App\Http\Controllers\MailController@test');



/*------------------------------------ */

Route::get('/registreEmpre',function(){
    return view('registreEmpre');
});

Route::get('/registreEmpre',[RegEmpreController::class, 'form'])->middleware('auth');
Route::post('registreEmpre', [RegEmpreController::class,'store']);







Route::get('/perfilEmpre', [RegEmpreController::class, 'perfilEmpre'])->middleware('auth');
/*-------------------------------------------------- */

Route::resource('MyOferta', OfEmpreController::class);

Route::get('CreateOfert', [OfEmpreController::class,'create']);
Route::post('store', [OfEmpreController::class,'store']);
Route::get('delete/{id}', [OfEmpreController::class,'delete']);
Route::get('edit/{id}', [OfEmpreController::class,'edit']);
Route::post('update', [OfEmpreController::class,'update']);

/*------------------------------------ */

Route::get('/registreAlumne',function(){
    return view('registreAlumne');
});
Route::get('/registreAlumne',[RegAlumController::class, 'form'])->middleware('auth');
Route::get('/perfilAlum', [RegAlumController::class, 'perfilAlum'])->middleware('auth');
/*-------------------------------------------------- */

Route::resource('MySolicitud', OfAlumController::class);





/*-------------------------------------------------- */

Route::get('/borsa', [BorsaController::class, 'borsa'])->middleware('auth');

/*------------------------------------ */


Route::get('/login', [SessionsController::class,'create']);
Route::post('/login', [SessionsController::class,'store']);
Route::get('/logout', [SessionsController::class,'destroy']);
/**----------------------------------------- */




Route::get('/login',function(){
    return view('login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();