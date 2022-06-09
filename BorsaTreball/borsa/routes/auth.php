<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterEmpreController;
use App\Http\Controllers\Auth\RegisterAlumController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AlumController;
use App\Http\Controllers\Auth\EmpreController;
use App\Http\Controllers\PresentacioController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\RecController;
use App\Models\Curriculum;
use App\Models\Presentacio;
use App\Models\Recomanacio;
use App\Models\Oferta;



Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create']) ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');

    Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);

    
   
});

/**_________Epresa_________ */

Route::middleware('guest')->group(function () {
    Route::get('registreEmpre', [RegisterEmpreController::class, 'create'])->name('registreEmpre');

    Route::post('registreEmpre', [RegisterEmpreController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create']) ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
    Route::get('/reload-captcha', [App\Http\Controllers\Auth\EmpreController::class, 'reloadCaptcha']);


});

/**_________Alumne_________ */


Route::middleware('guest')->group(function () {
    Route::get('registreAlumne',[RegisterAlumController::class, 'create'])->name('registreAlumne');

    Route::post('registreAlumne', [RegisterAlumController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create']) ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
    Route::get('/reload-captcha', [App\Http\Controllers\Auth\AlumController::class, 'reloadCaptcha']);
     
});


/**___________________________________________________________________________________ */



Route::middleware('auth')->group(function () {
    /*Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');*/

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});



Route::get('/curri.index', function () {
    $curris = Curriculum::all();
    return view('/curri.index')->with('curris',$curris);
});
Route::get('/curri.create', function () {
    $curris = Curriculum::all();
    return view('curri.create')->with('curri',$curris);
});

Route::get('/pre.index', function () {
    $pres = Presentacio::all();
    return view('pre.index')->with('pres',$pres);
});
Route::get('/pre.create', function () {
    $pres = Presentacio::all();
    return view('pre.create')->with('pres',$pres);
});


Route::get('/rec.index', function () {
    $recs = Recomanacio::all();
    return view('rec.index')->with('recs',$recs);
});
Route::get('/rec.create', function () {
    $recs = Recomanacio::all();
    return view('rec.create')->with('recs',$recs);
});

