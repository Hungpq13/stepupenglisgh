<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AboutUsController; 

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
    return view('welcome');
});
Route::view('/ve-chung-toi', 'about');
Route::view('/san-pham', 'product');
Route::view('/lien-he', 'contact');
Route::view('/feedback', 'feedback');
Route::post('/send-feedback', [FeedbackController::class, 'send'])->name('feedback.send');
Route::get('/ve-chung-toi', [AboutUsController::class, 'index'])->name('about');