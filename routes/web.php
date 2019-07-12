<?php

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

Route::get('/test', function(){
    return view('layouts.admin.partials.dashboard');
});

Route::get('/test1', function(){
    return view('layouts.admin.partials.allPosts');
});

Route::get('/test2', function(){
    return view('layouts.admin.partials.addNewPost');
});

Route::get('/test3', function(){
    return view('layouts.admin.partials.categories');
});

Route::get('/test4', function(){
    return view('layouts.admin.partials.allPages');
});

Route::get('/test5', function(){
    return view('layouts.admin.partials.addNewPage');
});

Route::get('/test6', function(){
    return view('layouts.admin.partials.allUsers');
});

Route::get('/test7', function(){
    return view('layouts.admin.partials.addNewUser');
});

Route::get('/test8', function(){
    return view('layouts.admin.partials.userProfile');
});

Route::get('/test9', function(){
    return view('layouts.admin.partials.editPost');
});

Route::get('/test10', function(){
    return view('layouts.admin.partials.editPage');
});
