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

Route::get('/about',function() {
    $tasks = [
        "Go to store",
        "Go to home"
    ];
    return view('about', [
        'tasks' => $tasks
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form', 'FormController@action')->name('FormInsert');

Route::get('/insert', function(){
    $name = Request::input('name');
    $email = Request::input('email');
    $query = DB::table('students')-> insert(['first_name'=>$name, 'last_name' =>$email]);
    return 'hello'. $name;
});

Route::get('/new', function(){
    return view('new');
})->name('new');

Route::get('/page', function(){
    return view('page');
})->name('page');
