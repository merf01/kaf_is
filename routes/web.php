<?php


// Route::get('/', function ()    {
//    return view('index');
// }) ->name('projects.index');
// echo App::getLocale();
Route::get('/', ['uses'=>'MainController@show'], function($locale){
  App::setlocale($locale);
} );
Route::get('/projectsPage', ['uses' => 'ProjectController@showAllProjects'] );

Route::get('/pageOfProject', function () {
   return view('pageOfProject');
});
Route::get('/history', function () {
  return view('history');
});

Route::get('auth/login', function () {
  return view('auth/login');
});

// Route::get('/developers',);
//
Route::get('developers', function(){
return view('developers');
});

Route::get('/index2', function(){
return view('index2');
});

Route::post('/comment/add', 'CommentController@store')
    ->name('comments.store');

Route::post('comment/destroy/{id}', 'CommentController@destroy')
      ->name('comment.destroy')
      ->middleware('can:destroy-comment');
    //  ->middleware('can:destroy-comment');
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
