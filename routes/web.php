<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [
    'as' => 'home',
    'uses' => 'MainController@homeAction'
]);

$router->get('/signup', [
    'as' => 'signup',
    'uses' => 'UserController@signupAction'
]);

$router->get('/signin', [
    'as' => 'signin',
    'uses' => 'UserController@signinAction'
]);


$router->get('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quizAction'
]);
