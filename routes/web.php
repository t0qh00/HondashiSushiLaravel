<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\TestController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/search', [App\Http\Controllers\SearchController::class, 'show']);
Route::get('/products/json', [App\Http\Controllers\SearchController::class, 'data']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('show');//formulario
Route::get('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'show']);

Route::get('/sanramon', [App\Http\Controllers\PagesController::class, 'index'])->name('SanRamón');
Route::get('/palmares', [App\Http\Controllers\PagesController::class, 'indexP'])->name('Palmares');
Route::get('/menu', [App\Http\Controllers\PagesController::class, 'indexM'])->name('Menú');
Route::get('/menupromos', [App\Http\Controllers\PagesController::class, 'indexMP'])->name('MenúPromos');
Route::get('/galeria', [App\Http\Controllers\PagesController::class, 'indexG'])->name('Galería');

Route::post('/cart', [App\Http\Controllers\CartDetailController::class, 'store'])->name('StoreProductCart');//registrar
Route::delete('/cart', [App\Http\Controllers\CartDetailController::class, 'destroyProduct'])->name('DestroyCartProduct');//eliminar

Route::post('/order', [App\Http\Controllers\CartController::class, 'update'])->name('StoreOrder');//registrar

Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('index'); //listado
    Route::get('/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('Create');//formulario
    Route::post('/products', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('Store');//registrar
    Route::get('/products/{id}/edit', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('EditProduct');//formulario
    Route::post('/products/{id}/edit', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('Update');//registrar
    Route::delete('/products/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('Destroy');//formulario

    Route::get('/products/{id}/images', [App\Http\Controllers\Admin\ImageController::class, 'index'])->name('Images');//formulario
    Route::post('/products/{id}/images', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('StoreImages');//registrar
    Route::delete('/products/{id}/images', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('DeleteImages');//registrar
    Route::get('/products/{id}/images/select/{image}', [App\Http\Controllers\Admin\ImageController::class, 'select'])->name('SelectImage');//formulario

    Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('index'); //listado
    Route::get('/categories/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('CreateCategories');//formulario
    Route::post('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('Store');//registrar
    Route::get('/categories/{category}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('Edit');//formulario
    Route::post('/categories/{category}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('UpdateCategories');//registrar
    Route::delete('/categories/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('DestroyCategories');//formulario
});
//Preguntar como se usan los namespaces para ponerlo en la ruta del controlador

