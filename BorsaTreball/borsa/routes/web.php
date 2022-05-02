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

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegEmpreController;
use App\Http\Controllers\RegAlumController;

use App\Http\Controllers\BorsaController;

use App\Http\Controllers\OfEmpreController;

use App\Http\Controllers\OfAlumController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\editEmpreController;

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
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// ...
Route::get('mail/test', [MailController::class, 'test'])->middleware(['auth']);
// or
// Route::get('mail/test', 'App\Http\Controllers\MailController@test');



/*_________________________________________________________________________________________________________________*/



/* Route::get('/registreEmpre',function(){
    return view('borsa.registreEmpre');
});


    Route::middleware('guest')->group(function () {

        Route::get('/registreEmpre',[RegEmpreController::class, 'registration'])->name('/registreEmpre'); 

        Route::put('custom-registrations', [RegEmpreController::class, 'customRegistrationemp'])->name('register.customs');

        Route::post('registreEmpre', [RegEmpreController::class, 'store']);

        Route::get('login', [LoginEmpreController::class, 'create'])->name('login');

        Route::post('login', [LoginEmpreController::class, 'store']);

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create']) ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');

    });
 */

 


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

/* Route::get('/registreAlumne',function(){
    return view('borsa.registreAlumne');
});





Route::middleware('guest')->group(function () {

    Route::get('/registreAlumne ', [RegAlumController::class, 'registration'])->name('/registreAlumne');

    Route::put('custom-registration', [RegAlumController::class, 'customRegistration'])->name('register.custom'); 

    Route::post('registreAlumne', [RegAlumController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create']) ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');

    Route::get('signout', [RegAlumController::class, 'signOut'])->name('signout');

});

 
  */
 
Route::get('/perfilAlum', [RegAlumController::class, 'perfilAlum'])->middleware('auth');


/* Route::post('log', [RegAlumController::class, 'index'])->name('log');
Route::post('custom-log', [RegAlumController::class, 'customLog'])->name('log'); 
 */
/* Route::get('/registreAlumne',[RegAlumController::class, 'create']);

Route::post('registreAlumne', [RegAlumController::class,'store']); */




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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


