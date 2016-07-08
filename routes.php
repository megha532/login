<?php
Route::get('contact','PagesController@getContact');
Route::get('about','PagesController@getAbout');
Route::get('/','PagesController@getIndex');
Route::get('gauth/{auth?}',array('as'=>'googleAuth','uses'=>'Auth\AuthController@getGoogleLogin'));
Route::get('logout',array('as' =>'logout','uses'=>'AuthController@getLoggedOut' ));
?>
