<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (Request $request) {
    $message = 'Loading welcome page';
    Log::info($message);
    $request->session()->flash('info', $message);
    return view('welcome');
 });
 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::get('/registreEmpre',function(){
//     return view('registreEmpre');
// });



// Route::get('/registreEmpre',[RegistreController::class, 'regi'])->middleware('auth');





// Route::get('/registreAlumne',function(){
//     return view('registreAlumne');
// });



// Route::get('/registreAlumne',[AlumneController::class, 'regi'])->middleware('auth');




require __DIR__.'/auth.php';