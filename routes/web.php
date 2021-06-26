<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\Request\TicketController;


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

Route::group(['prefix'=>'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('user.index');
})->name('dashboard');

// Admin All Route 

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
//Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

// User All Route

Route::get('/user/logout', [MainUserController::class, 'Logout'])->name('user.logout');
Route::get('/user/profile', [MainUserController::class, 'UserProfile'])->name('user.profile');
Route::get('/user/profile/edit', [MainUserController::class, 'UserProfileEdit'])->name('profile.edit');


//Service Routes 

//Ticket Routes Users

//Route::prefix('ticket')->group(function(){
Route::get('/view', [TicketController:: 'TicketView'])->name('all.ticket');

//});
   

//Ticket Routes Admin 
