<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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


Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/', [UserController::class, 'create'])->name('createUser');



Route::get('/create', [UserController::class, 'create'])->name('createUser');
Route::post('/create', [UserController::class, 'createUser'])->name('createUserPost');



Route::post('/delete', [UserController::class, 'deleteUser'])->name('deleteUserPost');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/getusers', [UserController::class, 'getUsers'])->name('getUsers');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('deleteUser');

    Route::get('/update/{id}', [UserController::class, 'update'])->name('updateUser');
    Route::post('/update', [UserController::class, 'updateUser'])->name('UpdateUserPost');


});
