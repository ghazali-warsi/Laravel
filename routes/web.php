<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('URL' , function);\
Route::get('/home' , function(){
    return view('welcome');
})->name('home');

Route::view('/aboutus', 'about')->name('about');  // static work 
Route::view('/services', 'service')->name('service');
Route::view('/contactUs' , 'contact')->name('contact');

// creation of routes
// methods 
// view (redirection to view )
// get(hit url with some function )
//  route(create a url),
//    name(named a route)


// parameterized Route

// Route::get('/aboutus/{id}' , function(string $name){

//     // return view('about');
//     return '<h1>'.$name .'</h1>';
// }
// )->name('aboutus');



Route::get('/about/{id?}/us/{age?}' , function(string $name = null, int $age){

    // return view('about');
    return '<h1>'.$name .'</h1> <br>'.'<h1>'.$age .'</h1>';
}
)->name('aboutus');


Route::fallback(function()

{

   return view('error404');
}
);


// route::prefix('/home')->group(function ()
// {
//     route::view('/about' , 'about');
//     route::view('/service' , 'service');
//     route::view('/contact' , 'contact');
    
// });



// Seeder 
// Steps to work with seeder 
// Create model File 
// create seeder file 
// add model file in seeder file 
// seeder/databaseseeder 
// $this->call([
// xyzSeeder::class
// ]);

// run a command 
// php artisan db:seed 