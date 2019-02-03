<?php

Route::get('/','MainController@index');
Route::get('/tags','MainController@tags')->name('recipe.tags');
Route::get('/recipes','MainController@recipeList')->name('recipe.list');
Route::get('/recipes/{id}','MainController@recipeItem')->name('recipe.item');
Route::get('/subscribe','MainController@subscribe')->name('subscribe');
