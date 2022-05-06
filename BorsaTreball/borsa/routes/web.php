<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegEmpreController;
use App\Http\Controllers\RegAlumController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BorsaController;

use App\Http\Controllers\OfEmpreController;

use App\Http\Controllers\OfAlumController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\editEmpreController;
use App\Http\Controllers\PerfilController;

use App\Http\Controllers\PerfilAlumController;

use App\Http\Controllers\PerfilEmpreController;

use App\Models\Curriculum;
use App\Models\Presentacio;
use App\Http\Controllers\curriculumController;
use App\Http\Controllers\PresentacioController;


use Illuminate\Support\Facades\Input;

use App\User;



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



/*_____________________________________________Empresa____________________________________________________________________*/


Route::resource('perfilEmpre', PerfilEmpreController::class);


Route::get('/perfilEmpresa',[PerfilEmpreController::class, 'perfilEmpresa'])->middleware('auth');
Route::post('/perfilEmpre', [PerfilEmpreController::class, 'perfilEmpre'])->middleware('auth');



/**____________________________________________Alumne_______________________________________________________________________*/




Route::resource('perfilAlum', PerfilAlumController::class);



Route::get('/perfilAlumne',[curriculumController::class, 'perfilAlumne'])->middleware('auth');
Route::post('/perfilAlum', [curriculumController::class, 'perfilAlum'])->middleware('auth');




/**_____________________________________*/
 



Route::get('/curriculums', function () {
    $curri = Curriculum::all();
    return view('borsa.curriculums')->with('curri',$curri);
});



Route::post('/curriculums/register', [curriculumController::class, 'store'])->name('curri_register');
Route::get('/curriculums/file/{id}', [curriculumController::class, 'urlfile'])->name('curri_file');
Route::post('/curriculums/update', [curriculumController::class, 'update'])->name('curri_update');
Route::get('/curriculums/delete/{id}', [curriculumController::class, 'destroy'])->name('curri_delete');


/**_____________________________________*/


Route::get('/presentacio', function () {
    $pre = Presentacio::all();
    return view('borsa.presentacio')->with('pre',$pre);
});



Route::post('/presentacio/register', [PresentacioController::class, 'store'])->name('pre_register');
Route::get('/presentacio/file/{id}', [PresentacioController::class, 'urlfile'])->name('pre_file');
Route::post('/presentacio/update', [PresentacioController::class, 'update'])->name('pre_update');
Route::get('/presentacio/delete/{id}', [PresentacioController::class, 'destroy'])->name('pre_delete');


/*-------------------------------------------------- */

Route::resource('MyOferta', OfEmpreController::class);

Route::get('CreateOfert', [OfEmpreController::class,'create']);
Route::post('store', [OfEmpreController::class,'store']);
Route::get('edit/{id}', [OfEmpreController::class,'edit']);
Route::post('update', [OfEmpreController::class,'update']);
Route::get('delete/{id}', [OfEmpreController::class,'delete']);

/*------------------------------------ */


 







/*-------------------------------------------------- */

Route::resource('MySolicitud', OfAlumController::class);





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





Route::resource('profile', PerfilController::class);





Route::get('email', [AuthController::class, 'email'])->name('email');
Route::post('enlace', [AuthController::class, 'enlace'])->name('enlace');
Route::get('clave/{token}', [AuthController::class, 'clave'])->name('clave');
Route::post('cambiar', [AuthController::class, 'cambiar'])->name('cambiar');


