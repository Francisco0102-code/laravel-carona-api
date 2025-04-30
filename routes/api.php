<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\User;

Route::get('/', function (Request $request) {
    return response()->json(data: [
        'message' => 'API is working'
    ]);
});

Route::post('/register', [AuthController::class, 'store']);
