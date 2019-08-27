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

/*App::bind('\App\Billing\Stripe',function(){
			return new \App\Billing\Stripe(config('services.stripe.secret'));
});

$stripee = resolve('\App\Billing\Stripe');
$stripee1 = resolve('\App\Billing\Stripe');
z
dd($stripee);*/


Route::group(['middleware' => 'auth'], function () {
Route::get('/',['as'=>'group','uses'=>'GroupsController@index']);
Route::get('/group/create',['as'=>'create_group','uses'=>'GroupsController@create']);
Route::post('/group',['as'=>'group_posts_store','uses'=>'GroupsController@store']);
Route::get('/group/{post}',['as'=>'posts_show','uses'=>'GroupsController@show']);
Route::post('/group/{post}/comments',['as'=>'comment_create','uses'=>'CommentsController@store']);	
});


Route::get('/register',['as'=>'register','uses'=>'RegistrationController@create']);
Route::post('/register',['as'=>'register_create','uses'=>'RegistrationController@store']);
Route::get('/login',['as'=>'session','uses'=>'SessionsController@create']);
Route::post('/login',['as'=>'login','uses'=>'SessionsController@store']);
Route::get('/logout',['as'=>'logout','uses'=>'SessionsController@destroy']);