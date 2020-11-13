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


Route::get('/', function() {
	return view ('home');
}); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@blog') ->name('blog');

Route::get('/gallery', 'GalleryController@gallery')->name('gallery');

Route::get('/post/{id}', 'PostController@post');

Auth::routes();

//----------------ROLE ADMIN-------
// TABEL CULTURES
Route::get('/manage', 'ManageController@index')->name('manage'); // Menampilkan Halaman Kelola (Read Data)s

Route::get('/article/show/{id}','ManageController@show'); //Menampilkan Data Artikel sesuai id

Route::get('/article/add','ManageController@add'); // Menampilkan form penambahan data
Route::post('/article/create','ManageController@create'); // Proses penambahan data (Create / Insert Data)

Route::get('/article/edit/{id}','ManageController@edit'); // Menampilkan Halaman Form Edit Data
Route::post('/article/update/{id}','ManageController@update'); // Proses Edit Data (Update Data)

Route::get('/article/delete/{id}','ManageController@delete'); // Menghapus Data (Delete Data)

// TABEL COMMENTS
Route::post('/post/{id}', 'PostController@createComment'); // Proses Penambahan Data Comment sekaligus menampilkan halaman post

//TABEL USERS
Route::get('/manageUsers', 'ManageUsersController@index')->name('manageUsers');

Route::get('/user/show/{id}','ManageUsersController@show'); //Menampilkan Data User sesuai id

Route::get('/user/add','ManageUsersController@add'); // Menampilkan form penambahan data
Route::post('/user/create','ManageUsersController@create'); // Proses penambahan data (Create / Insert Data)

Route::get('/user/edit/{id}','ManageUsersController@edit'); // Menampilkan Halaman Form Edit Data
Route::post('/user/update/{id}','ManageUsersController@update'); // Proses Edit Data (Update Data)

Route::get('/user/delete/{id}','ManageUsersController@delete'); // Menghapus Data (Delete Data)

//CETAK PDF
Route::get('/article/cetak_pdf', 'ManageController@cetak_pdf');
/*-------------*/


/*----------------------KUIS 1------------------------------------
Route::get('/home', 'HomeController@home')->name('home');

Route::get('/blog', 'BlogController@blog') ->name('blog');

Route::get('/post/{id}', 'PostController@post');

Route::get('/gallery', 'GalleryController@gallery')->name('gallery');

-----------------------------------------------------------------*/



/*-----------------PERTEMUAN 4-----------------------
Route::get('/home', 'HomeController@getAll')->name('home');

Route::get('/article/{id}', 'ArticleController@getById');

/*---------------------------------------------------




/*-----------------PERTEMUAN 3-----------------------
Route::get('/home', 'HomeController@home');

Route::get('/article', 'ArticleController@article');

Route::get('/about', 'AboutController@about');

Route::get('/home2', 'HomeController@home2');

Route::get('/article2', 'ArticleController@article2');

Route::get('/about2', 'AboutController@about2');
----------------------------------------------------*/


/*Route::get('/', function(){
	return view('welcome');
}); */




//Route::get('/hello', function(){
//	return view('blog.hello',['name' => 'Andi']);
//});

//Route::get('/hello', 'WelcomeController@hello');



/*Route::get('/home', 'PageController@home');

Route::get('/about', 'PageController@about');

Route::get('/articles/{id}', 'PageController@articles');*/


/*Route::get('/', function() {
	return ('Selamat Datang');
}); 
Route::get('/about', 'WelcomeController@about'); 

Route::get('/articles/{id}', function($id){
	return ('Halaman artikel ini dengan id ' . $id);
}); */   

