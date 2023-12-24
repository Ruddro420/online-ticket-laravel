<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\StorekeeperController;


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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 */

Route::get('/dashboard', [TicketController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

/* Route::prefix('dashboard')->middleware('auth')->group(function () {
    

}); */

Route::get('/', [TicketController::class, 'welcome'])->name('welcome');
Route::get('/booking', [TicketController::class, 'booking'])->name('ticket.book');
Route::get('/check', [TicketController::class, 'check'])->name('ticket.check')->middleware('booking.field.not.empty');
Route::get('/storeBooking', [TicketController::class, 'storeBooking'])->name('store.booking')->middleware('booking.field.not.empty');
;









require __DIR__ . '/auth.php';