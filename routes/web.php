<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AniversaryController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\CommuniqueController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;

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
    return redirect('/home');
});

Auth::routes();

//=Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/home', HomeController::class)->name('home');
    Route::get('/communique', [CommuniqueController::class, 'index'])->name('communique.index');
    Route::get('/communique/create', [CommuniqueController::class, 'create'])->middleware('can:communique.create')->name('communique.create');
    Route::post('/communique', [CommuniqueController::class, 'store'])->name('communique.store');

    Route::get('/about/promolife', [AboutController::class, 'promolife'])->name('about_promolife');

    Route::get('/about/bhtrade', [AboutController::class, 'bh'])->name('about_trade');
    Route::get('/about/promodreams', [AboutController::class, 'promodreams'])->name('about_promodreams');
    Route::get('/about/trademarket', [AboutController::class, 'trademarket'])->name('about_trademarket');

    Route::get('/company', CompanyController::class)->name('company');

    Route::get('/aniversary/aniversary', [AniversaryController::class, 'aniversary'])->name('aniversary');
    Route::get('/aniversary/birthday', [AniversaryController::class, 'birthday'])->name('birthday');

    Route::get('/month', MonthController::class)->name('month');
    Route::get('/manual', ManualController::class)->name('manual');
    Route::get('/access', AccessController::class)->name('access');
    Route::get('/folder', FolderController::class)->name('folder');
    Route::get('/request', [RequestController::class, 'index'])->name('request');
    Route::get('/work', WorkController::class)->name('work');
});


Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/users', [UserController::class, 'index'])->name('admin.users');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/users/create', [UserController::class, 'create'])->name('admin.user.create');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->post('/admin/users/create', [UserController::class, 'store'])->name('admin.user.store');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.user.update');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');


Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/contacts/create', [AdminController::class, 'contactCreate'])->name('admin.contact.create');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->post('/admin/contacts/create', [AdminController::class, 'contactStore'])->name('admin.contact.store');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/contacts/{contact}/edit', [AdminController::class, 'contactEdit'])->name('admin.contact.edit');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->put('/admin/contacts/{contact}', [AdminController::class, 'contactUpdate'])->name('admin.contact.update');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->delete('/admin/contacts/{contact}', [AdminController::class, 'contactDestroy'])->name('admin.contact.destroy');


Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/roles', [RoleController::class, 'index'])->name('admin.roles');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/roles/create', [RoleController::class, 'create'])->name('admin.roles.create');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->post('/admin/roles/create', [RoleController::class, 'store'])->name('admin.roles.store');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/roles/{role}/edit', [RoleController::class, 'edit'])->name('admin.roles.edit');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->put('/admin/roles/{role}', [RoleController::class, 'update'])->name('admin.roles.update');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->delete('/admin/roles/{role}', [RoleController::class, 'destroy'])->name('admin.roles.destroy');


Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/employees', [EmployeeController::class, 'index'])->name('admin.employee');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employee.create');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->post('/admin/employees/create', [EmployeeController::class, 'store'])->name('admin.employee.store');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->get('/admin/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('admin.employee.edit');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->put('/admin/employees/{employee}', [EmployeeController::class, 'update'])->name('admin.employee.update');
Route::middleware(['auth:sanctum', 'verified', 'can:admin.users'])->delete('/admin/employees/{employee}', [EmployeeController::class, 'destroy'])->name('admin.employee.destroy');
