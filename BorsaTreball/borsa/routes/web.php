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




use App\Http\Controllers\curriculumController;
use App\Http\Controllers\LlistaCurriController;

use App\Http\Controllers\PresentacioController;
use App\Http\Controllers\LlistaPresenController;

use App\Http\Controllers\RecController;
use App\Http\Controllers\LlistaRecController;


use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\OfertasController;


use App\Http\Controllers\SearchController;

use App\Http\Controllers\CandiController;
use App\Http\Controllers\CandiOfertController;



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

 

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// ...
Route::get('mail/test', [MailController::class, 'test'])->middleware(['auth']);
// or
// Route::get('mail/test', 'App\Http\Controllers\MailController@test');



/*_____________________________________________Empresa____________________________________________________________________*/


Route::resource('perfilEmpre', PerfilEmpreController::class)->middleware(['auth', 'role:3']);;




/**_____________________________________*/
 

 Route::get('/candidatures/{id}',[CandiController::class,'show'])->name('candidatures'); 

/**____________________________________________________________ */


/**______________________________________ */

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/welcome', [WelcomeController::class, 'index']);

Route::resource('ofertas', OfertasController::class);

Route::resource('ofempresa', OfEmpreController::class)->middleware(['auth', 'role:3']);

Route::resource('candi', CandiController::class)->middleware(['auth', 'role:2']);

Route::get('/search', [WelcomeController::class,'search'])->name('search');



/**____________________________________________Alumne_______________________________________________________________________*/




Route::resource('perfilAlum', PerfilAlumController::class)->middleware(['auth', 'role:2']);






/**_____________________________________*/
 



    Route::get('/curriculums', function () {
        $curri = Curriculum::all();
        return view('borsa.curriculums')->with('curri',$curri);
    });

    Route::get('/newCurri', function () {
        $curri = Curriculum::all();
        return view('borsa.newCurri')->with('curri',$curri);
    });
    
  

    Route::post('curriculums',[curriculumController::class,'insertar']);
    Route::get('curriculums',[LlistaCurriController::class,'index']);
    Route::post('newCurri', [curriculumController::class,'store'])->name('newCurri');  
  







/**_____________________________________*/


    Route::get('/presentacio', function () {
        $pre = Presentacio::all();
        return view('borsa.presentacio')->with('pre',$pre);
    });
    Route::get('/newPre', function () {
        $pre = Presentacio::all();
        return view('borsa.newPre')->with('pre',$pre);
    });




    Route::post('presentacio',[PresentacioController::class,'insertar']);
    Route::get('presentacio',[LlistaPresenController::class,'index']);
    Route::post('newPre', [PresentacioController::class,'store'])->name('newPre');
    Route::post('store', [PresentacioController::class,'store']);

/**_____________________________________*/





Route::get('/recomenacio', function () {
    $rec = Recomanacio::all();
    return view('borsa.recomenacio')->with('rec',$rec);
});
Route::get('/newrec', function () {
    $rec = Recomanacio::all();
    return view('borsa.newrec')->with('rec',$rec);
});




Route::post('recomenacio',[RecController::class,'insertar']);
Route::get('recomenacio',[LlistaRecController::class,'index']);
Route::post('newrec', [RecController::class,'store'])->name('newrec');
Route::post('store', [RecController::class,'store']);



/*____________________________________* */





 







/*-------------------------------------------------- */
Route::get('/MySolicitud', function () {
    $oferta = Oferta::all();
    return view('borsa.MySolicitud')->with('of',$oferta);
});

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




Route::get('/search', [WelcomeController::class, 'index']);
Route::get('/ajax-autocomplete-search', [WelcomeController::class, 'selectSearch']);

/**--------------- */


Route::resource('profile', PerfilController::class);


Route::get('email', [AuthController::class, 'email'])->name('email');
Route::post('enlace', [AuthController::class, 'enlace'])->name('enlace');
Route::get('clave/{token}', [AuthController::class, 'clave'])->name('clave');
Route::post('cambiar', [AuthController::class, 'cambiar'])->name('cambiar');
Route::resource('candi', CandiOfertController::class);

Route::get('borsa/{user}/perfilAlumn',[UsersController::class,'editAvatar'])->middleware('auth')->name('borsa.perfilAlumn');

Route::post('users/{user}/update_avatar',[UsersController::class,'updateAvatar'])->middleware('auth')->name('users.update_avatar');