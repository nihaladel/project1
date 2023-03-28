<?php
use Illuminate\Support\Facades\Route;
 Route::get('/', function () {
 return view('welcome');
 });

 Route::get('about', function(){
$name ='Mohammed';
// return view('about', ['name' => $name]);
// return view('about')->with('name', $name); 
return view('about', compact('name'));

 });
