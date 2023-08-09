<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get(
    '/',
    function () {
        return view(
            'listings',
            [
                'heading' => 'Latest Listings',
                'listings' =>
                    [
                        [
                            'id' => 1,
                            'title' => 'Listing One',
                            'description' => 'Description for job 1'
                        ],
                        [
                            'id' => 2,
                            'title' => 'Listing Two',
                            'description' => 'Description for job 2'
                        ]
                    ]
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
