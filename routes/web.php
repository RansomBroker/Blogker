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
})->name('blogDashboard');

// auth
  Route::get('/bg-admin/login', function(){
      return view('layouts.auth.partials.login');
  })->name('login');

  Route::post('/bg-admin/login', 'AuthController@login');


Route::group(['middleware' => ['auth', 'authCheckRole:2', 'disableBackButton']], function(){

  Route::get('/bg-admin/user/addnewuser', function(){
      return view('layouts.admin.partials.addNewUser');
  })->name('addNewUser');
  Route::post('/bg-admin/user/addNewUser/register', 'AuthController@register')->name('register');

});

Route::group(['middleware' => ['auth', 'authCheckRole:1, 2', 'disableBackButton']], function(){
  // dashboard
    Route::get('/bg-admin', function(){
        return view('layouts.admin.partials.dashboard');
    })->name('dashboard');

    Route::get('/bg-admin/dashboard', function(){
        return view('layouts.admin.partials.dashboard');
    })->name('dashboard');

  // post
    Route::get('/bg-admin/post/allposts', function(){
        return view('layouts.admin.partials.allPosts');
    })->name('allPosts');

    Route::get('/bg-admin/post/addnewpost', function(){
        return view('layouts.admin.partials.addNewPost');
    })->name('addNewPost');

    Route::get('/bg-admin/post/categories', function(){
        return view('layouts.admin.partials.categories');
    })->name('categories');

    Route::get('/bg-admin/post/editpost', function(){
        return view('layouts.admin.partials.editPost');
    })->name('editPost');

  // page
    Route::get('/bg-admin/page/allpages', function(){
        return view('layouts.admin.partials.allPages');
    })->name('allPages');

    Route::get('/bg-admin/page/addnewpage', function(){
        return view('layouts.admin.partials.addNewPage');
    })->name('addNewPage');

    Route::get('/bg-admin/page/editpage', function(){
        return view('layouts.admin.partials.editPage');
    })->name('editPage');


  // user
    Route::get('/bg-admin/user/allusers', 'AuthController@showAllUser')->name('allUsers');

    Route::get('/bg-admin/user/userprofile', 'AuthController@editProfileView')->name('userProfile');
    Route::get('/bg-admin/user/userprofile/{userId}', 'AuthController@editProfileId')->name('getUserId');
    Route::post('/bg-admin/user/userprofile/editProfile', 'AuthController@editProfile')->name('editProfile');

  // logout
    Route::get('/bg-admin/logout', 'AuthController@logout')->name('logout');

});
