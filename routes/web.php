<?php

use App\Http\Controllers\StorekeeperController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 */

Route::get('/dashboard', [StorekeeperController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/product/view', [StorekeeperController::class, 'view'])->name('product.view');
    Route::post('/product/add', [StorekeeperController::class, 'store'])->name('product.add');

});









require __DIR__ . '/auth.php';