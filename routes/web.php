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
    return view('layout.master');
})->name('acceuil');

Route::view('about', 'pages/about')->name('about');
Route::view('contact-us', 'pages/contact')->name('contact');

// star --> bach dwaz value f lget fl lien 
// Route::get('about/{id}', function ($id) {
//     $categorie = [
//         1 => 'Voiture',
//         2 => 'Immobilier',
//         3 => 'Moto'
//     ];
//     return view('contact', [
//         'cate' => $categorie[$id]
//     ]);
// });
// end --> bach dwaz value f lget fl lien 



// star --> bach dowz array fiha variable 
// (URL , VIEW , array of data)
// Route::view('contact-us', 'contact', [
//     'page_name' => 'Contact page ',
//     'description' => 'Hello from page contact for testing array of data'
// ]);
// star --> bach dowz array fiha variable 
