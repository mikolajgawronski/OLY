<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\olyMail;

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
Route::get('/', 'PostsController@index');

Route::get('/email', function(){
    Mail::to('asdasda@asd.pl')->send(new olyMail());
    return new olyMail();
});
Route::get('/search','PostsController@search');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/regulamin', 'StaticPagesController@regulamin');
Route::get('/o_nas', 'StaticPagesController@o_nas');
Route::get('/kontakt', 'StaticPagesController@kontakt');

Route::get('/posts/own', 'PostsController@own');
Route::resource('posts','PostsController');


Auth::routes();
//Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('ajax',function() {
    return view('message');
 });

 Route::get('/getmsg','AjaxController@index');

 Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});