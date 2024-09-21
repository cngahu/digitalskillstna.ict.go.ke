<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SubmissionsController;

use App\Http\Controllers\Backend\AdminUserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/admin/logout', [BackendController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [BackendController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [BackendController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [BackendController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [BackendController::class, 'AdminUpdatePassword'])->name('update.password');



});

require __DIR__.'/auth.php';
Route::middleware(['auth','role:admin'])->group(function() {
    Route::get('/backend/dashboard',[BackendController::class,'BackendDashboard'])->name('backend.dashboard');




    Route::controller(AdminUserController::class)->group(function(){

        Route::get('/add/users','UserAdd')->name('user.add');
        Route::get('/entity-user','entityUserAdd')->name('entity.user');
        Route::get('/all/user','UserView')->name('all.adminuser');
        Route::post('/store/user','UserStore')->name('user.store');
        Route::post('/store-entity-user','entityUserStore')->name('user.entity.store');
        Route::get('/all/users/{id}','UserEdit')->name('user.edit');
        Route::post('/update/{id}','UserUpdate')->name('user.update');
        Route::get('/get-state-departments',  'getStateDepartments')->name('getStateDepartments');
        Route::get('/all/stakeholders','StakeholderView')->name('all.admin.stakeholder');


    });

});





Route::get('/admin/login', [BackendController::class, 'AdminLogin']);
Route::get('/frontend/login', [FrontendController::class, 'FrontendLogin']);
Route::get('/frontend-logout', [FrontendController::class, 'FrontendDestroy'])->name('frontend.logout');
Route::get('/index',[\App\Http\Controllers\SubmissionsController::class,'index'])->name('index');
Route::get('/digital-skills-form/step/{step}', [\App\Http\Controllers\SubmissionsController::class, 'showStep'])->name('business.form.step');
Route::post('/business-form/store', [\App\Http\Controllers\SubmissionsController::class, 'storeStep'])->name('business.form.store');
Route::get('/frontend-logout', [FrontendController::class, 'FrontendDestroy'])->name('frontend.logout');
Route::get('/get-institutions', [SubmissionsController::class, 'getInstitutions'])->name('get-institutions');
Route::get('/success', [SubmissionsController::class, 'success'])->name('business-form.success');
