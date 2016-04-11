<?php

Route::group(['middleware' => ['web']], function () {

    Route::group (['prefix' => LaravelLocalization::setLocale ()],

        function () {

            Route::get('/news/{slug}-{id}', [
                'as' => 'news_article',
                'uses' => 'App\Controllers\NewsController@showPages'
            ]);
        });
});



