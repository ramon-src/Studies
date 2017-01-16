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

Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'PageController@show')->name('web.home');
    Route::get('site/{slug}', 'PageController@show')->name('generated.page');
});


Auth::routes();


Route::group(['namespace' => 'Api', 'prefix' => 'api', 'middleware' => 'auth'], function () {
    Route::get('gerenciar/site', 'SiteController@index')->name('manager.site');
    Route::get('gerenciar/site/nova-pagina', 'SiteController@create')->name('manager.site.create');
    Route::get('gerenciar/site/pagina/{id}/visivel/{is}', 'SiteController@visibility')->name('manager.site.switch');
    Route::get('gerenciar/site/pagina/{id}/editar', 'SiteController@edit')->name('manager.site.edit');
    Route::put('gerenciar/site/pagina/{id}/atualizar', 'SiteController@update')->name('manager.site.update');
    Route::post('gerenciar/site/criar-pagina', 'SiteController@store')->name('manager.site.store');


    Route::get('gerenciar/site/secao', 'SectionsManagerController@index')->name('manager.site.section');
    Route::get('gerenciar/site/pagina/{id}/secao/nova-secao', 'SectionsManagerController@create')->name('manager.site.section.create');
    Route::get('gerenciar/site/secao/{id}/editar', 'SectionsManagerController@edit')->name('manager.site.section.edit');
    Route::put('gerenciar/site/secao/{id}/atualizar', 'SectionsManagerController@update')->name('manager.site.section.update');
    Route::post('gerenciar/site/secao/criar-secao', 'SectionsManagerController@store')->name('manager.site.section.store');

    Route::get('/', 'HomeController@index')->name('api.home');
});

