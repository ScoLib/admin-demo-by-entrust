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

Route::get('/route', function () {
    $model = new \App\Post();
    $schema = $model->getConnection()->getDoctrineSchemaManager();

    $table = $model->getConnection()->getTablePrefix() . $model->getTable();

    dd($schema->listTableColumns($table)) ;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => config('admin.url_prefix'),
    'as'     => 'admin.',
    'middleware' => ['auth'],
], function () {
    Route::get('logs', [
        'as'   => 'logs',
        'uses' => function () {
            return view('admin::app');
        },
    ]);
    Route::get('logs/list', [
        'as'   => 'logs.list',
        'uses' => 'Admin\ActionLogController@getList',
    ]);
});

//Admin::routes();
