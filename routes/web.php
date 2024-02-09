<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


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

// Route::get('/',function(){
//     return view('/service/index');
// });
Route::get('/', [ServiceController::class,'index'])->name('liste.index');
Route::get('/service', [ServiceController::class,'index'])->name('liste.index');
Route::get('/service/create', [ServiceController::class,'create'])->name('liste.index');
Route::post('/service/create', [ServiceController::class,'store'])->name('liste.store');