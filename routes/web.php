<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
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

//POSTS
Route::resource('posts', PostController::class);
Route::post('save-comment/{id}', [PostController::class, 'saveComment'])->name('saveComment');
/* 
  GET|HEAD        posts ............................... posts.index › PostController@index
  POST            posts ............................... posts.store › PostController@store
  GET|HEAD        posts/create ........................ posts.create › PostController@create
  GET|HEAD        posts/{post} ........................ posts.show › PostController@show
  PUT|PATCH       posts/{post} ........................ posts.update › PostController@update
  DELETE          posts/{post} ........................ posts.destroy › PostController@destroy
  GET|HEAD        posts/{post}/edit ................... posts.edit › PostController@edit
*/

//COMMENTS
Route::resource('comments', CommentController::class);
/* 
GET|HEAD        comments .............................. comments.index › CommentController@index  
POST            comments .............................. comments.store › CommentController@store  
GET|HEAD        comments/create ....................... comments.create › CommentController@create  
GET|HEAD        comments/{comment} .................... comments.show › CommentController@show  
PUT|PATCH       comments/{comment} .................... comments.update › CommentController@update  
DELETE          comments/{comment} .................... comments.destroy › CommentController@destroy  
GET|HEAD        comments/{comment}/edit ............... comments.edit › CommentController@edit 
*/

Route::get('contact', [UserController::class, 'sendPage'])->name('sendPage');
Route::post('sendMail', [UserController::class, 'sendMail'])->name('sendMail');