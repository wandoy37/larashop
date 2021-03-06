<?php

use App\Http\Livewire\Product\Index;
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
    return view('welcome');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard.index', [
            'title' => 'Dashboard - Home',
        ]);
    });

    Route::get('/products', function () {
        return view('dashboard.products', [
            'title' => 'Dashboard - Products',
        ]);
    });

    Route::get('/products/create', function () {
        return view('dashboard.create_product', [
            'title' => 'Dashboard - Create Product'
        ]);
    });
});
