<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('URL' , function);\
Route::get('/' , function(){
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

Route::view('/read' , 'Product.read');

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




// Factory 
// Steps to work with Factory 
// Create model File 
// create Factory file 
// add model file in seeder file 
// seeder/databaseseeder 


// run a command 
// php artisan db:seed 


Route::get('/empform' , [EmployeeController::class, 'create'])->name('create.page');
Route::get('/empindex' , [EmployeeController::class , 'index'])->name('index.page');
Route::post('/empstore' , [EmployeeController::class , 'store'])->name('store.emp');