<?php

use Illuminate\Http\Request;

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


Route::group(['prefix' => 'v1', 'middleware' => ''], function ()
{

});
// Route::get('/scheme','SWcorpAPIController@getScheme')->name('SWcorpAPI.getScheme');
// Route::get('/park','SWcorpAPIController@getPark')->name('SWcorpAPI.getPark');
// Route::get('/street','SWcorpAPIController@getStreet')->name('SWcorpAPI.getStreet');
// Route::get('/PublicCleansingData','SWcorpAPIController@getPublicCleansingData')->name('SWcorpAPI.getPublicCleansingData');
// Route::get('/CollectionData','SWcorpAPIController@getCollectionData')->name('SWcorpAPI.getCollectionData');
// Route::get('/PublicCleansingSchedule','SWcorpAPIController@getPublicCleansingSchedule')->name('SWcorpAPI.getPublicCleansingSchedule');
// Route::get('/CollectionSchedule','SWcorpAPIController@getCollectionSchedule')->name('SWcorpAPI.getCollectionSchedule');


// Route::middleware('auth:api')->get('/schedule/cleansing','API\ScheduleAPIController@schedule_cleansing')->name('SWcorpAPI.schedule_cleansing');
Route::get('/schedule/cleansing','API\ScheduleAPIController@schedule_cleansing')->name('SWcorpAPI.schedule_cleansing');

Route::get('/schedule/collection','API\ScheduleAPIController@schedule_collection')->name('SWcorpAPI.schedule_collection');

Route::get('/schedule/cleansing/count','API\ScheduleAPIController@schedule_cleansing_count')->name('SWcorpAPI.schedule_cleansing.count');

Route::get('/schedule/collection/count','API\ScheduleAPIController@schedule_collection_count')->name('SWcorpAPI.schedule_collection.count');

Route::post('/schedule/cleansing/summary/activity','API\SummaryAPIController@schedule_cleansing_summary_by_activity')->name('SWcorpAPI.schedule_cleansing.summary');
Route::post('/schedule/collection/summary/activity','API\SummaryAPIController@schedule_collection_summary_by_activity')->name('SWcorpAPI.schedule_collection.summary');
Route::post('/schedule/cleansing/summary/scheme','API\SummaryAPIController@schedule_cleansing_summary_by_scheme')->name('SWcorpAPI.schedule_cleansing.summary_by_scheme');
Route::post('/schedule/collection/summary/scheme','API\SummaryAPIController@schedule_collection_summary_by_scheme')->name('SWcorpAPI.schedule_collection.summary_by_scheme');

// Route::get('/login','API\SSOAPIController@login')->name('sso.api.login');
