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

// Route::get('/', 'UserHomeController@First');

//user
// Route::group(['prefix' => 'user','middleware' => ['auth','rolecheckuser']], function() {
    Route::get('/', 'UserHomeController@index')->name('user.home');
    Route::get('/datatable', 'UserDataController@ReadDataTable')->name('user.datatable');
 Route::get('/datatable/{id}', 'UserDataController@DetailDataTable')->name('user.datatable-detail');
 Route::get('/datagrafik', 'UserDataController@ReadDataGrafik')->name('user.datagrafik');
 Route::get('/datamaps', 'UserDataController@ReadDataMaps')->name('user.datamaps');
 Route::post('/datatable-search', 'UserDataController@SearchData')->name('user.search_data');
 //Comment
 Route::get('/comment', 'CommentController@ReadComment')->name('comment.read');
 Route::post('/comment/post' , 'CommentController@PostComment')->name('comment.post');
         
// });


// Route::get('/log', function(){
	// if (isset(Auth::user()->role)) {
	// 	if (Auth::user()->role == 1) {
	// 		return redirect()->route('home');
	// 	}
	// 	elseif (Auth::user()->role == 0) {
	// 		return redirect()->route('user.home');
	// 	}
	// }	
	// else{
		// return view('auth/login');
	// }

// });

// Route::match(['get','post'], '/log', 'AuthController@ReadLoginPage')->name('login.read');

Route::get('/log', 'AuthController@ReadLoginPage')->name('login.read');
Route::post('/loginPost', 'AuthController@loginPost')->name('login.post');
// Route::get('/register', 'User@register');
// Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'AuthController@logout');

//admin
// Route::group(['middleware' => ['auth','rolecheckadmin']], function() {
    Route::get('/zhomewk', 'HomeController@index')->name('home');
	Route::get('/zdatatable', 'DataController@ReadDataTable')->name('datatable.read');
	Route::get('/zdatatable/{id}', 'DataController@DetailDataTable')->name('datatable.detail');
	Route::get('/zeditdatatable/{id}', 'DataController@EditDataTable')->name('datatable.edit');
	Route::post('/zdatatable/edit/post', 'DataController@PostEditDataTable')->name('datatable.edit.post');
	Route::post('/zdatatable/delete', 'DataController@DeleteDataTable')->name('datatable.delete');
	Route::post('/zdatatable/post', 'DataController@PostDataTable')->name('datatable.post');
	Route::get('/zdatagrafik', 'DataController@ReadDataGrafik')->name('datagrafik.read');
	Route::get('/zdatamaps', 'DataController@ReadDataMaps')->name('datamaps.read');
	Route::post('/zdatatable-search', 'DataController@SearchData')->name('search_data');
	Route::get('/a-comment', 'AdminCommentController@AdminComment')->name('comment.admin');
	Route::delete('/a-comment/{id}', 'AdminCommentController@destroy')->name('comment.destroy');
	
	
// });


Auth::routes();





