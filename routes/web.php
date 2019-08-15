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


Route::group(['middleware' => ['auth', 'authCheckRole:1', 'disableBackButton']], function(){

  Route::get('/bg-admin/user/addnewuser', 'AuthController@addNewUserView')->name('addNewUser');
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
    Route::get('/bg-admin/post/allposts', 'PostController@allPost')->name('allPosts');
    // search in post title/ author etc
    Route::get('/bg-admin/post/addnewpost', 'PostController@addNewPost' )->name('addNewPost');
    Route::post('/bg-admin/post/addnewpost/addPost', 'PostController@addNewPostProcess')->name('addNewPostProcess');
    Route::get('/bg-admin/post/editpost/{postId}', 'PostController@editPostGetId')->name('editPostGetId');
    Route::post('/bg-admin/post/editpost/update', 'PostController@updatePost')->name('updatePost');
    Route::post('/bg-admin/post/allposts/delete', 'PostController@deletePost')->name('deletePost');
    // lfm
    Route::get('/bg-admin/post/addnewpost/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');


    // categories
    Route::get('/bg-admin/post/categories', 'PostController@categoryView')->name('categories');
    Route::post('/bg-admin/post/categories/addCategory', 'PostController@addCategoryProcess')->name('addCategoryProcess');
    Route::post('/bg-admin/post/categories/editCategory', 'PostController@editCategoryProcess')->name('editCategoryProcess');
    Route::post('/bg-admin/post/categories/editCategoryDesc', 'PostController@editCategoryDesc')->name('editCategoryDesc');
    Route::post('/bg-admin/post/categories/deleteCategory', 'PostController@deleteCategory')->name('deleteCategory');

  // page
    Route::get('/bg-admin/page/allpages', 'PageController@allPage')->name('allPages');
    Route::get('/bg-admin/page/addnewpage', 'PageController@addNewPageView')->name('addNewPage');
    Route::post('/bg-admin/page/addnewpage/process', 'PageController@addNewPageMake')->name('addNewPageProcess');
    // lfm
    Route::get('/bg-admin/page/addnewpage/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');


    Route::get('/bg-admin/page/editpage', function(){
        return view('layouts.admin.partials.editPage');
    })->name('editPage');


  // user
    Route::get('/bg-admin/user/allusers', 'AuthController@showAllUser')->name('allUsers');

    Route::get('/bg-admin/user/userprofile', 'AuthController@editProfileView')->name('userProfile');
    Route::get('/bg-admin/user/userprofile/{userId}', 'AuthController@editProfileId')->name('getUserId');
    Route::post('/bg-admin/user/userprofile/editProfile', 'AuthController@editProfile')->name('editProfile');
    Route::post('/bg-admin/user/userprofile/deleteProfile', 'AuthController@deleteProfile')->name('deleteProfile');

  // logout
    Route::get('/bg-admin/logout', 'AuthController@logout')->name('logout');

});
