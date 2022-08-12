<?php

use App\Http\Controllers\ApiServer;
use App\Http\Controllers\Vip_addresses;
use App\Http\Controllers\Cookies;
use App\Http\Middleware\Cors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware([Cors::class])->group(function () 
{
    Route::post('/connect_wallet', [ApiServer::class, 'connect_wallet']);
    Route::post('/connect_game', [ApiServer::class, 'connect_game']);
    Route::post('/add_game_email', [ApiServer::class, 'add_game_email']);
    Route::post('/send_game_email', [ApiServer::class, 'sendAgain_verifyEmail']);

    // Save data
    Route::post('/save_vip_data', [Vip_addresses::class, 'save_data']);

    // Check Address
    Route::post('/check_address', [Vip_addresses::class, 'check_address_exist']);

    // Check Ip Client
    Route::post('/check_clientip', [Cookies::class, 'check_ip_exist']);

    // Check Ip Sign
    Route::post('/check_ipsign', [cookies::class, 'check_ip_sign']);
});
