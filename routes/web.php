<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\admin\UserController;
//use App\Http\Controllers\FollowController;
//use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\TweetController;

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
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/password', function () {
        return view('profiles.password');
    })->name('password');

    Route::get('/two-factor-auth', function () {
        return view('profiles.two-factor-auth');
    })->name('two-factor-auth');

//    Route::get('/tweets', [TweetController::class, 'index'])->name('tweets.index');
//    Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');
//
//    Route::post('/profiles/{user:name}/follow', [FollowController::class, 'store'])->name('follow.store');
//
//    Route::get('/profiles/{user:name}', [ProfileController::class, 'show'])->name('profiles.show');
//    Route::patch('/profiles/{user:name}', [ProfileController::class, 'update'])->name('profiles.update');
});


//Route::middleware(['auth', 'verified', 'can:edit,user'])->group(function () {
//    Route::get('/profiles/{user:name}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
//});

//Route::prefix('admin')->name('admin.')->middleware(['auth', 'isAdmin', 'verified'])->group(function (){
//    Route::resource('/users', UserController::class);
//});
