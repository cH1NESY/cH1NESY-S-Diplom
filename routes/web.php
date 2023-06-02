<?php

use App\Http\Controllers\Admin\CategoryController;


use App\Http\Controllers\CalendarController;

use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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


Route::get('/', function () {
    return view('admin.index');
});





Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'MainController@index') ->name ('admin.index');
   
});

Route::get('/fullcalendar/delete/{id}', 'CalendarController@delete')->name('delete-event');
Route::get('/fullcalendar/edit/{id}', 'CalendarController@edit')->name('edit-event');
Route::get('/meet', 'CalendarController@showMeet')->name('meet');
Route::post('/meet', 'CalendarController@meet')->name('add-meet');

Route::post('/fullcalendar/edit/{id}', 'CalendarController@editSubmit')->name('edit-event-submit');
Route::get('/fullcalendar','CalendarController@index')->name('calendar.index');

Route::post('/fullcalendar/check','CalendarController@check')->name('add-event');

Route::post('/autorizate','AutorizateController@autorizate')->name('aut');
Route::get('/autorizate','AutorizateController@autorizateShow')->name('auto');

Route::post('/register','AutorizateController@reg')->name('reg');
Route::get('/register','AutorizateController@registerShow')->name('register');

Route::get('/show/{id}','AutorizateController@showPeople')->name('show');
Route::get('/logout','AutorizateController@logout')->name('logout');

?>