<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\ProductType;
use App\Models\PurchaseType;
use App\Models\PriceRange;
use App\Models\Industry;
use App\Http\Controllers\InsuranceFormController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('product-types', function () {
    return ProductType::select('id', 'name')->active()->get();
});

Route::get('price-ranges', function () {
    return PriceRange::select('id', 'range')->active()->get();
});

Route::get('purchase-types', function () {
    return PurchaseType::select('id', 'name')->active()->get();
});

Route::get('industries', function () {
    return Industry::select('id', 'name')->active()->get();
});

Route::apiResource('insurance-form', InsuranceFormController::class);
