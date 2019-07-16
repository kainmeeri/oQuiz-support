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
$router->post('/signup', [
    'as' => 'signupPost',
    'uses' => 'UserController@signupAction'
]);

$router->get('/signin', [
    'as' => 'signin',
    'uses' => 'UserController@signinAction'
]);

$router->post('/signin', [
    'as' => 'signinPost',
    'uses' => 'UserController@signinAction'
]);

$router->get('/account', [
    'as' => 'account',
    'uses' => 'UserController@profileAction'
]);

$router->get('/params', [
    'as' => 'params',
    'uses' => 'UserController@paramsAction'
]);

$router->get('/logout', [
    'as' => 'logout',
    'uses' => 'UserController@logoutAction'
]);

// /^[0-9]+$/ est une expression régulière qui vérifie si on n'a que des chiffres dans notre chaine de caractères
// avec le paramètre écrit comme ici, on s'asure de passer un id fait que de chiffre et pas un mot !
$router->get('/quiz/{id:[0-9]+}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quizAction'
]);

// $router->get('quiz/{id}', function ($id) {
//     return 'Quiz '.$id;
//     });

// route('quiz', ['id' => 34])


$router->get('/tags', [
    'as' => 'tags',
    'uses' => 'TagController@tagsAction'
]);

$router->get('/tags/{id:[0-9]+}/quiz', [
    'as' => 'tagQuizzes',
    'uses' => 'TagController@tagsQuizAction'
]);