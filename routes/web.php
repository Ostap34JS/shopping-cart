<?php


Route::get('/',[
    'uses' => 'ProductController@getIndex',
    'as'   => 'product.index'
]);

Route::get('/product/view/{id}', [
    'uses' => 'ProductController@show',
    'as' => 'product.show'
]);


Route::get('/add-to-cart/{id}', [
    'uses'  => 'ProductController@getAddToCart',
    'as'    => 'product.addToCart'
]);

Route::get('/delete-from-cart/{id}', [
    'uses' => 'ProductController@deleteFromCart',
    'as' => 'product.deleteFromCart'
]);

Route::get('/shopping-cart', [
    'uses'  => 'ProductController@getCart',
    'as'    => 'product.shoppingCart'
]);

Route::group(['prefix' => 'user'],function (){


    Route::group(['prefix' => 'quest'], function (){
        Route::get('/signup',[
            'uses' => 'UserController@getSignup',
            'as'   => 'user.signup'
        ]);

        Route::post('/signup',[
            'uses' => 'UserController@postSignup',
            'as'   => 'user.signup'
        ]);

        Route::get('/signin',[
            'uses' => 'UserController@getSignin',
            'as'   => 'user.signin'
        ]);

        Route::post('/signin',[
            'uses' => 'UserController@postSignin',
            'as'   => 'user.signin'
        ]);

    });

    Route::group(['prefix' => 'auth'], function (){

        Route::get('/profile',[
            'uses'  =>  'UserController@getProfile',
            'as'    =>  'user.profile'
        ]);

        Route::get('/logout',[
            'uses'  =>  'UserController@getLogout',
            'as'    =>  'user.logout'
        ]);
    });
});
