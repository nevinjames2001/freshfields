<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\SocketController;
use App\Http\Controllers\PlantsGalleryController;

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

Route::controller(SampleController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

    Route::get('profile', 'profile')->name('profile');

    Route::post('profile_validation', 'profile_validation')->name('sample.profile_validation');

    Route::get('deleteComment/{id}','deleteComment');

    Route::get('admin/home', 'handleAdmin')->name('handleAdmin')->middleware('admin');

});

Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings');
Route::get('/book/{date}/{veterinarian_id}', [BookingsController::class, 'dateBook'])->name('book');
Route::get('/timeSlotSubmit', [BookingsController::class, 'bookAppointment']);
Route::get('doctor/home', [BookingsController::class, 'bookingDisplay'])->middleware('doctor');
Route::get('doctor/bookingDisplay', [BookingsController::class, 'bookingDisplay'])->name('doctor.route')->middleware('doctor');
Route::get('bookOff', [BookingsController::class, 'bookOff'])->name('doctor.route')->middleware('doctor');

Route::get('plants', [PlantsGalleryController::class,'index'])->name('plants');
Route::get('addPlants', [PlantsGalleryController::class, 'addPlants'])->middleware('user');
Route::get('deletePlants/{plant_id}', [PlantsGalleryController::class, 'deletePlants']);
Route::get('viewPlant/{id}/{user_id}', [PlantsGalleryController::class, 'show']);
Route::get('viewPlant/{id}/{user_id}', [PlantsGalleryController::class, 'show']);
Route::get('submitComments',[PlantsGalleryController::class,'submitComment']);
Route::get('/search',[PlantsGalleryController::class,'search']);


