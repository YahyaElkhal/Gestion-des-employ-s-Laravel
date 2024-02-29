<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Controllers\EmployesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('home');
    }
);

Route::get('/employes', function () {
    return view('employes.index');
}
);

Route::get('/employes', 'App\Http\Controllers\EmployesController@index')->name('employes.index');
    
Route::get('/employes/create', 'App\Http\Controllers\EmployesController@create')->name('employes.create');

Route::post('/employes', 'App\Http\Controllers\EmployesController@store')->name('employes.store');

Route::get('/employes/{id}/edit', 'App\Http\Controllers\EmployesController@edit')->name('employes.edit');
Route::put('/employes/{id}', 'App\Http\Controllers\EmployesController@update')->name('employes.update');

Route::get('/employes/{id}', 'App\Http\Controllers\EmployesController@show')->name('employes.show');


Route::delete('/employes/{id}', 'App\Http\Controllers\EmployesController@destroy')->name('employes.destroy');

Route::get('employes/{id}/vacation', 'App\Http\Controllers\EmployesController@vacationRequest')->name('vacation.request');
Route::get('/employes/{id}/certificate', 'App\Http\Controllers\EmployesController@certificateRequest')->name('certificate.request');

});


    

