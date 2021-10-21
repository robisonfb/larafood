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

use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function (){

    /* Detalhes */

    Route::get('plans/{url}/details','DetailPlanController@index')->name('details.plan.index');
    Route::put('plans/{url}/details','DetailPlanController@store')->name('details.plan.store');
    Route::get('plans/{url}/details/create','DetailPlanController@create')->name('details.plan.create');


    /* Planos */
    Route::any('plans/search','PlanController@search')->name('plans.search');
    Route::get('plans','PlanController@index')->name('plans.index');
    Route::get('plans/create','PlanController@create')->name('plans.create');
    Route::post('plans','PlanController@store')->name('plans.store');
    Route::get('plans/{url}','PlanController@show')->name('plans.show');
    Route::delete('plans/{url}','PlanController@destroy')->name('plans.destroy');
    Route::get('plans/edit/{url}','PlanController@edit')->name('plans.edit');
    Route::put('plans/{url}','PlanController@update')->name('plans.update');



    /* Pagina inicial admin*/
    Route::get('/','PlanController@index')->name('admin.index');


});






