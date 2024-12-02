<?php


use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PetsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::controller(PetsController::class)->group(function(){
    Route::get('/pets-list', 'getPetsList')->name('petsList');
    Route::get('/create-pets', 'getCreatePetsPage')->name('getCreatePetsPage');
    Route::post('/create-pets/create', 'createPets')->name('createPets');
    Route::get('/edit-pets/{petsId}', 'getEditPetsPage')->name('getEditPetsPage');
    Route::post('/edit-pets/{petsId}', 'editPets')->name('editPets');
});