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
Route::get('/seegoals', ['uses'=>'GoalController@getGoals', 'as'=>'seegoals']);
Route::get('/', ['uses'=>'GoalController@getGoals', 'as'=>'seegoals']);
Route::post('/addGoal',['uses'=>'GoalController@postAddGoal', 'as'=>'addGoal']
);
Route::get('/DeleteGoals/{id}',['uses'=>'GoalController@postDeleteGoal','as'=>'deletegoal']);
Route::post('/AccomplishGoal/{id}',['uses'=>'GoalController@postAccomplishGoal','as'=>'accomplishgoal']);
Route::get('/AccomplishAssesment/{id}',['uses'=>'GoalController@accomplishAssesment','as'=>'accomplishassesment']);
