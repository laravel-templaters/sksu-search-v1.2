<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateDVWrapperController;
use Illuminate\Support\Facades\Hash;

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

//for create dv dont delete

Route::get('/cdv/2y10XGG0AJ7EyQj1tWaGwP4O-Jex{id}ZBpCtK8-{sorter}gCyDNDF8n-Nq3QVjN1BzzXS', [CreateDVWrapperController::class, 'show'])->name('cdv');

//for media library dont delete also hehe
Route::mediaLibrary();

//delete lang karon
Route::get('/to', function () {
    return view('travelorder.travel-order-wrapper');
});
