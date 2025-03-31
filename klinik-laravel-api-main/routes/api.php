<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SseController;
use App\Http\Controllers\UpdateUserInfo;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\BloodBankController;
use App\Http\Controllers\OurOffersController;
use App\Http\Controllers\BloodDonorController;
use App\Http\Controllers\PharmacistController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BirthReportController;
use App\Http\Controllers\DeathReportController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\AppointmentReservation;
use App\Http\Controllers\BedAllotmentController;
use App\Http\Controllers/LaboratoristController;
use App\Http\Controllers\OperationReportController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\DoctorAppointmentController;
use App\Http\Controllers\OrderNotificationController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\AppointmentNotification;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Add this test route
Route::get('/users', function () {
    return ['message' => 'Users route is working!'];
});

Route::prefix('v1')->group(function () use ($router) {
    // Disable Authentication EndPoints (commented out)
    // Route::post('/register', [RegisteredUserController::class, 'store'])
    //     ->middleware('guest')
    //     ->name('api.register');
    // Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    // Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    //     ->middleware('auth:sanctum');
    // Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    //     ->middleware('guest')
    //     ->name('api.password.email');
    // Route::post('/reset-password', [NewPasswordController::class, 'store'])
    //     ->middleware('guest')
    //     ->name('api.password.store');
    

    // Other routes remain as is
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/update-password', [UpdateUserInfo::class, 'updatePassword']);
        Route::post('/update-name', [UpdateUserInfo::class, 'updateName']);
        Route::post('/update-email', [UpdateUserInfo::class, 'updateEmail']);
        Route::post('/update-social-links', [UpdateUserInfo::class, 'updateSocialLinks']);
        Route::post('/update-image', [UpdateUserInfo::class, 'updateImage']);
        Route::get('/get-user-photo', [UserController::class, 'getUserProfilePhoto']);
        Route::get('/is-user-admin', [UserController::class, 'isUserAdmin']);
    });
    Route::get('/fetch-user-role', [UserController::class, 'getUserRole']);
    
    // Continue with the rest of the routes
    // ...
});
