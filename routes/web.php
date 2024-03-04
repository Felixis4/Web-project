<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/ask-me-a-question', function () {
    return view('ask');
});

Route::get('/login', [UsersController::class,'login'])->name('login');
Route::post('/login', [UsersController::class,'loginPost'])->name('postLogin');

Route::get('/registration', [UsersController::class,'registration'])->name('registration');
Route::post('/registration', [UsersController::class,'registrationPost'])->name('postRegistration');

Route::post('send',[QuestionsController::class,'sendChat']);

Route::get('/upload-file',[FilesController::class,'upload'])->name('upload');

Route::post('/upload-file',[FilesController::class,'upload_file'])->name('upload-files');

Route::get('/logout', [UsersController::class,'logout'])->name('logout');


