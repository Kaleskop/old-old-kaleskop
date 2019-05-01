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

Auth::routes();

Route::get( '/', 'WebsiteController@homepage' )->name( 'website.homepage' );

// - account
Route::get( '/account', 'AccountController@index' )->name( 'account.index' );
Route::get( '/account/business', 'AccountController@business' )->name( 'account.business' );

// - business
Route::post( '/account/business', 'BusinessController@store' )->name( 'business.store' );
Route::get( '/business', 'BusinessController@index' )->name( 'business.index' );
Route::get( '/business/subscriptions', 'BusinessController@subscriptions' )->name( 'business.subscriptions' );

// - plans
Route::post( '/plans', 'PlansController@store' )->name( 'plans.store' );
Route::post( '/plans/subscribe', 'PlansController@subscribe' )->name( 'plans.subscribe' );
Route::patch( '/plans/{plan}', 'PlansController@update' )->name( 'plans.update' );
Route::patch( '/plans/{plan}/swap', 'PlansController@swap' )->name( 'plans.swap' );
Route::delete( '/plans/{plan}', 'PlansController@destroy' )->name( 'plans.destroy' );
Route::delete( '/plans/{plan}/cancel', 'PlansController@cancel' )->name( 'plans.cancel' );
Route::get( '/plans', 'PlansController@index' )->name( 'plans.index' );
Route::get( '/plans/create', 'PlansController@create' )->name( 'plans.create' );
