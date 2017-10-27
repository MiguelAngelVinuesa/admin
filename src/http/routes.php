<?php

/***************************************************  ADMIN ROUTES ***************************************************/

Route::get('admin', 'Cloudware\Admin\AdminController@index')->name('admin')->middleware('web');

