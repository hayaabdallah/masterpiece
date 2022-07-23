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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Pages/index');
});

Route::get('/about', function () {
    return view('Pages/about-us');
});

Route::get('/cars', function () {
    return view('Pages/cars');
});

Route::get('/team', function () {
    return view('Pages/team');
});

Route::get('/testimonial', function () {
    return view('Pages/testimonials');
});

Route::get('/contact', function () {
    return view('Pages/contact');
});

Route::get('/login', function () {
    return view('Pages/login');
});

Route::get('/register', function () {
    return view('Pages/register');
});

Route::get('/cardetails', function () {
    return view('Pages/car-details');
});

//---------------------------------admin dashboard routes

Route::get('/dash', function () {
    return view('dashboard.index');
});

Route::get('/adminregister', function () {
    return view('dashboard.page-register');
});

Route::get('/adminlogin', function () {
    return view('dashboard.page-login');
});

Route::get('/adminprofile', function () {
    return view('dashboard.app-profile');
});


Route::get('/calender', function () {
    return view('dashboard.app-calender');
});


Route::get('/table1', function () {
    return view('dashboard.table-datatable');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
