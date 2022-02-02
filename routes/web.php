<?php

    use App\Http\Controllers\MemberController;
    use Illuminate\Support\Facades\Route;
    use Laravel\Fortify\Fortify;
    use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;

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


Route::group(['middleware' => ['auth']], function() {
        // your routes
    Route::resource('/', MemberController::class);
//    Route::get('email/verify', EmailVerificationNotificationController::class)->name('verification.resend');
    Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');
});

/*
    Route::resource('/', MemberController::class);
    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');*/
