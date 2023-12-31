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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All listings
Route::get(
    '/',
    function () {
        return view(
            'listings',
            [
                'heading' => 'Latest Listings',
                'listings' => Listing::all()
            ]
        );
    }
);

// Single Listing
Route::get(
    '/listings/{id}',
    function ($id) {
        return view(
            'listing',
            [
                'listing' => Listing::find($id)
            ]
        );
    }
);

Route::get(
    '/hello',
    function () {
        return response('<h1>Hello</h1>', 404)
            ->header('Content-Type', 'text/plain')
            ->header('foo', 'bar');
    }
);

Route::get(
    '/posts/{id}',
    function ($id) {
        /* dd($id); */
        /* ddd($id); */
        return response('<h1>Post ' . $id . '</h1>');
    }
)->where('id', '[0-9]+');

Route::get(
    '/search',
    function (Request $request) {
        return $request;
    }
);

Route::get(
    '/goodbye',
    function () {
        return view('goodbye');
    }
);
