<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweeterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('tweets',[TweeterController::class, 'readAllTweets']);




Route::get('tweets','TweeterController@readAllTweets');

Route::get('tweets/page/{page}','TweeterController@readAllTweetsOnPage');

Route::get('tweets/count/{count}/page/{page}','TweeterController@readAnumberOfTweetsOnPage');

Route::get('tweets/author/{author}','TweeterController@readTweetsByAuthor');



Route::get('tweets/hashtag/{hashtag}','TweeterController@readTweetsByHashtag');

Route::post('tweets/create','TweeterController@createTweet');
