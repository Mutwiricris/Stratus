<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Main navigation pages
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/benefits', function () {
    return view('pages.benefits');
});

Route::get('/platform', function () {
    return view('pages.platform');
});

Route::get('/culture', function () {
    return view('pages.culture');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/insights', function () {
    return view('pages.insights');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

// Products pages
Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/products/ascend-spa', function () {
    return view('pages.products.ascend-spa');
});

Route::get('/products/retail-pro', function () {
    return view('pages.products.retail-pro');
});

Route::get('/products/pool-billiard', function () {
    return view('pages.products.pool-billiard');
});

Route::get('/products/tours-app', function () {
    return view('pages.products.tours-app');
});

Route::get('/products/events-pro', function () {
    return view('pages.products.events-pro');
});

Route::get('/products/agrismart', function () {
    return view('pages.products.agrismart');
});

Route::get('/products/logiflow', function () {
    return view('pages.products.logiflow');
});

// Additional detail pages
Route::get('/ventures', function () {
    return view('pages.ventures');
});

Route::get('/careers', function () {
    return view('pages.careers');
});

Route::get('/solutions', function () {
    return view('pages.solutions');
});

Route::get('/case-studies', function () {
    return view('pages.case-studies');
});

// Blog/Insights sub-pages
Route::get('/insights/{slug}', function ($slug) {
    return view('pages.insights-detail', compact('slug'));
});

// API routes for dynamic content
Route::prefix('api')->group(function () {
    Route::get('/ventures', function () {
        return response()->json([
            'ventures' => [
                ['id' => 1, 'name' => 'LogiFlow', 'sector' => 'Logistics', 'status' => 'Active'],
                ['id' => 2, 'name' => 'FinanceCore', 'sector' => 'FinTech', 'status' => 'Active'],
                ['id' => 3, 'name' => 'AgriSmart', 'sector' => 'AgriTech', 'status' => 'Active'],
                ['id' => 4, 'name' => 'EnergyGrid', 'sector' => 'Energy', 'status' => 'Active'],
            ]
        ]);
    });
});