<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactNoteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', WelcomeController::class);
Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->middleware('auth');

    Route::get('/settings/profile-information', ProfileController::class)
        ->middleware('auth')
        ->name('user-profile-information.edit');

    Route::get('/settings/password', PasswordController::class)
        ->middleware('auth')
        ->name('user-password.edit');

    Route::resource('/contacts', ContactController::class);

    Route::delete('contacts/{contact}/restore', [ContactController::class, 'restore'])
        ->name('contacts.restore')
        ->withTrashed();
    Route::delete('contacts/{contact}/force-delete', [ContactController::class, 'forceDelete'])
        ->name('contacts.force-delete')
        ->withTrashed();

    Route::resource('/companies', CompanyController::class);

    Route::resources([
        '/tags' => TagController::class,
        '/tasks' => TaskController::class
    ]);

    Route::resource('/activities', ActivityController::class)->names([
        'index' => 'activities.all',
        'show' => 'activities.view'
    ]);

    Route::resource('/contacts.notes', ContactNoteController::class)->shallow();
});



// Route::fallback(function(){
//     return "<h1>Sorry, the page does not exist</h1>";
// });