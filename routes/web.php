<?php

use App\Models\User;
use App\Models\Order;
use App\Mail\TestMail;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteConfigController;
use App\Mail\NewOrder;
use App\Models\SiteConfig;

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{slug}', [HomeController::class, 'view'])->name('view');
Route::post('order', [OrderController::class, 'store'])->name('order.store');
Route::get('orders/confirmed/{order}', [OrderController::class, 'show'])->name('order.confirmed');
Route::get('aboutus', [HomeController::class, 'aboutus'])->name('about');
Route::get('whyus', [HomeController::class, 'whyus'])->name('whyus');
Route::get('unclaimed', [HomeController::class, 'unclaimed'])->name('unclaimed');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Home
    Route::get('/', [HomeController::class, 'adminDashboard'])->name('home');
    // Products
    Route::get('products', [ProductController::class, 'index'])->name('product');
    Route::get('products/add', [ProductController::class, 'create'])->name('product.add');
    Route::post('products/media', [ProductController::class, 'storeMedia'])->name('media.store');
    Route::post('products/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/{id}', [ProductController::class, 'view'])->name('product.view');
    Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::patch('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    // Categories
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::post('category/add', [CategoryController::class, 'store']);
    Route::delete('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    // Orders
    Route::get('orders', [OrderController::class, 'index'])->name('orders');
    Route::get('orders/view/{id}', [OrderController::class, 'view'])->name('orders.view');
    Route::get('orders/delivered/{id}', [OrderController::class, 'delivered'])->name('orders.delivered');
    // Site Config
    Route::get('settings', [\App\Http\Controllers\SiteConfigController::class, 'index'])->name('settings');
    Route::post('settings/update/contact-info', [SiteConfigController::class, 'contactInfo'])->name('settings.update');
    Route::post('settings/update/logo', [SiteConfigController::class, 'storeLogo'])->name('settings.update.logo');
});


// Route::get('test', function () {
//     $orders = Order::find(12)->product;
//     dd($orders->product_name);
// });
