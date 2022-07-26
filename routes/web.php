<?php

use App\Http\Controllers\Newsletter;
use App\Http\Middleware\LocaleValid;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*==================
Home
==================*/
Route::get('/{locale}', function ($locale = 'en') {
  return view('page.index', ['locale' => strtolower($locale)]);
})->name('home')->middleware(LocaleValid::class);

/*==================
NFTs
==================*/
Route::get('/{locale}/nfts', function ($locale = 'en') {
  return view('page.nfts', ['locale' => strtolower($locale)]);
})->name('nfts')->middleware(LocaleValid::class);

/*==================
Newsletter
==================*/
Route::post('{locale?}/newsletter_member', [Newsletter::class, 'inside_newsletter']);

/*==================
Cfg
==================*/
Route::any('{query}', function() { 
  return redirect('/en'); 
})->where('query', '.*');

Route::redirect('/', '/en');