<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Patient\patientcontroller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Doctor\DoctorController;


// Public Routes
// Home, Services, About Us, Gallery, Contact Us, Logins
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact-us', [HomeController::class, 'storeContact'])->name('contact.store');

Route::get('/services', function () { return view('services'); })->name('hospital.services');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('hospital.about');
Route::get('/gallery', [HomeController::class, 'showGallery'])->name('hospital.gallery');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('hospital.contact');
Route::get('/logins-home', function () { return view('logins'); })->name('hospital.logins');


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



// Protected Routes (Middleware applied)
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
Route::get('/admin-login', function () { return view('admin.admin_login'); })->name('admin.login');
Route::post('/admin-login-submit', [AdminController::class, 'loginSubmit'])->name('admin.login.submit');

// Admin Queries Route
Route::get('/admin/queries', [ContactController::class, 'index'])->name('admin.queries');

// Admin Protected Routes (Middleware applied)
Route::middleware(['adminAuth'])->group(function () {
    
    // Dashboard
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Admin Logout
    Route::get('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Doctor Specialization Routes
    Route::get('/admin/doctor-specialization', [AdminController::class, 'doctorSpecialization'])->name('admin.doctor.specialization');
    Route::post('/admin/doctor-specialization-add', [AdminController::class, 'addSpecialization'])->name('admin.add.specialization');
    Route::get('/admin/doctor-specialization-delete/{id}', [AdminController::class, 'deleteSpecialization'])->name('admin.delete.specialization');

    // Doctor Routes
    Route::get('/admin/add-doctor', [AdminController::class, 'addDoctor'])->name('admin.add.doctor');
    Route::post('/admin/store-doctor', [AdminController::class, 'storeDoctor'])->name('admin.store.doctor');
    
    Route::get('/admin/manage-doctors', [AdminController::class, 'manageDoctors'])->name('admin.manage.doctors');
    Route::get('/admin/delete-doctor/{id}', [AdminController::class, 'deleteDoctor'])->name('admin.delete.doctor');

});

// Doctor Authentication Routes
// Doctor Login
Route::get('/doctor-login', [DoctorController::class, 'login'])->name('doctor.login');
Route::post('/doctor-login-submit', [DoctorController::class, 'loginSubmit'])->name('doctor.login.submit');

// Doctor Forgot Password
Route::get('/doctor-forgot-password', [DoctorController::class, 'forgotPassword'])->name('doctor.password.recovery');
Route::post('/doctor-forgot-password-submit', [DoctorController::class, 'forgotPasswordSubmit'])->name('doctor.password.verify');

// Doctor Reset Password Routes
Route::get('/doctor-reset-password', [DoctorController::class, 'resetPassword'])->name('doctor.password.reset.page');
Route::post('/doctor-reset-password-submit', [DoctorController::class, 'resetPasswordSubmit'])->name('doctor.password.reset.submit');

// Doctor Protected Routes (Middleware applied)
Route::middleware(['doctorAuth'])->group(function () {
    
    // Doctor Dashboard 
    Route::get('/doctor-dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
    
    // Doctor Logout
    Route::get('/doctor-logout', [DoctorController::class, 'logout'])->name('doctor.logout');

    // Edit Profile
    Route::get('/doctor-profile', [DoctorController::class, 'editProfile'])->name('doctor.profile');
    Route::post('/doctor-profile-update', [DoctorController::class, 'updateProfile'])->name('doctor.profile.update');

    // Change Password
    Route::get('/doctor-change-password', [DoctorController::class, 'changePassword'])->name('doctor.change-password');
    Route::post('/doctor-change-password-submit', [DoctorController::class, 'updatePassword'])->name('doctor.update-password');
    
    
});


