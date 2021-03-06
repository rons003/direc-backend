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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('employee', 'EmployeeController@getAllEmployee');
    Route::get('employee/{id}', 'EmployeeController@searchEmployee');
    Route::post('addemployee', 'EmployeeController@createEmployee');
    Route::post('updateemployee', 'EmployeeController@updateEmployee');
    Route::post('deleteemployee/{id}', 'EmployeeController@deleteEmployee');
});

