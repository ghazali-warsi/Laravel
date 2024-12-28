<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::controller(EmployeeController::class)->group(function()
{
    Route::get('/empform' , 'create')->name('create.page');
    Route::get('/empindex' ,  'index')->name('index.page');
    Route::post('/empstore' ,  'store')->name('store.emp');
    Route::get('/single/{id}' ,  'edit' )->name('emp.edit');
    Route::post('/update/{id}',  'update')->name('emp.update');
    Route::post('/delete/{id}' ,  'destroy')->name('emp.delete');
    Route::get('/show/{id}' ,  'show')->name('single.page');
});


Route::get('/signup' , [UserController::class , 'signup'])->name('user.form');
Route::post('/register' , [UserController::class , 'register'])->name('user.store');
Route::get('/loginform' , [UserController::class , 'loginform'])->name('user.login');
Route::post('/login' , [UserController::class , 'login'])->name('user.check');
Route::post('/logout' , [UserController::class , 'logout'])->name('user.out');
Route::get('/web' , [UserController::class , 'website'])->name('website');
