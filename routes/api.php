<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('posts', 'PostsController', ['except' => ['create', 'edit']]);
});
