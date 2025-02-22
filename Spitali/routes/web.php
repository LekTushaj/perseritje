<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/termini',[HomeController::class,'termini']);

Route::get('/termini_im',[HomeController::class,'termini_im']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/shfaq_terminet',[AdminController::class,'shfaq_terminet']);

Route::get('/pranuar/{id}',[AdminController::class,'pranuar']);

Route::get('/anuluar/{id}',[AdminController::class,'anuluar']);

Route::get('/shfaq_doktorret',[AdminController::class,'shfaq_doktorret']);

Route::get('/anulo_doktorrin/{id}',[AdminController::class,'anulo_doktorrin']);

Route::get('/ndrysho_doktorret/{id}',[AdminController::class,'ndrysho_doktorret']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/dergo_email/{id}',[AdminController::class,'dergo_email']);










