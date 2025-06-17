<?php
use Illuminate\Support\Facades\Route;
use App\Livewire\Website\HomePage;
use App\Livewire\Website\AboutPage;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomePage::class)->name('home');
Route::get('/about-us/company-overview', AboutPage::class)->name('aboutus');
