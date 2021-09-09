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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 
Route::get('/sec', function () {
    return view('profile.show');
})->name('sec');

Route::get('/disbursements', function () {
    return view('disbursements');
})->name('disbursements');

Route::get('/liquidations', function () {
    return view('liquidations');
})->name('liquidations');

Route::get('/certificate-of-availability-of-funds', function () {
    return view('coafs');
})->name('coafs');

Route::get('/po-certification', function () {
    return view('pocs');
})->name('pocs');

Route::get('/certification-on-personnel-records', function () {
    return view('coprs');
})->name('coprs');

Route::get('/communications', function () {
    return view('communications');
})->name('communications');

Route::get('/travel-order', function () {
    return view('travel-orders');
})->name('travel-orders');

Route::get('/others', function () {
    return view('others');
})->name('others');

Route::get('/disbursements/cash-advance', function () {
    return view('cash-advances');
})->name('cash-advances');

Route::get('/disbursements/reimbursement', function () {
    return view('reimbursements');
})->name('reimbursements');

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

//char rourtes\

Route::get('/cdv', function () {
    return view('test');
});