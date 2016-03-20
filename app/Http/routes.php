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

/**
 * PhoneBook
 */
$app->get('/', [
    'as' => 'phonebook.index',
    'uses' => 'PhoneBookController@index'
]);

$app->get('/{letter}', [
    'as' => 'phonebook.letter',
    'uses' => 'PhoneBookController@index'
]);

$app->get('/phones/search', [
    'as' => 'phonebook.search',
    'uses' => 'PhoneBookController@search'
]);

/**
 * Person
 */
$app->get('/person/new', [
    'as' => 'person.create',
    'uses' => 'PersonController@create'
]);

$app->post('/person', [
    'as' => 'person.store',
    'uses' => 'PersonController@store'
]);

$app->delete('/person/{id}', [
    'as' => 'person.destroy',
    'uses' => 'PersonController@destroy'
]);

$app->get('/person/{id}/edit', [
    'as' => 'person.edit',
    'uses' => 'PersonController@edit'
]);

$app->put('/person/{id}', [
    'as' => 'person.update',
    'uses' => 'PersonController@update'
]);

$app->get('/person/{id}', [
    'as' => 'person.delete',
    'uses' => 'PersonController@delete'
]);
/**
 * Phone
 */
$app->get('/phone/{id}', [
    'as' => 'phone.delete',
    'uses' => 'PhoneController@delete'
]);

$app->delete('/phone/{id}', [
    'as' => 'phone.destroy',
    'uses' => 'PhoneController@destroy'
]);

$app->get('/phone/new', [
    'as' => 'phone.create',
    'uses' => 'PhoneController@create'
]);

$app->post('/phone', [
    'as' => 'phone.store',
    'uses' => 'PhoneController@store'
]);

$app->delete('/phone/{id}', [
    'as' => 'phone.destroy',
    'uses' => 'PhoneController@destroy'
]);

$app->get('/phone/{id}/edit', [
    'as' => 'phone.edit',
    'uses' => 'PhoneController@edit'
]);
