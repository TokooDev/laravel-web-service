<?php

use Illuminate\Support\Facades\Route;

Route::group([] ,function () {
    Route::apiResource('articles', "Api\ArticleController");
    Route::post('articles/{article}/tags/{tag}',"Api\ArticleController@addTag");
    Route::get('articles/{article}/tags',"Api\ArticleController@loadTags");
    Route::delete('articles/{article}/tags/{tag}',"Api\ArticleController@removeTag");
    Route::post('articles/{article}/comment',"Api\ArticleController@commentArticle");
});
