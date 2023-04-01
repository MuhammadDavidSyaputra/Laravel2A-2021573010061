<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
Route::get('/coba-class',[PageController::class,'cobaClass']); 
