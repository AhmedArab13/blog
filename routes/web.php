<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::post('/posts/store' , [HomeController::class,'store'])->name('posts.store')->middleware('auth');
Route::get('/posts', [App\Http\Controllers\HomeController::class,'index'])->name('posts.index')->middleware('auth');
Route::get('/posts/create' , [HomeController::class,'create'])->name('posts.create')->middleware('auth');
Route::get('/posts/{post}/edit',[HomeController::class,'edit'])->name('posts.edit')->middleware('auth') ;

Route::delete('/posts/{id}',[HomeController::class,'destroy'])->name('posts.destroy')->middleware('auth');

Route::put('/posts/{id}', [HomeController::class,'update'])->name('posts.update')->middleware('auth');

Route::get('/posts/{post}',[HomeController::class,'show'])->name('posts.show')->middleware('auth') ;
















// dd(PostController::class);






// Route::get('/test2', function () {

// $posts = [

//     [ "id" => "1" ,"title"=>"Laravel", "posted_by"=> "Ahmed" , "created_at"=>"2024-2-13"]  ,
//     [ "id" => "2" ,"title"=>"js", "posted_by"=> "Mohamed" , "created_at"=>"2024-2-14"]  ,
//     [ "id" => "3" , "title"=>"django", "posted_by"=> "Ali" , "created_at"=>"2024-2-15"]  ,
//     [ "id" => "4" , "title"=>"flutter", "posted_by"=> "Hussein" , "created_at"=>"2024-2-16"]  ,

// ];

//     return  view('posts',['posts' => $posts ]);
// });