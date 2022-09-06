<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\RolesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/corporate_training', function () {
    return view('corporate_training');
})->name('corporate_training');
Route::get('/customer_care', function () {
    return view('customer_care');
})->name('customer_care');
Route::get('/digital_marketing', function () {
    return view('digital_marketing');
})->name('digital_marketing');
Route::get('/employee_assistance', function () {
    return view('employee_assistance');
})->name('employee_assistance');
Route::get('/executive_search', function () {
    return view('executive_search');
})->name('executive_search');
Route::get('/hr_policies', function () {
    return view('hr_policies');
})->name('hr_policies');
Route::get('/hr_skills', function () {
    return view('hr_skills');
})->name('hr_skills');
Route::get('/labour_laws', function () {
    return view('labour_laws');
})->name('labour_laws');
Route::get('/leadership_training', function () {
    return view('leadership_training');
})->name('leadership_training');
Route::get('/performance_management', function () {
    return view('performance_management');
})->name('performance_management');
Route::get('/project_management', function () {
    return view('project_management');
})->name('project_management');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/open_jobs', function () {
    return view('job_vacancies');
})->name('job_vacancies');

Route::prefix('/admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/roles', RolesController::class)->names([
        'index' => 'roles_index',
        'store' => 'roles_store',
        'update' => 'roles_update',
        'destroy' => 'roles_delete'
    ]);
    Route::get('/users',[ AdminController::class, 'getUsers'])->name(
        'users_index',
        
    );
    Route::resource('/employees', EmployeesController::class)->names([
        'index' => 'emp_index',
        'store' => 'emp_store'
    ]);
    Route::resource('/jobs', JobsController::class)->names([
        'index' => 'jobs_index',
        'store' => 'jobs_store'
    ]);
    Route::resource('/companies', CompaniesController::class)->names([
        'index' => 'comp_index',
        'store' => 'comp_store'
    ]);
});

Route::prefix('/user')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/employees', EmployeesController::class)->names([
        'index' => 'usr_index',
        'store' => 'usr_store'
    ]);
    Route::resource('/vacancies', JobsController::class)->names([
        'index' => 'jobs_index',
        'store' => 'jobs_store'
    ]);
    Route::resource('/companies', CompaniesController::class)->names([
        'index' => 'comp_index',
        'store' => 'comp_store'
    ]);
});
require __DIR__ . '/auth.php';
