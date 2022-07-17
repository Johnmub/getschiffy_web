<?php

use App\Http\Controllers\Newsletter;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*==================
Home
==================*/
Route::get('/{locale}', function ($locale = 'en') 
{
  if(!in_array($locale, ['en', 'es', 'zh', 'hi', 'tl'])) { return redirect('/en'); }

  App::setLocale($locale);
  
  return view('page.index', ['locale' => strtolower($locale)]);
})->name('home');

/*==================
NFTs
==================*/
Route::get('/{locale}/nfts', function ($locale = 'en') 
{
  if(!in_array($locale, ['en', 'es', 'zh', 'hi', 'tl'])) { return redirect('/en/nfts'); }

  App::setLocale($locale);
  
  return view('page.nfts', ['locale' => strtolower($locale)]);
})->name('nfts');

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