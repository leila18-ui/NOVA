
<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Catalogue des livres
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Détails d'un livre
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

// Page À propos
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Page d'inscription
Route::get('/register', function () {
    return view('pages.register');
})->name('register');

// Page de connexion
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

// Page Checkout
Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

// Page Panier
Route::get('/cart', function () {
    return view('cart.index');
})->name('cart.index');
