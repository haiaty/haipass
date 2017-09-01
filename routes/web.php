<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', function () {

        return view('index.index');
    });

    /* This is the route to get the json containing the texts in a given language. That
    json will be used by vue components and the javascript. This json will be fetched using
    the tag script */
    Route::get('/js/lang.js', function () {

        $lang = LaravelLocalization::getCurrentLocale();

        header('Content-Type: text/javascript');
        echo('window.i18n = ' . file_get_contents(resource_path('lang/' . $lang . '.json')) . ';');
        exit();
    })->name('assets.lang');


});



/*
|--------------------------------------------------------------------------
| Translated Routes
|--------------------------------------------------------------------------
|
| These routes are translated into the locale name.
| See: https://github.com/mcamara/laravel-localization#translated-routes
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localize' ] // Route translate middleware
    ],
    function() {
        Route::get(LaravelLocalization::transRoute('routes.generate_password'), [
            'as' => 'craft_page',
            'uses' => 'HaiPassController@showCraftPage'
        ]);

    });


/*
|--------------------------------------------------------------------------
| Ajax routes
|--------------------------------------------------------------------------
|
|  routes for ajax requests
*/

Route::post('/password', 'HaiPassController@craftPassword');
