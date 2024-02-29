<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/ask-me-a-question', function () {
    return view('ask');
});

Route::post('send',[QuestionsController::class,'sendChat']);

Route::get('/upload-file',[FilesController::class,'upload'])->name('upload');

Route::post('/upload-file',[FilesController::class,'upload_file'])->name('upload-files');



Route::get('/create-user', AccountsController::class . '@index')->name('accounts');

Route::post('/create-user', AccountsController::class . '@store')->name('createUser');

Route::delete('/create-user/{id}', [AccountsController::class , 'destroy'])->name('accounts-destroy');

Route::delete('/create-user/{id}', [AccountsController::class , 'destroy2'])->name('accounts-destroy2');

Route::get('/create-user/{id}', [AccountsController::class , 'show'])->name('accounts-edit');

Route::patch('/create-user/{id}', [AccountsController::class , 'update'])->name('accounts-update');

Route::get('/users-list', [AccountsController::class ,'users_list'])->name('users-list');

