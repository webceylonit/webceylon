<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/about-us', function () {
    return view('frontend.about');
})->name('about');


Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/service-details/{id}', [ServiceController::class, 'show'])->name('service.details');

Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{id}', [BlogController::class, 'show'])->name('blog-details');
Route::get('/portfolio', [ProjectController::class, 'portfolio'])->name('portfolio');
Route::get('/project-details/{id}', [ProjectController::class, 'projectDetails'])->name('project-details');
Route::get('/careers', [JobController::class, 'jobs'])->name('careers');

Route::post('/submit-inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');



//admin dashboard

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Middleware\AdminAuth;


Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');


Route::middleware([App\Http\Middleware\AdminAuth::class])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/ProjectIndex', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/ProjectCreate', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/Projectstore', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/Project{projects}', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/{projects}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/{projects}', [ProjectController::class, 'destroy'])->name('projects.destroy');


    Route::get('/BlogIndex', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/BlogCreate', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/Blogstore', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');


    Route::get('/CareerIndex', [JobController::class, 'index'])->name('careers.index');
    Route::get('/CareerCreate', [JobController::class, 'create'])->name('careers.create');
    Route::post('/Careerstore', [JobController::class, 'store'])->name('careers.store');
    Route::get('/careers/{career}/edit', [JobController::class, 'edit'])->name('careers.edit');
    Route::put('/careers/{career}', [JobController::class, 'update'])->name('careers.update');
    Route::delete('/careers/{career}', [JobController::class, 'destroy'])->name('careers.destroy');

    Route::get('/ServiceIndex', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/ServiceCreate', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/Servicestore', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

    Route::get('/Inquiries', [InquiryController::class, 'index'])->name('inquiries.index');

});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
