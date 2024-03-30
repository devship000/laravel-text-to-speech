<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'Index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');

    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/logout/', [UserController::class, 'UserLogout'])->name('user.logout');

    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
    Route::post('/user/password/update ', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');
});

require __DIR__ . '/auth.php';

/// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    // admin dashboard

    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');

        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');

        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');

        Route::post('/admin/profile/store', 'AdminProfileStore')->name('admin.profile.store');

        Route::get('/admin/change/password', 'AdminChangePassword')->name('admin.change.password');

        Route::post('/admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
    });
}); //End Group Admin Middleware

// Agent Group Middleware
Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
}); //End Group Admin Middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

//// mahabub works:-

//// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function () {


    //// Property Type All Route
    Route::controller(SiteSettingController::class)->group(function () {
        Route::get('/admin/site/settings', 'SiteSettingsIndex')->name('site.settings.index');
    });





    //// Property Type All Route
    Route::controller(PropertyTypeController::class)->group(function () {
        Route::get('/all/type', 'AllType')->name('all.type');
        Route::get('/add/type', 'AddType')->name('add.type');
        Route::post('/store/type', 'StoreType')->name('store.type');
        Route::get('/edit/type/{id}', 'EditType')->name('edit.type');
        Route::post('/update/type', 'UpdateType')->name('update.type');
        Route::get('/delete/type/{id}', 'DeleteType')->name('delete.type');
    });
}); //// End Group Admin Middleware
