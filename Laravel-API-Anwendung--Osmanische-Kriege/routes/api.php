<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Regionen;
use App\Http\Controllers\Kontinente;
use App\Http\Controllers\Herrschaftbereiche;
use App\Http\Controllers\Beteiligungen;
use App\Http\Controllers\Herrschern;
use App\Http\Controllers\Kriege;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Eine Funktion aus class Kontinente aus Controller aufrufen zum filtern. 
Route::get('kontinentsuche', [Kontinente::class, 'Kontinentsuche']);

//Eine Funktion aus class Regionen aus Controller aufrufen zum filtern. 
Route::get('regionssuche', [Regionen::class, 'Regionssuche']);

//Eine Funktion aus class Herrschern aus Controller aufrufen zum filtern. 
Route::get('herrschersuche', [Herrschern::class, 'Herrschersuche']);

//Eine Funktion aus class Kriege aus Controller aufrufen zum filtern. 
Route::get('kriegssuche', [Kriege::class, 'Kriegssuche']);

//Eine Funktion aus class Herrschaftbereiche aus Controller aufrufen zum filtern. 
Route::get('herrschaftbereichsuche', [Herrschaftbereiche::class, 'Herrschaftbereichsuche']);

//Eine Funktion aus class Beteiligungen aus Controller aufrufen zum filtern. 
Route::get('beteiligungssuche', [Beteiligungen::class, 'Beteiligungssuche']);


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



/*Route::group(['prefix' => 'kontinent'], function ($param) {
    Route::get('', [Kontinente::class, 'Kontinentliste']);
    Route::get('/{id}', [Kontinente::class, 'Kontinentzeigenid']);
    Route::get('/{param}', [Kontinente::class, 'Kontinentname']);
});*/
