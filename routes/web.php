<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All Listings

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing

// ---------------------------

// Route::get('/listings/{id}', function($id) {
//     $listing = Listing::find($id);

//     if($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     }else{
//         abort('404');
//     }
// });

// ---------------------------


// we can find single listing in another way 

Route::get('/listings/{listing}', function(Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);
});



// examples for basic learning 

// -----------------

// Route::get('/hello', function () {
//     return response('<h1>Hello World</h1>',200)
//     ->header('Content-type', 'text/plain')
//     ->header('foo', 'bar');
// });

// Route::get('/posts/{id}' , function($id){
//     return response('<h2>Post ' . $id . '</h2>');
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return $request -> name . ' ' . $request -> city;
// });

// -----------------
