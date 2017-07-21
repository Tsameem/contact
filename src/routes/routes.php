<?php
Route::group(['middleware' => 'web'], function() {
	// Admin's routes
	Route::get('admin/contact-us', '\App\Http\Controllers\Admin\ContactsController@index');

	// Client's routes
	Route::get('contact-us', '\App\Http\Controllers\Client\ContactsController@index');
	Route::post('contact-us', '\App\Http\Controllers\Client\ContactsController@store')->name('contact_store');
});
