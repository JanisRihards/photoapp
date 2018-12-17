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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => ['web','auth']], function(){
    Route::get('/', 'PagesController@main');


Route::get('/about', 'PagesController@about');

Route::get('/blog', 'PagesController@blog');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::group(['middleware' =>['IsAdmin','auth']], function(){
//     Route::get('/home', 'HomeController@index');
// });
// Route::get('/home', 'HomeController@index')->middleware('IsAdmin');
// Route::get('/home', 'HomeController@index', function(){
//     if(Auth::user()->admin == 0){
//         return view('home');
//     } else{
//     $users['users'] = \App\User::all();
//     return view('adminhome',$users);
//     }
// });
    Route::get('locale/{locale}',function ($locale){
        Session::put('locale',$locale);
        return redirect()->back();
    
});



// Route::get('locale/{locale}',function ($locale){
//     Session::put('locale',$locale);
//     return redirect()->back();
// });
