<?php
use Illuminate\Support\Facades\Route;
use App\Livewire\Website\HomePage;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomePage::class)->name('home');
