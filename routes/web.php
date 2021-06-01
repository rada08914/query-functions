<?php

use Illuminate\Support\Facades\Route;


route::get('/1',[
    App\Http\Controllers\MasterlistController::class,
    'sample_query'
]);
route::get('/2',[
    App\Http\Controllers\MasterlistController::class,
    'select'
]);
route::get('/3',[
    App\Http\Controllers\MasterlistController::class,
    'find'
]);
route::get('/4',[
    App\Http\Controllers\MasterlistController::class,
    'count'
]);
route::get('/5',[
    App\Http\Controllers\MasterlistController::class,
    'avg'
]);
route::get('/6',[
    App\Http\Controllers\MasterlistController::class,
    'exists'
]);


