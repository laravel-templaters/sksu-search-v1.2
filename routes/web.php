<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateDVWrapperController;
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\TravelOrderSaved;
use App\Http\Controllers\GoogleController;
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

Route::get('auth/google', 'App\Http\Controllers\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\GoogleController@handleGoogleCallback');



Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', \App\Http\Livewire\AdminSide\DashMain::class)->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/transactions', function () {
    return view('dashboard');
})->name('transactions');
 
Route::middleware(['auth:sanctum', 'verified'])->get('/client/dash', \App\Http\Livewire\Client\ClientDashboardMain::class)->name('client-dash');

Route::middleware(['auth:sanctum', 'verified'])->get('/disbursements', function () {
    return view('disbursements');
})->name('disbursements');

Route::middleware(['auth:sanctum', 'verified'])->get('/liquidations', function () {
    return view('liquidations');
})->name('liquidations');

Route::middleware(['auth:sanctum', 'verified'])->get('/certificate-of-availability-of-funds', function () {
    return view('coafs');
})->name('coafs');

Route::middleware(['auth:sanctum', 'verified'])->get('/po-certification', function () {
    return view('pocs');
})->name('pocs');

Route::middleware(['auth:sanctum', 'verified'])->get('/certification-on-personnel-records', function () {
    return view('coprs');
})->name('coprs');

Route::middleware(['auth:sanctum', 'verified'])->get('/communications', function () {
    return view('communications');
})->name('communications');

Route::middleware(['auth:sanctum', 'verified'])->get('/travel-order', function () {
    return view('travel-orders');
})->name('travel-orders');

Route::middleware(['auth:sanctum', 'verified'])->get('/others', function () {
    return view('others');
})->name('others');

Route::middleware(['auth:sanctum', 'verified'])->get('/disbursements/cash-advance', function () {
    return view('cash-advances');
})->name('cash-advances');

Route::middleware(['auth:sanctum', 'verified'])->get('/disbursements/reimbursement', function () {
    return view('reimbursements');
})->name('reimbursements');

Route::middleware(['auth:sanctum', 'verified'])->get('redirects', 'App\Http\Controllers\HomeController@index')->name('redirect');

//for create dv dont delete

Route::middleware(['auth:sanctum', 'verified'])->get('/cdv/2y10XGG0AJ7EyQj1tWaGwP4O-Jex{id}ZBpCtK8-{sorter}gCyDNDF8n-Nq3QVjN1BzzXS', [CreateDVWrapperController::class, 'show'])->name('cdv');
Route::middleware(['auth:sanctum', 'verified'])->get('/travel-order/3z21YHH1BK8FzRk2uXbHxQ5P-Kfy{id}ACqDuL9-hDzEOEG9o-Or4RWkO2CaaYT', [RoutingController::class, 'show'])->name('travel-order');
//for media library dont delete also hehe
Route::mediaLibrary();

//delete lang karon
Route::middleware(['auth:sanctum', 'verified'])->get('/to', function () {
    return view('travelorder.travel-order-wrapper');
});



//for emailing
Route::middleware(['auth:sanctum', 'verified'])->get('/email',function(){
    Mail::to('gicawalo@gmail.com')->send(new TravelOrderSaved());
    return new TravelOrderSaved();
});