<?php


Route::get("/","todoController@index");
Route::get("/add","todoController@create");
Route::post("/add","todoController@store");
Route::get("/edit/{id}","todoController@edit");
Route::post("/edit/{id}","todoController@update");
Route::get("/destroy/{id}","todoController@destroy");
Route::get("/complete/{id}","todoController@complete");
