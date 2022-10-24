<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/user.delete', function () {
    return view('dashboard');
});

Route::get('/create', function() {
    return view('create');
});

Route::get('/ApiEdit', function () {
    return view('dashboard');
});
Route::get('/logout/{id}', function () {
    return view('login');
});
// Route::post('/createProduct', function () {
//     return view('dashboard');
// });


// Route::get('/dashboard', [ProductController::class,'index'])->name('posts.getallpost');

                                                    
Route::get('/posts', [ProductController::class,'getAllPost'])->name('posts.getallpost');

Route::get('/post/{id}', [ProductController::class,'getPostById'])->name('post.getpostbyıd');

Route::get('/add-post',[ProductController::class,'addPost'])->name('posts.addpost');

Route::get('/update-post/{id}',[ProductController::class,'updatePost'])->name('posts.update');

Route::get('/delete-post/{id}',[ProductController::class,'deletePost'])->name('posts.delete');

Route::get('/loggedIn',[ProductController::class,'loggedIn'])->name('posts.loggedIn');

Route::get('/register-user',[ProductController::class,'registerUser'])->name('register-user');

Route::post('login-user',[ProductController::class,'loginUser'])->name('login-user');

Route::get('/dashboard', [ProductController::class,'dashboard']);

Route::get('user-delete/{id}',[ProductController::class,'destroy'])->name('user.delete');

Route::get('edit/{id}',[ProductController::class,'edit']);

// Route::delete('/deleteProduct',[ProductController::class,'deletePost'])->name('posts.delete');

Route::get('ApiEdit/{id}',[ProductController::class,'ApiEdit'])->name('posts.update');

Route::get('/logout', [ProductController::class,'logout']);

Route::get('/create-product', [ProductController::class,'createProduct'])->name('posts.update');








