<?php

use Illuminate\Support\Facades\Route;

// Route::view("/", "welcome")->name("welcome");
// Route::view("/", "landing.index")->name("index");
// Route::view("/about", "landing.about")->name("about");
// Route::get("mi/ruta",ControladorDeLaRuta);
// Route::post("mi/ruta",ControladorDeLaRuta);
// Route::put("mi/ruta", ControladorDeLaRuta);
// Route::delete("mi/ruta", ControladorDeLaRuta);
// Route::patch("mi/ruta", ControladorDeLaRuta);

Route::view('/', 'index')->name("index");
Route::view('/services', 'services')->name("services");
Route::view('/contact', 'contact')->name("contact");
Route::view('/about', 'about')->name("about");
