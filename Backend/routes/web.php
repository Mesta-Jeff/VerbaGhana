<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebChatController;
use App\Http\Controllers\WebFrontPageController;


Route::get('/', [WebFrontPageController::class, 'index'])->name('index');
Route::get('/vg/chat', [WebChatController::class, 'chat'])->name('chat');