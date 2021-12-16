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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ManagerController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/home', HomeController::class)->name('home');

    Route::get('/about/promolife', [AboutController::class, 'promolife'])->name('about_promolife');
    Route::get('/about/bhtrade', [AboutController::class, 'bh'])->name('about_trade');
    Route::get('/about/promodreams', [AboutController::class, 'promodreams'])->name('about_promodreams');
    Route::get('/about/trademarket', [AboutController::class, 'trademarket'])->name('about_trademarket');

    Route::get('/company', [CompanyController::class, 'index'])->name('company');
    Route::get('company/getPosition/{id}', [CompanyController::class, 'getPositions']);
    Route::get('company/getEmployees', [CompanyController::class, 'getAllEmployees']);
    Route::get('company/getEmployeesByOrganization/{organization}', [CompanyController::class, 'getEmployeesByOrganization']);
    Route::get('company/getEmployeesByDepartment/{department}', [CompanyController::class, 'getEmployeesByDepartment']);

    Route::get('/aniversary/aniversary', [AniversaryController::class, 'aniversary'])->name('aniversary');
    Route::get('/aniversary/birthday', [AniversaryController::class, 'birthday'])->name('birthday');

    Route::get('/month', MonthController::class)->name('month');
    Route::get('/manual', ManualController::class)->name('manual');
    Route::get('/access', AccessController::class)->name('access');
    Route::get('/folder', FolderController::class)->name('folder');
    Route::get('/work', WorkController::class)->name('work');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('departments', DepartmentsController::class);
        Route::resource('position', PositionController::class);
        Route::resource('manager', ManagerController::class);
        Route::resource('organization', OrganizationController::class);
    });

    Route::resource('communiques', CommuniqueController::class);
    Route::resource('request', RequestController::class)->except('show');
    Route::get('request/authorize-manager', [RequestController::class, 'authorizeRequestManager'])->name('request.authorizeManager');
    Route::get('request/show-all', [RequestController::class, 'showAll'])->name('request.showAll');

    Route::get('dropdownlist/getPosition/{id}', [EmployeeController::class, 'getPositions']);
    Route::get('manager/getPosition/{id}', [ManagerController::class, 'getPosition']);
    Route::get('manager/getEmployee/{id}', [ManagerController::class, 'getEmployee']);

    Route::get('test/export/', [RequestController::class, 'export']);
});
