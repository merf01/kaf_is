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

Route::get('/', function ()    {

    return view('index');
}) ->name('projects.index');
Route::get('/projectsPage', ['uses' => 'ProjectController@showAllProjects'] );

Route::get('/pageOfProject', function () {
    return view('pageOfProject');
});
//Route::resource("projects","ProjectController");
//Route::resource("projects","ProjectController")->middleware('auth');
Auth::routes();
Route::post('upload', array('uses' => 'HomeController@uploadProjectImage'));

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'projects'], function () {
    Route::get('/', 'ProjectController@index')
      ->name('projects.index')
        ->middleware('can:index-project')
      ->middleware('auth');
    Route::get('/show/{id}', 'ProjectController@show')
        ->name('projects.show');

    Route::get('/create', 'ProjectController@create')
        ->name('projects.create')
        ->middleware('can:create-project');

    Route::post('/create', 'ProjectController@store')
        ->name('projects.store')
        ->middleware('can:create-project');

    Route::get('/edit/{project}', 'ProjectController@edit')
        ->name('projects.edit')
        ->middleware('can:update-project,project');

    Route::post('/edit/{project}', 'ProjectController@update')
        ->name('projects.update')
        ->middleware('can:update-project,project');

        Route::post('/destroy/{id}', 'ProjectController@destroy')
            ->name('projects.destroy')
            ->middleware('can:destroy-project');

});
