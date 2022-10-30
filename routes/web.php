<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about',[
        "title" => "About",
        "name" => "Muchamad Taufik Mulyadi",
        "email" => "muhamadtaufikm@gmail.com",
        "image" => "profile.jpg"
    ]);
});

    Route::get('/posts', [PostController::class, 'index']);
    Route::get('posts/{post:slug}', [PostController::class, 'show']);