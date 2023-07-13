<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Models\Korisnik;
// use App\Models\Autokola;
// use App\Models\Instruktor;
// use App\Models\Kviz;
// use App\Models\Student;
// use App\Models\User;

use App\Http\Controllers\Api\KorisnikController;
use App\Http\Controllers\Api\AutoskolaController;
use App\Http\Controllers\Api\InstruktorController;
use App\Http\Controllers\Api\KvizController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UpitController;

use Illuminate\Support\Facades\Auth;



Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers\Api'], function(){
    Route::apiResource('korisniks', KorisnikController::class);
    Route::apiResource('autoskolas', AutoskolaController::class);
    Route::apiResource('instruktors', InstruktorController::class);
    Route::apiResource('kvizs', KvizController::class);
    Route::apiResource('students', StudentController::class);
    Route::apiResource('users', UserController::Class);
    Route::apiResource('upits', UpitController::Class);
});

Route::post('/kreirajkorisnika',function(Request $request){
    App\Models\User::create([
        'ime'=>$request->ime,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'uloga'=>$request->uloga,
        'profilnaURL'=>'',
        'autoskola_id'=>$request->autoskola_id
    ]);
    
});


Route::post('/login',function(Request $request){
    if(!Auth::attempt([
        'email'=>$request->email,
        'password'=>$request->password
    ])){
        return response([
            'message'=>'Invalid credentials!'
        ]);
    }
    $user = Auth::user();
    $token = $user->createToken('token')->plainTextToken;
    $cookie = cookie('jwt', $token, 60 * 24 );
    return response($user)->withCookie($cookie);
    // return $user;
    });
    
    // Route::middleware('auth:sanctum')->get('/korisnik', function (Request $request) {
    //     return Auth::user();
    // });

    // Route::post('/logout', function (Request $request) {
    //     $request->user()->currentAccessToken()->delete();
    
    //     return response([
    //         'message' => 'Logged out successfully'
    //     ])->withCookie(cookie()->forget('jwt'));
    // })->middleware('auth:sanctum');
