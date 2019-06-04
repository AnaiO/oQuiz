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

$router->get('quiz/{id}', [
    'as' => 'quizView',
    'uses' => 'QuizController@showQuiz'
]);

$router->get('/login', [
    'as' => 'login',
    'uses' => 'UserController@logForm'
]);

$router->post('/signup', [
    'as' => 'signup',
    'uses' => 'UserController@signupPost'
]);

$router->get('/tags', [
    'as' => 'tags',
    'uses' => 'TagController@tags'
]);

$router->get('/tags/{tagId}/quiz', [
    'as' => 'quizTag',
    'uses' => 'TagController@quiz'
]);

$router->post('/signin', [
    'as' => 'signin',
    'uses'  => 'UserController@signinPost'
]);

$router->get('/logout', [
    'as' => 'logout',
    'uses' => 'UserController@logout'
]);

$router->get('/account', [
    'as' => 'account',
    'uses' => 'UserController@account'
]);

$router->post('/note/{id}', [
    'as' => 'note',
    'uses' => 'QuizController@note'
]);
