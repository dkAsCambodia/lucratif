<?php
use Illuminate\Support\Facades\Route;
use App\Livewire\Website\HomePage;
use App\Livewire\Website\AboutPage;
use App\Livewire\Website\ContactPage;
use App\Livewire\Website\InvestInsight;
use App\Livewire\Website\DisclaimerPage;
use App\Livewire\Website\PrivacyPolicyPage;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomePage::class)->name('home');
Route::get('/about-us/company-overview', AboutPage::class)->name('aboutus');
Route::get('/contactus', ContactPage::class)->name('contactus');
Route::get('/investment-insights', InvestInsight::class)->name('investinsight');
Route::get('/disclaimer', DisclaimerPage::class)->name('disclaimer');
Route::get('/privacypolicy', PrivacyPolicyPage::class)->name('privacypolicy');

