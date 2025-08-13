<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerControlador::class, 'index']);
Route::get('otro/{post}', [PrimerControlador::class, 'otro']);

// Route::get('/test', function(){
//     return "Welcome";
// });

// Route::get('/test', function () {
//     return view('test');
// });
//
// // Route::get('/crud', function(){
// //     return view('crud/index');
// // });
//
// Route::get('/crud', function () {
//     $age = 21;
//     $data = ['name' => 'Joaquin', 'age' => $age];
//
//     return view('crud/index', $data);
// })->name('crud');
//
// Route::get('/contact', function () {
//     // return redirect('/contact2', 303);
//     // return redirect()->route('contact2');
//     // return to_route('contact2');
//
//     return view('contact', ['name' => 'Joaquin']);
// })->name('contact');
//
// Route::get('/contact2', function () {
//     return view('contact2');
// })->name('contact2');
