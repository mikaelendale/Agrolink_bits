<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeliverController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//user
Route::middleware('auth')->group(function () {
    Route::get('/order/dashboard', [OrderController::class, 'cart'])->name('order.dashboard');
    Route::get('/cart', [OrderController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [OrderController::class, 'add'])->name('cart.add');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/generate-qr-code/{id}', [DeliverController::class, 'generateQrCode'])->name('order.qr');
    Route::get('/order-qr-code/{id}', [DeliverController::class, 'showQrCode'])->name('order.qr');

});
//admin
Route::middleware(['auth'])->group(function () {

    Route::get('users/all', [DashboardController::class, 'allUsers'])->name('users.all');
});
//provider
Route::middleware(['auth'])->group(function () {
    Route::get('/provider/inventory', [InventoryController::class, 'inventory'])->name('inventory');
    Route::get('/provider/inventory/create', [InventoryController::class, 'create'])->name('products.create');
    // Route::get('/inventory/create', [InventoryController::class, 'create'])->name('products.create');
    Route::post('/inventory', [InventoryController::class, 'store'])->name('products.store');
    Route::get('/provider/orders', [InventoryController::class, 'orders'])->name('products.orders');

    Route::get('/orders/{orderId}/qr-code', [InventoryController::class, 'showQrCode'])->name('order.qr');
    Route::get('/orders/{orderId}/process', [InventoryController::class, 'processOrder'])->name('order.process');

});
//deliver
Route::middleware(['auth'])->group(function () {
    Route::get('/deliveries', [DeliverController::class, 'deliverDashboard'])->name('deliver.dashboard');
    Route::post('/process-order/{id}', [OrderController::class, 'updateStatus'])->name('order.process');
});

require __DIR__ . '/auth.php';
