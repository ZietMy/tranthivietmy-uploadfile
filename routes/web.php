<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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
Route::get('/post',[FormController::class, 'index']);
Route::post('/post',[FormController::class, 'post']);

Route::get('/',function (){
    return view('uploadFile');
});
Route::post('/',[FormController::class,'getForm'])->name('form');
