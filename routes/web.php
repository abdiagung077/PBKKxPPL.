<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
Route::get('/dashboard', [LandingPageController::class, 'index']);
