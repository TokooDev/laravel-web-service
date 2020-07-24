<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});Route::get('/articles',"ArticleController@index");
Route::post('/articles',"ArticleController@create");
Route::delete('/articles/{article}',"ArticleController@destroy");
Route::put('/articles/{article}',"ArticleController@update");
Route::get('/articles/{article}',"ArticleController@show");
*/
//Pour eviter d'ecrire plusieurs ligne de code, on met une seule ligne qui fait la meme chose
//Route::apiResource('/articles', 'ArticleController');
//Route::apiResource('/users', 'UserController')->except(['update','destroy','store']);
include_once('api/article.routes.php');
include_once('api/tag.routes.php');

