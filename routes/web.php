<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FrontHomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Middleware\Authenticate;
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

/*Route::get('/', function () {
    return view('frontTheme.default');
});*/

Route::prefix('admin')->name('admin.')->group(function (){
    
    //AdminHomeController   
    Route::get('dashboard', [AdminHomeController::class , 'index'])->middleware(Authenticate::class)->name('dashboard');

    //UserController
    Route::resource('user',UserController::class)->middleware(Authenticate::class);

    //AuthController
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    //ForgotPasswordController
    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

});
Route::prefix('front')->name('front.')->group(function(){

    Route::get('', [ FrontHomeController::class , 'index' ])->name('');
    Route::get('about', [ FrontHomeController::class , 'about' ])->name('about');
    Route::get('services', [ FrontHomeController::class , 'services' ])->name('services');
    Route::get('blog', [ FrontHomeController::class , 'blog' ])->name('blog');
    Route::get('singleBlog', [ FrontHomeController::class , 'singleBlog' ])->name('singleBlog');
    Route::get('shortcodes', [ FrontHomeController::class , 'shortcodes' ])->name('shortcodes');
    Route::get('contact', [ FrontHomeController::class , 'contact' ])->name('contact');
    Route::get('login', [ FrontHomeController::class , 'login' ])->name('login');
    Route::get('register', [ FrontHomeController::class , 'register' ])->name('register');
});

