<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Patient\patientcontroller;

//Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact-us', [HomeController::class, 'storeContact'])->name('contact.store');

// Services Route
Route::get('/services', function () {
    return view('services');
})->name('hospital.services');

// About Us Route
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('hospital.about');

//Gallery Route
Route::get('/gallery', [HomeController::class, 'showGallery'])->name('hospital.gallery');

// Contact Us Route
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('hospital.contact');

// Contact... For admin to see all messages
Route::get('/admin/queries', [ContactController::class, 'index'])->name('admin.queries');

// To view the login section
Route::get('/logins-home', function () {
    return view('logins');
})->name('hospital.logins');


// Patient Authentication Routes
// patient login
Route::get('/patient-login', function () {
    return view('patient.patient_login');
})->name('login');

// patient registration
Route::get('/patient-registration', function () {
    return view('patient.patient_register');
})->name('patient.register');

// patient forgot password
Route::get('/patient-forgot-password', function () {
    return view('patient.patient_forgot_password');
})->name('password.recovery');

// patient reset password
Route::get('/patient-reset-password', function () {
    if(!Session::has('reset_userid')){
        return redirect()->route('password.recovery')->with('error', 'Please verify your account first.');
    }
    return view('patient.patient_reset_password');
})->name('password.reset.page');

// Patient Dashboard
Route::get('/patient-dashboard', function () {
    if(!Session::has('patient_id')){ return redirect()->route('login'); }
    return view('patient.dashboard');
})->name('patient.dashboard');

// Patient Change Password
Route::get('/patient-change-password', [PatientController::class, 'changePassword'])->name('patient.change-password');
Route::post('/patient-change-password-submit', [PatientController::class, 'updatePassword'])->name('patient.update-password');

// Patient Logout
Route::get('/patient-logout', [PatientController::class, 'logout'])->name('patient.logout');


// Routes for submitting forms (these will go to the controller)
Route::post('/patient-login-submit', [PatientController::class, 'loginSubmit'])->name('login.submit');
Route::post('/patient-forgot-password-submit', [PatientController::class, 'passwordVerify'])->name('password.verify');
Route::post('/patient-registration-submit', [PatientController::class, 'register'])->name('patient.register.submit');
Route::post('/patient-reset-password-submit', [PatientController::class, 'passwordUpdate'])->name('password.update');
Route::get('/patient-profile', [PatientController::class, 'editProfile'])->name('patient.profile');
Route::post('/patient-profile-update', [PatientController::class, 'updateProfile'])->name('patient.profile.update');



