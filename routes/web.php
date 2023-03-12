<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthUserController;

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

//Route::get('/home', function () {

   // return view('auth_user.home');
//})->middleware(['auth', 'verified'])->name('home');
Route::get('/home', [AuthUserController::class, 'home'])->middleware('auth','verified')->name('home');
Route::get('/settings', [AuthUserController::class, 'settings'])->middleware('auth')->name('settings');
Route::get('/upload_img', [AuthUserController::class, 'upload'])->middleware('auth')->name('upload.image');
Route::post('/uploadSave/{id}', [AuthUserController::class, 'uploadSave'])->middleware('auth')->name('upload.img');
Route::get('/messages', [AuthUserController::class, 'messages'])->middleware('auth')->name('messages');
Route::get('/sendmessage', [AuthUserController::class, 'sendmsg']);
Route::post('/submit_message/{username}', [AuthUserController::class, 'send_message'])->middleware('guest')->name('submit_message');
Route::get('/delete_msg/{id}', [AuthUserController::class, 'delete_msg'])->name('delete_msg');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
