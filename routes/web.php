<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarisController;
use App\Models\Post;
use App\Models\User;
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

Route::get('index', function () {
    return view('usuaris.index', [
        'posts' => Post::paginate(5)
    ]);
});

Route::get('/', function () {
    return view('usuaris.Login');
});
Route::get('/create', [UsuarisController::class, 'create']);
Route::post('login', [UsuarisController::class, 'store'])->middleware('guest');
