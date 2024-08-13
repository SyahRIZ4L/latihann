<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/',[HomeController::class,'index']);
route::get('/dashboard',[HomeController::class,'dashboard']);
route::get('/biodata',[HomeController::class,'biodata']);