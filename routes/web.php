<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PagesController@frontpage');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/paracale', 'App\Http\Controllers\PagesController@paracale');
//municipalities routes
Route::get('/daet', 'App\Http\Controllers\PagesController@daet');
Route::get('/labo', 'App\Http\Controllers\PagesController@labo');
Route::get('/panganiban', 'App\Http\Controllers\PagesController@panganiban');
Route::get('/capalonga', 'App\Http\Controllers\PagesController@capalonga');
Route::get('/mercedes', 'App\Http\Controllers\PagesController@mercedes');
Route::get('/sta_elena', 'App\Http\Controllers\PagesController@sta_elena');
Route::get('/san_lorenzo_ruiz', 'App\Http\Controllers\PagesController@san_lorenzo_ruiz');
Route::get('/vinzons', 'App\Http\Controllers\PagesController@vinzons');
Route::get('/basud', 'App\Http\Controllers\PagesController@basud');
Route::get('/talisay', 'App\Http\Controllers\PagesController@talisay');
Route::get('/san_vicente', 'App\Http\Controllers\PagesController@san_vicente');
Route::get('/gmap', 'App\Http\Controllers\PagesController@gmap');

// Job Categories Routes
Route::get('/banking', 'App\Http\Controllers\PagesController@banking');
Route::get('/construction', 'App\Http\Controllers\PagesController@construction');
Route::get('/fastfood', 'App\Http\Controllers\PagesController@fastfood');
Route::get('/manufacturing', 'App\Http\Controllers\PagesController@manufacturing');
Route::get('/retail', 'App\Http\Controllers\PagesController@retail');
Route::get('/it', 'App\Http\Controllers\PagesController@it');
Route::get('/estate', 'App\Http\Controllers\PagesController@estate');
Route::get('/manpower', 'App\Http\Controllers\PagesController@manpower');
Route::get('/warehouse', 'App\Http\Controllers\PagesController@warehouse');
Route::get('/others', 'App\Http\Controllers\PagesController@others');

Route::resource('/posts', 'App\Http\Controllers\PostsController');
Route::get('/search','App\Http\Controllers\SearchPostController@index');
Auth::routes();
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    //Admin panel routing
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/adminposts', [App\Http\Controllers\Admin\AdminPostsController::class,'admin_index']);
    Route::get('/add-adminposts', [App\Http\Controllers\Admin\AdminPostsController::class,'admin_create']);
    Route::post('/add-adminposts', [App\Http\Controllers\Admin\AdminPostsController::class,'admin_store']);    
    Route::get('/adminposts-edit/{id}', [App\Http\Controllers\Admin\AdminPostsController::class,'admin_edit']);
    Route::get('/adminposts-delete/{id}', [App\Http\Controllers\Admin\AdminPostsController::class,'admin_destroy']);
    // admin Job category routing
    Route::get('/manufacturing-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_manufacturing_category']);
    Route::get('/banking-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_banking_category']);
    Route::get('/construction-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_construction_category']);
    Route::get('/fastfood-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_fastfood_category']);
    Route::get('/retail-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_retail_category']);
    Route::get('/IT-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_IT_category']);
    Route::get('/realestate-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_realestate_category']);
    Route::get('/manpower-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_manpower_category']);
    Route::get('/warehouse-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_warehouse_category']);
    Route::get('/others-category', [App\Http\Controllers\Admin\AdminPostsController::class,'view_others_category']);
  
    //Admin users routing
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::get('delete-user/{user}',[App\Http\Controllers\Admin\UserController::class, 'destroy']);  
    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class, 'update']); 
});

Route::prefix('municipalityadmin')->middleware(['auth','isMunicipalityAdmin'])->group(function(){
    // Municipality admin panel routing
    Route::get('/municipalityadmindashboard', [App\Http\Controllers\Admin\MunicipalityAdminDashboardController::class, 'index']);
    Route::get('/adminposts', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'admin_index']);
    Route::get('/add-adminposts', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'admin_create']);
    Route::post('/add-adminposts', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'admin_store']);    
    Route::get('/adminposts-edit/{id}', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'admin_edit']);
    Route::get('/adminposts-delete/{id}', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'admin_destroy']);

 
 

     // admin Job category routing
     Route::get('/municipalityadminposts/muni-admin-manufacturing-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'muni_view_manufacturing_category']);
     Route::get('/municipalityadminposts/banking-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_banking_category']);
     Route::get('/municipalityadminposts/construction-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_construction_category']);
     Route::get('/municipalityadminposts/fastfood-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_fastfood_category']);
     Route::get('/municipalityadminposts/retail-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_retail_category']);
     Route::get('/municipalityadminposts/IT-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_IT_category']);
     Route::get('/municipalityadminposts/realestate-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_realestate_category']);
     Route::get('/municipalityadminposts/manpower-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_manpower_category']);
     Route::get('/municipalityadminposts/warehouse-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_warehouse_category']);
     Route::get('/municipalityadminposts/others-category', [App\Http\Controllers\Admin\MunicipalityAdminPostsController::class,'view_others_category']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'recommendation'])->name('home');
