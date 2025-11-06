<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'pages.index');
Route::view('/about', 'pages.about');
Route::view('/courses', 'pages.course');
Route::view('/courses-details', 'pages.course-details');
Route::view('/admissions', 'pages.admissions');
Route::view('/facility', 'pages.facility');
Route::view('/gallery', 'pages.gallery');
Route::view('/contact-us', 'pages.contact-us');
Route::view('/work-with-us', 'pages.work-with-us');
Route::view('/faq', 'pages.faq');
