<?php
Route::group(['prefix' => '/modal/qls'], function(){
	Route::get('/index', [\App\Http\Controllers\Modal\qlsController::class, 'index']);

	Route::get('/view_add', 'Modal\qlsController@viewAdd');
});