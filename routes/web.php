<?php

use App\Http\Controllers\Admin\CategoryController;
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
    Route::get('/categories', [CategoryController::class, 'index']);

    // Route::get('/fullcalendar','CalendarController@index')->name('calendar.index');
    // Route::post('/fullcalendar/create','CalendarController@create');
    // Route::post('/fullcalendar/update','CalendarController@update');
    // Route::post('/fullcalendar/delete','CalendarController@destroy');
    //Route::get('/category', 'CategoryController@index')->name('categoryr');

});

Route::get('/fullcalendar','CalendarController@index')->name('calendar.index');
Route::post('/fullcalendar/create','CalendarController@create');
Route::post('/fullcalendar','CalendarController@index');
Route::post('/fullcalendar/update','CalendarController@update');
Route::post('/fullcalendar/delete','CalendarController@destroy');
// Route::get('/category', 'CategoryController@index')->name('category');

?>