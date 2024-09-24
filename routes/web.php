<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});


//middleware "auth"
Route::group(['middleware' => ['auth']], function () {

    //route dashboard
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');
    Route::get('faq_store', [App\Http\Controllers\FaqController::class, 'store'])->name('faq_store');
    Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::get('trans', [App\Http\Controllers\TransController::class, 'index'])->name('trans');
    Route::get('trans_input', [App\Http\Controllers\TransInputController::class, 'index'])->name('trans_input');
    Route::post('trans_input/store', [App\Http\Controllers\TransInputController::class, 'store'])->name('trans_store');
    Route::get('gpt', [App\Http\Controllers\GPTController::class, 'index'])->name('gpt');
    Route::post('gpt/message', [App\Http\Controllers\GPTController::class, 'sendMessage'])->name('gpt_message');
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

    //route permissions

});
