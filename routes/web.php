<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TangoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Static Pages
Route::get('/books', [TangoController::class, 'books'])->name('pages.books');
Route::get('/book/{id}', [TangoController::class, 'bookDetails'])->name('pages.bookDetails');
Route::get('/contact', [TangoController::class, 'contact'])->name('pages.contact');
Route::get('/about', [TangoController::class, 'about'])->name('pages.about');
Route::post('/book', [TangoController::class, 'save'])->name('books.save');
Route::middleware('web')->group(function () {
    Route::delete('/book/{id}', [TangoController::class, 'destroy'])->name('pages.destroy');
});

Route::get('/api/books', [TangoController::class, 'fetchBooksByGenre']);
// Auth Routes
Route::middleware('web')->group(function () {
    // Registration
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('auth.register');
    Route::post('/register', [UserController::class, 'store'])->name('user.store');

    // Login & Logout
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('auth.login');
    Route::post('/login', [UserController::class, 'login'])->name('user.login');
    Route::post('/logout', [UserController::class, 'logout'])->name('user.logout')->middleware('auth');

    // Dashboard
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');

    // Forgot & Reset Password
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

// Dashboard Route
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth'); // Show user dashboard
// Route::get('/update-progress/{id}', [TangoController::class, 'updateProgress'])->name('pages.updateProgress');
Route::post('/books/{bookId}/progress', [TangoController::class, 'updateProgress'])->name('pages.updateProgress');
// Book Management Routes (Relationship)
Route::middleware('auth')->group(function () {
    Route::get('/my-books', [TangoController::class, 'userBooks'])->name('user.books'); // List books created by the user
    Route::get('/books/create', [TangoController::class, 'create'])->name('pages.create'); // Create new book
});


// Test Email
Route::get('/test-email', function () {
    Mail::raw('This is a test email from Laravel.', function ($message) {
        $message->to('recipient@example.com')
                ->subject('Test Email')
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
    });

    return 'Email sent successfully!';
});





