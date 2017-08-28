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

Route::get('/laravel', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/',['as' => 'home', 'uses' => 'Frontend\HomeController@index']);
Route::get('/articles',['as' => 'articles', 'uses' => 'Frontend\ArticlesController@index']);
Route::get('/videos',['as' => 'videos', 'uses' => 'Frontend\VideoController@index']);


Route::group(['middleware' => ['web'], 'prefix' => 'xdata'], function() {
	Route::get('/login',['as' => 'xdata-login', 'uses' => 'Backend\UsersController@login']);
	Route::post('/login',['as' => 'xdata-login-post', 'uses' => 'Backend\UsersController@doLogin']);
	Route::get('/register', ['as' => 'xdata-register', 'uses' => 'Backend\UsersController@register']);
	Route::post('/register', ['as' => 'xdata-register-post', 'uses' => 'Backend\UsersController@register_post']);
});


Route::group(['middleware' => ['auth:admin'], 'prefix' => 'xdata'], function() {
	Route::get('/dashboard',['as' => 'dashboard', 'uses' => 'Backend\DashboardController@index']);
	
	Route::get('/categories',['as' => 'data-categories', 'uses' => 'Backend\CategoryController@index']);
	Route::get('/category/add',['as' => 'add-category', 'uses' => 'Backend\CategoryController@add']);
	Route::post('/category/add',['as' => 'store-category', 'uses' => 'Backend\CategoryController@store']);
	Route::get('/category/{id}/edit',['as' => 'edit-category', 'uses' => 'Backend\CategoryController@edit']);
	Route::post('/category/update',['as' => 'update-category', 'uses' => 'Backend\CategoryController@update']);
	Route::get('/category/{id}/delete',['as' => 'bulk-category', 'uses' => 'Backend\CategoryController@delete_category']);
	Route::get('/category/seo/{slug}',['as' => 'edit-category-seo', 'uses' => 'Backend\CategoryController@edit_seo']);

	Route::get('/category/{id}/sub-category',['as' => 'sub-category-per-category', 'uses' => 'Backend\SubCategoryController@per_category']);
	Route::get('/category/{id}/sub-category/add',['as' => 'add-sub-category', 'uses' => 'Backend\SubCategoryController@add']);
	Route::post('/sub-category/add',['as' => 'store-sub-category', 'uses' => 'Backend\SubCategoryController@store']);
	Route::get('/category/{category_id}/sub-category/{id}/edit',['as' => 'edit-sub-category', 'uses' => 'Backend\SubCategoryController@edit']);
	Route::post('/sub-category/update',['as' => 'update-sub-category', 'uses' => 'Backend\SubCategoryController@update']);
	Route::get('/category/{category_id}/sub-category/{id}/delete',['as' => 'bulk-sub-category', 'uses' => 'Backend\SubCategoryController@delete_category']);
	Route::get('/category/{category_id}/seo/{slug}',['as' => 'edit-sub-category-seo', 'uses' => 'Backend\SubCategoryController@edit_seo']);
	
	Route::get('/articles',['as' => 'data-articles', 'uses' => 'Backend\ArticlesController@index']);
	Route::get('/article/add',['as' => 'add-article', 'uses' => 'Backend\ArticlesController@addArticle']);
	Route::post('/article/add',['as' => 'store-article', 'uses' => 'Backend\ArticlesController@store']);
	Route::get('/article/{id}/edit',['as' => 'edit-article', 'uses' => 'Backend\ArticlesController@edit']);
	Route::post('/article/update',['as' => 'update-article', 'uses' => 'Backend\ArticlesController@update']);
	Route::get('/article/{id}/delete',['as' => 'bulk-article', 'uses' => 'Backend\ArticlesController@deleteArticle']);
	
	Route::get('/points',['as' => 'point-members', 'uses' => 'Backend\PointsController@index']);
	
	Route::get('/member',['as' => 'data-members', 'uses' => 'Backend\MemberController@index']);
	
	Route::get('/admin',['as' => 'data-admins', 'uses' => 'Backend\MemberController@index']);
	
	Route::get('/visitor',['as' => 'data-visitor', 'uses' => 'Backend\VisitorController@index']);
	
	Route::get('/media',['as' => 'data-media-gallery', 'uses' => 'Backend\MediaController@index']);
	
	Route::get('/logout',['as' => 'admin-logout', 'uses' => 'Backend\UsersController@logout']);
	Route::get('/profile', ['as' => 'admin-profile', 'uses' => 'Backend\UsersController@profile']);
	Route::post('/profile', ['as' => 'sadmin-profile-post', 'uses' => 'Backend\UsersController@signupProfilePost']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
