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

Route::get('/testing', 'App\Http\Controllers\HomeController@test')->name('testing');

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', \App\Http\Livewire\AdminSide\DashMain::class)->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/transactions', function () {
    return view('dashboard');
})->name('transactions');

Route::middleware(['auth:sanctum', 'verified'])->get('/client/dash', \App\Http\Livewire\Client\ClientDashboardMain::class)->name('client-dash');

Route::middleware(['auth:sanctum', 'verified'])->get('/department-head/dash', \App\Http\Livewire\DeptHead\DepartmentHead::class)->name('department-head');

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
Route::middleware(['auth:sanctum', 'verified'])->get('/travel-order/3z21YHH1BK8FzRk2uXbHxQ5P-Kfy{id}ACqDuL9-hDz{isEdit}EOEG9o-Or4RW{travelOrderID}kO2CaaYT', [RoutingController::class, 'show'])->name('travel-order');
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

Route::middleware(['auth:sanctum', 'verified'])->get('/act/dashboard', \App\Http\Livewire\Accountant\Pages\Dashboard::class)->name('accountant-dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/budoff/dashboard', \App\Http\Livewire\BudgetOffice\Pages\BudgetDash::class)->name('budget-dashboard');


//archive
Route::middleware(['auth:sanctum','verified'])->get('/archives/document/list',App\Http\Livewire\Accountant\Pages\Archives\ViewDocumentList::class)->name('archive-list');
Route::middleware(['auth:sanctum','verified'])->get('/archives/document/detail/{id}',App\Http\Livewire\Accountant\Pages\Archives\ViewDocumentDetails::class)->name('archive-detail');
Route::middleware(['auth:sanctum','verified'])->get('/archiver/main',App\Http\Livewire\Accountant\Pages\Archives\ArchiverMainView::class)->name('archiver-main');
Route::middleware(['auth:sanctum','verified'])->get('/archiver/new/archive',App\Http\Livewire\Accountant\Pages\Archives\ArchiverNew::class)->name('archive-new');


//usermgt

Route::middleware(['auth:sanctum','verified'])->get('user/mgt/new',App\Http\Livewire\Client\Users\CreateNewUser::class)->name('create-new-user');

//travelorder pages
Route::middleware(['auth:sanctum','verified'])->get('travel-order/view/34d4c659bb9a93d6b{id}76bd4d016a69aa9d92e1ca81a4c19eb62f5aefda56d653d',App\Http\Livewire\Travelorders\Pages\ViewTravelOrder::class)->name('view-to');
Route::middleware(['auth:sanctum','verified'])->get('travel-order/view/34d4c659bb9a93d6b{id}76bd4d016a69aa{isDraft}9d92e1ca81a{userType}4c19eb62f5aefda56d653d',App\Http\Livewire\Travelorders\Pages\ViewTravelOrder::class)->name('view-to-pending');
Route::middleware(['auth:sanctum','verified'])->get('travel-order/print/16a69aa9d92e1ca81a4c19eb634d4c659bb9a93d6b76bd4d02{id}f5aefda56d653d',App\Http\Livewire\Travelorders\Pages\PrintTravelOrder::class)->name('print-to');

Route::view('/401-page', 'errs.401-page')->name('401-error');