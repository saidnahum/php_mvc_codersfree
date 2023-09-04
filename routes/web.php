<?php

use Lib\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function(){
   return "Hola desde la página de contacto";
});

Route::get('/about', function(){
   return "Hola desde la página acerca de";
});

Route::get('/cursos/:slug', function($slug){
   return "Hola desde la página CURSOS, el curso es: $slug";
});

Route::dispatch();