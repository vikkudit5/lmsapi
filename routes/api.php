<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('v1/register', 'v1\Auth\RegisterController@register');//For Register
Route::post('v1/login', 'v1\Auth\LoginController@login');//for login

/*For  routing starts here....*/
Route::group(['prefix' => 'v1','middleware' => 'jwt.auth'], function () 
{
	Route::resource('users', 'v1\UserController');    
	Route::resource('status', 'v1\StatusController');    
	Route::resource('leads', 'v1\LeadController');   
	Route::resource('note','v1\NoteController'); 
	Route::resource('comments','v1\CommentController'); 

});
/*For routing ends here....*/

