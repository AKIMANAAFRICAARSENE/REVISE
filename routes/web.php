<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;

// Dashboard (Home) Route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Reports Routes
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('/reports/orders', [ReportController::class, 'orders'])->name('reports.orders');
Route::get('/reports/products', [ReportController::class, 'products'])->name('reports.products');

// Resource Routes
Route::resource('suppliers', SupplierController::class);
Route::resource('products', ProductController::class);
Route::resource('companies', CompanyController::class);
Route::resource('orders', OrderController::class);
Route::resource('employees', EmployeeController::class);
