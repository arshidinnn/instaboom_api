<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UserController;

Route::controller(UserController::class)
    ->prefix('users')
    ->as('users.')
    ->group(function () {
        Route::get('/{user}', 'getUser')->name('get-user');
        Route::get('/{user}/posts', 'posts')->name('posts');
        Route::post('/{user}/subscribe', 'subscribe')->name('subscribe');

        Route::get('/{user}/subscriptions', 'subscriptions')->name('subscriptions');
        Route::get('/{user}/subscribers', 'subscribers')->name('subscribers');
    });
