<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\team_MatchingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('countries',CountryController::class);
Route::resource('venues',VenueController::class);
Route::resource('events',EventController::class);
Route::resource('matches',MatchController::class);
Route::resource('teams',TeamController::class);
Route::resource('zones',ZoneController::class);
Route::resource('tickets',TicketController::class);
Route::resource('marching',team_MatchingController::class);

Route::get('getInfoZone',[ZoneController::class,'getInfoZone']);
Route::get('getTicket',[TicketController::class,'getTicket']);
Route::get('searchForEvent/{name_sport}',[EventController::class,'search']);
Route::get('getTicketDetail/{id}',[TicketController::class,'getTicketDetail']);


