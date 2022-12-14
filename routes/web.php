<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Models\User;

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

Route::get('/', function () {
    return view('index');
}) ->name('index');


Route::get('/register', function () {
    return view('register');
})->middleware(['auth', 'verified'])->name('register');


Route::get('/logout', function () {
    return view('logout');
})->middleware(['auth', 'verified'])->name('logout');

Route::get('/login', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

// Route::get('/hallo/{id}', function ($id) {
//     return view('try', ['name' => $id]);
// });

// Route::get('/test', function () {
//     return User::all();
// });

Route::resource('threads', ThreadController::class);
Route::resource('replies', ReplyController::class);
Route::resource('users', UserController::class);
Route::resource('topics', TopicController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';