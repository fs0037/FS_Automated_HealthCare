<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Patient\patientcontroller;
use App\Http\Controllers\Admin\AdminController;


// Public Routes
// Home, Services, About Us, Gallery, Contact Us, Logins
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact-us', [HomeController::class, 'storeContact'])->name('contact.store');

Route::get('/services', function () { return view('services'); })->name('hospital.services');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('hospital.about');
Route::get('/gallery', [HomeController::class, 'showGallery'])->name('hospital.gallery');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('hospital.contact');
Route::get('/logins-home', function () { return view('logins'); })->name('hospital.logins');

// Admin Queries Route
Route::get('/admin/queries', [ContactController::class, 'index'])->name('admin.queries');


// Patient Authentication Routes
// Patient Login
Route::get('/patient-login', function () { return view('patient.patient_login'); })->name('login');
Route::post('/patient-login-submit', [patientcontroller::class, 'loginSubmit'])->name('login.submit');

// Patient Registration
Route::get('/patient-registration', function () { return view('patient.patient_register'); })->name('patient.register');
Route::post('/patient-registration-submit', [patientcontroller::class, 'register'])->name('patient.register.submit');

// Patient Forgot Password
Route::get('/patient-forgot-password', function () { return view('patient.patient_forgot_password'); })->name('password.recovery');
Route::post('/patient-forgot-password-submit', [patientcontroller::class, 'passwordVerify'])->name('password.verify');

// Patient Reset Password
Route::get('/patient-reset-password', function () {
    if(!Session::has('reset_userid')){
        return redirect()->route('password.recovery')->with('error', 'Please verify your account first.');
    }
    return view('patient.patient_reset_password');
})->name('password.reset.page');
Route::post('/patient-reset-password-submit', [patientcontroller::class, 'passwordUpdate'])->name('password.update');



// Protected Routes
// Patient Dashboard, Profile, Change Password, Logout
Route::middleware(['patientAuth'])->group(function () {
    
    // Dashboard
    Route::get('/patient-dashboard', function () {
        return view('patient.dashboard');
    })->name('patient.dashboard');

    // Profile
    Route::get('/patient-profile', [patientcontroller::class, 'editProfile'])->name('patient.profile');
    Route::post('/patient-profile-update', [patientcontroller::class, 'updateProfile'])->name('patient.profile.update');

    // Book Appointment 
    Route::get('/patient-book-appointment', [patientcontroller::class, 'bookAppointment'])->name('patient.book_appointment');
    Route::post('/patient-book-appointment-submit', [patientcontroller::class, 'bookAppointmentSubmit'])->name('patient.book-appointment.submit');

    // Change Password
    Route::get('/patient-change-password', [patientcontroller::class, 'changePassword'])->name('patient.change-password');
    Route::post('/patient-change-password-submit', [patientcontroller::class, 'updatePassword'])->name('patient.update-password');

    // Logout
    Route::get('/patient-logout', [patientcontroller::class, 'logout'])->name('patient.logout');

});


// Admin Authentication Routes
// Admin Login
Route::get('//admin-login', function () { return view('admin.admin_login'); })->name('login');
Route::post('/admin-login-submit', [AdminController::class, 'loginSubmit'])->name('admin.login.submit');

// Admin Dashboard (Demo route for now)
Route::get('/admin-dashboard', function () {
    if(!Session::has('admin_id')){ return redirect()->route('admin.login'); }
    return "<h1>Welcome to Admin Dashboard!</h1> <p>This page will be designed later.</p>";
})->name('admin.dashboard');