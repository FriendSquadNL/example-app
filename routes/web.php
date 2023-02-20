<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Models\User;
use app\views\auth;

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
    return view('index');
})->middleware(['auth', 'verified'])->name('register');

Route::get('/login', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('login');

Route::get('/logout', function () {
    return view('auth');
})->name('logout');

// Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
// ->name('logout');

// Route::get('/hallo/{id}', function ($id) {
//     return view('try', ['name' => $id]);
// });

// Route::get('/test', function () {
//     return User::all();
// });
// })->middleware(['auth', 'verified'

Route::resource('threads', ThreadController::class);
Route::resource('replies', ReplyController::class);
//Route::get('/replies', [ReplyController::class, 'index'])->name('reply.index');
Route::resource('users', UserController::class);
Route::resource('topics', TopicController::class);
//Route::resource('topics/{id}', [TopicController::class, 'show'])->name('topic');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';