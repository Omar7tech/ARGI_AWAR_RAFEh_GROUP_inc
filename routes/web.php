<?php


use App\Livewire\Pages\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/services', App\Livewire\Pages\Services::class)->name('services');
Route::get('/service/{service}' , App\Livewire\Pages\ServiceShow::class )->name('service.show');
Route::get('/about', App\Livewire\Pages\About::class)->name('about');
Route::get('/contact', App\Livewire\Pages\Contact::class)->name('contact');
Route::get('/our-work', App\Livewire\Pages\OurWork::class)->name('our-work');
Route::get('/privacy-policy', App\Livewire\Pages\PrivacyPolicy::class)->name('privacy-policy');
Route::get('/terms-and-conditions', App\Livewire\Pages\TermsAndConditions::class)->name('terms-and-conditions');

