<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MailController;
use App\Http\Controllers\RegEmpreController;
use App\Http\Controllers\RegAlumController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BorsaController;

use App\Http\Controllers\OfEmpreController;

use Spatie\Permission\Traits\HasRoles;


use App\Http\Controllers\OfAlumController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\editEmpreController;
use App\Http\Controllers\PerfilController;

use App\Http\Controllers\PerfilAlumController;

use App\Http\Controllers\PerfilEmpreController;

use App\Models\Curriculum;
use App\Models\Presentacio;
use App\Models\Recomanacio;
use App\Models\Oferta;

use Illuminate\Support\Facades\Input;

use App\User;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\CurriculumController;

use App\Http\Controllers\PresentacioController;

use App\Http\Controllers\RecController;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\OfertasController;

use App\Http\Controllers\SearchController;

use App\Http\Controllers\CandiController;




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

 

Route::get('/dashboard', [WelcomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// ...
Route::get('mail/test', [MailController::class, 'test'])->middleware(['auth']);
// or
// Route::get('mail/test', 'App\Http\Controllers\MailController@test');



/*_____________________________________________Empresa____________________________________________________________________*/


Route::resource('perfilEmpre', PerfilEmpreController::class)->middleware(['auth', 'role:3']);

Route::get('perfilEmpre.edit', [PerfilEmpreController::class, 'edit'])->name('perfilEmpre.edit')->middleware(['auth', 'role:3']);
Route::get('perfilEmpre.update', [PerfilEmpreController::class, 'update'])->name('perfilEmpre.update')->middleware(['auth', 'role:3']);



/**_____________________________________*/
 

 Route::get('/candidatures/{id}',[CandiController::class,'show'])->name('candidatures'); 

/**____________________________________________________________ */


//--------------------------------------------
// Revisades amb Pep
//--------------------------------------------


Route::get('/', [WelcomeController::class, 'index']);
Route::get('/welcome', [WelcomeController::class, 'index']);

Route::resource('ofertas', OfertasController::class);
Route::resource('ofempresa', OfEmpreController::class)->middleware(['auth', 'role:3']);
Route::get('ofempresa/{ofempresa}/candidatures', [OfEmpreController::class, 'candidatures'])->name('ofempresa.candidatures')->middleware(['auth', 'role:3']);
//--------------------------------------------
// candidatures empresa
//--------------------------------------------
Route::get('ofempresa/{ofempresa}/candidatures/{candidat}/curriculum', [OfEmpreController::class,'curriculum'])->name('ofempresa.curriculum')->middleware(['auth', 'role:3']);
Route::get('ofempresa/{ofempresa}/candidatures/{candidat}/presentacio', [OfEmpreController::class,  'presentacio'])->name('ofempresa.presentacio')->middleware(['auth', 'role:3']);
Route::get('ofempresa/{ofempresa}/candidatures/{candidat}/seleccionar', [OfEmpreController::class, 'seleccionar'])->name('ofempresa.seleccionar')->middleware(['auth', 'role:3']);

Route::post('ofempresa/notificar', [OfEmpreController::class, 'notificar'])->name('ofempresa.notificar')->middleware(['auth', 'role:3']);


//--------------------------------------------
// Alumne
//--------------------------------------------
Route::resource('curriculum', CurriculumController::class)->middleware(['auth', 'role:2']);

Route::resource('presentacio', PresentacioController::class)->middleware(['auth', 'role:2']);

Route::resource('recomenacio', RecController::class)->middleware(['auth', 'role:2']);

Route::resource('candi', CandiController::class)->middleware(['auth', 'role:2']);



//...........................

/* Route::get('ofempresa/{ofempresa}/curri', [OfEmpreController::class, 'curri'])->name('ofempresa.curri')->middleware(['auth', 'role:3']);
Route::get('ofempresa/{ofempresa}/presen', [OfEmpreController::class, 'presentacio'])->name('ofempresa.presen')->middleware(['auth', 'role:3']);
Route::get('ofempresa/{ofempresa}/email', [OfEmpreController::class, 'sendDemoMail'])->name('ofempresa.email')->middleware(['auth', 'role:3']);
Route::post('send', [OfEmpreController::class, 'send'])->name('ofempresa.send')->middleware(['auth', 'role:3']); */


/**____________________________________________Alumne_______________________________________________________________________*/




Route::resource('perfilAlum', PerfilAlumController::class)->middleware(['auth', 'role:2']);
Route::get('perfilAlum.edit', [PerfilAlumController::class, 'edit'])->name('perfilAlum.edit')->middleware(['auth', 'role:2']);
Route::get('perfilAlum.update', [PerfilAlumController::class, 'update'])->name('perfilAlum.update')->middleware(['auth', 'role:2']);


/**_____________________________________*/


Route::get('/search', [WelcomeController::class,'search'])->name('search');

/*____________________________________* */





 





/*-------------------------------------------------- */

Route::get('/borsa', [BorsaController::class, 'borsa'])->middleware('auth');


/*------------------------------------ */


Route::get('/logout', [SessionsController::class,'destroy']);
/**----------------------------------------- */






/**___________________________________________________ */




Route::get('/condi',function(){
    return view('borsa.condi');
});
Route::get('/politic',function(){
    return view('borsa.politic');
});



/**---------------------------------------------- */




Route::get('/search', [WelcomeController::class, 'index']);
Route::get('/ajax-autocomplete-search', [WelcomeController::class, 'selectSearch']);

/**--------------- */


Route::resource('profile', PerfilController::class);


Route::get('email', [AuthController::class, 'email'])->name('email');
Route::post('enlace', [AuthController::class, 'enlace'])->name('enlace');
Route::get('clave/{token}', [AuthController::class, 'clave'])->name('clave');
Route::post('cambiar', [AuthController::class, 'cambiar'])->name('cambiar');










