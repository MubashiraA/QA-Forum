<?php

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionsController;
use App\Models\Answer;
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
    return view('welcome');
});
Route::resource('questions', QuestionsController::class);
Route::resource('login', LoginController::class);
Route::post('post-login', [LoginController::class, 'postLogin']);
Route::resource('answers', AnswersController::class);
