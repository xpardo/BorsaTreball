<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegEmpreController;
use App\Http\Controllers\RegAlumController;

use App\Http\Controllers\BorsaController;

use App\Http\Controllers\OfEmpreController;

use App\Http\Controllers\OfAlumController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\editEmpreController;
use App\Http\Controllers\PerfilController;

use App\Http\Controllers\PerfilAlumController;


use App\Http\Controllers\AuthController;


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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/', function (Request $request) {
    $message = 'Loading welcome page';
    Log::info($message);
    $request->session()->flash('info', $message);
    return view('welcome');
 });
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// ...
Route::get('mail/test', [MailController::class, 'test'])->middleware(['auth']);
// or
// Route::get('mail/test', 'App\Http\Controllers\MailController@test');



/*_________________________________________________________________________________________________________________*/



 


Route::get('signout', [RegEmpreController::class, 'signOut'])->name('signout');
Route::get('/perfilEmpre', [RegEmpreController::class, 'perfilEmpre'])->middleware('auth');



/*-------------------------------------------------- */

Route::resource('MyOferta', OfEmpreController::class);

Route::get('CreateOfert', [OfEmpreController::class,'create']);
Route::post('store', [OfEmpreController::class,'store']);
Route::get('edit/{id}', [OfEmpreController::class,'edit']);
Route::post('update', [OfEmpreController::class,'update']);
Route::get('delete/{id}', [OfEmpreController::class,'delete']);

/*------------------------------------ */


 
Route::get('/perfilAlum', [RegAlumController::class, 'perfilAlum'])->middleware('auth');







/*-------------------------------------------------- */

Route::resource('MySolicitud', OfAlumController::class);





/*-------------------------------------------------- */

Route::get('/borsa', [BorsaController::class, 'borsa'])->middleware('auth');


/*------------------------------------ */


Route::get('/logout', [SessionsController::class,'destroy']);
/**----------------------------------------- */







Route::get('/editempresa',function(){
    return view('editempresa');
});

Route::get('/editempresa',[editEmpreController::class, 'index'])->middleware('auth');



/**___________________________________________________ */




Route::get('/condi',function(){
    return view('borsa.condi');
});
Route::get('/politic',function(){
    return view('borsa.politic');
});



/**---------------------------------------------- */





Route::resource('profile', PerfilController::class);


Route::resource('perfilAlum', PerfilAlumController::class);



Route::get('/perfilAlumne',[PerfilAlumController::class, 'perfilAlumne'])->middleware('auth');
Route::post('/perfilAlum', [PerfilAlumController::class, 'perfilAlum'])->middleware('auth');


Route::get('email', [AuthController::class, 'email'])->name('email');
Route::post('enlace', [AuthController::class, 'enlace'])->name('enlace');
Route::get('clave/{token}', [AuthController::class, 'clave'])->name('clave');
Route::post('cambiar', [AuthController::class, 'cambiar'])->name('cambiar');