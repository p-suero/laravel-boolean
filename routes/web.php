<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("homepage");

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
})->name("p_policy");

Route::get('/faq', function () {
    $faqs_prima = config("faqs.faqs_prima");
    $faqs_dopo = config("faqs.faqs_dopo");
    return view('faq')->with(["faq_prima" => $faqs_prima,"faq_dopo" => $faqs_dopo]);
})->name("faq");
