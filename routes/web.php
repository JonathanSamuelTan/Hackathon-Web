<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userDashboardController;
use App\Http\Controllers\PaymentController;
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

// route for guess
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/downloadGuideBook', [userDashboardController::class, 'downloadGuideBook'])->name('downloadGuideBook');
Route::get('create-leader', [LeaderController::class, 'create'])-> name('create-leader');
Route::post('store-leader', [LeaderController::class, 'store'])-> name('store-leader');
Route::get('/downloadGuideBook', [userDashboardController::class, 'downloadGuideBook'])->name('downloadGuideBook');


// route for registered user
Route::middleware('auth')->group(function () {
    // leader
    Route::get('create-leader', [LeaderController::class, 'create'])-> name('create-leader');
    Route::post('store-leader', [LeaderController::class, 'store'])-> name('store-leader');
    Route::get('/dashboard', [userDashboardController::class, 'show'])-> name('dashboard');
    Route::get('/leaders/{leader}/cv', [LeaderController::class, 'showCV'])->name('leaders.cv');
    Route::get('/leaders/{leader}/flazz', [LeaderController::class, 'showFlazz'])->name('leaders.flazz');

    // member
    Route::get('create-member', [MembersController::class, 'create'])-> name('create-member');
    Route::post('store-member', [MembersController::class, 'store'])-> name('store-member');
    Route::get('/members/{member}/cv', [MembersController::class, 'showCV'])->name('members.cv');
    Route::get('/members/{member}/flazz', [MembersController::class, 'showFlazz'])->name('members.flazz');

    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // payment
    Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
    Route::post('/payment/{id}', [PaymentController::class, 'store'])->name('payment.store');

    // view invoice
    Route::get('/users/{user}/invoice', [adminController::class, 'showInvoice'])->name('team.invoice');
    
    // update verify status
    // Route::patch('/update-status/{id}', [adminController::class, 'updateStatus'])->name('invoice.update-status');

    
});

// route for admin
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin-dashboard', [adminController::class, 'index'])->name('admin-dashboard');
    Route::get('group-detail/{id}', [adminController::class, 'show'])->name('group-detail');
});


//route for logout
Route::get('logout', [adminController::class, 'logout'])->name('logout');
require __DIR__.'/auth.php';


