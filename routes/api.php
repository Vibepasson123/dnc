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
//Route::post('users','AdminControl@GetAllPatient');


Route::post('/authenticate','AuthController@login');
Route::get('/rest','AuthController@getToken');
Route::get('/patients/{issue_id}','healthstatusController@show');
Route::get('/test','healthstatusController@index');
Route::post('/tes','healthstatusController@store');
Route::get('/example','AuthController@getToken');
Route::post('/bands','healthstatusController@bandauth');
Route::GET('/contacts','ChatMessage@get');
//chat app api
Route::GET('/ChatMessage','ChatMessage@getMessage');
Route::GET('/contacts','ChatMessage@get');

Route:: get('/conversation/{id}','ChatMessage@getMessageFor');
Route:: post('/conversation/send', 'ChatMessage@send');
/* Route::get('/gost','apitest@listuser');
Route::get('/dut','apitest@showmagic');
 */
 