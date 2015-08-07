<?php
/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 8/7/15
 * Time: 11:47 PM
 */

Route::group(['prefix' => 'backend'], function () {

    Route::resource('blog', 'Usama\Blogpack\Controllers\Backend\BlogController');

});

Route::resource('blog', 'Usama\Blogpack\Controllers\Frontend\BlogController');
