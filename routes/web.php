<?php

use App\Http\Controllers\Frontend\ControllerFrontend;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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
//==========feontend route==========

// Route::get("/", [ControllerFrontend::class,"index"])->name("index");
//Route::get('/products',[ControllerFrontend::class,'products'])->name("products");
//Route::get('/loginf',[ControllerFrontend::class,'login'])->name("login_f");
// Route::get('/topbrand',[ControllerFrontend::class,"topbrand"])->name("topbrand");
// Route::get('/cart',[ControllerFrontend::class,'cart'])->name('cart');
// Route::get('/contact',[ControllerFrontend::class,'contact'])->name('contact');



//==========For Feontend Route Group =============================================

Route::controller(ControllerFrontend::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/products', 'products')->name("products");
    Route::get('/loginf','login')->name('login_f');
    Route::get('/topbrand','topbrand')->name("topbrand");
    Route::get("cart","cart")->name("cart");
    Route::get("contact","contact")->name("contact");
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
