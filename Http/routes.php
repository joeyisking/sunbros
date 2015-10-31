<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');
Route::get('contactus', 'IndexController@contactus');
// Provide controller methods with object instead of ID
Route::model('tasks', 'Task');
Route::model('projects', 'Project');

// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::post('chat/store', 'ChatController@store');
Route::post('posts/update_votes', 'PostsController@update_votes');

Route::resource('blogs', 'BlogController');
Route::resource('code', 'CodeController');
Route::resource('chat', 'ChatController');
Route::resource('comments',  'CommentsController');
Route::resource('dev', 'DevController');
Route::resource('images', 'ImagesController');
Route::resource('index', 'IndexController');
Route::resource('members', 'MemberController');
Route::resource('posts', 'PostsController');
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');