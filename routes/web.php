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

Route :: get('index',function(){
    return view('index');
});

Route :: get('search', function(){
    return view ('search');
});
Route :: get('home', function(){
    return view ('home');
});
Route :: get('archive',function(){
    return view ('archive');
});
Route :: get('gallery',function(){
    return view ('gallery');
});
Route :: get('ndex',function(){
    return view ('ndex');
});
Route :: get('location',function(){
    return view ('location');
});
Route :: get('menu',function(){
    return view ('menu');
});
Route :: get('news',function(){
    return view ('news');
});
Route :: get('',function(){
    return view ('');
});