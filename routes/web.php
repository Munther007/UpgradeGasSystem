<?php
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity ;

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
    return view('home');
});
Route::get('create' , [CarController::class , 'create'])->name('create');
Route::get('/a' , [DashboardController::class ,'index']);

Route::get('/activity', function () {
    return Activity::all();
});

Route::get('/storage-link', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('update', [UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');
//Route::get('/print-info',[PrintController::class , 'carinfo']);
//Route::get('/prnpriview3',[PrintController::class , 'prnpriview3']);
//Route::get('/generate-pdf', [CarController::class, 'generatePDF']);
Route::get('/generate-pdf', [CarController::class, 'export2']);
Route::get('/getcookies' , [CarController::class , 'getCookies']);

Route::middleware(['auth'])->prefix('cars')->group(function () {
    Route::get('cars/{id}' , [CarController::class , 'show'])->name('show');
    Route::post('cars/{id}' , [CarController::class , 'update'])->name('update');
    Route::delete('cars/{id}' , [CarController::class , 'destroy'])->name('destroy');
//    Route::get('cars/{id}/edit' , [CarController::class , 'show2'])->name('show2');
//    Route::post('cars/{id}/edit' , [CarController::class , 'update'])->name('cars.update');
//    Route::delete('/cars/{id}/edit' , [CarController::class , 'destroy'])->name('cars.destroy');
Route::get('/active' , [CarController::class , 'active'])->name('active');

});
Route::middleware(['auth'])->group(function () {
Route::get('/scan', function () {
    return view('scan');})->name('scan');
Route::post('/scan' , [CarController::class , 'checkBarcode'])->name('check');
});

Route::get('create' , [CarController::class , 'create'])->name('cars.create');
Route::post('/create' , [CarController::class , 'store'])->name('cars.store');
Route::get('/{id}/edit' , [CarController::class , 'show2'])->name('show2');

Route::get('cars/{id}' , [CarController::class , 'show'])->name('cars.show');
Route::post('/create' , [CarController::class])->name('cars.store');
Route::resource('/cars', CarController::class)->parameters([
    'cars' => 'cars.index' ,
    'cars.show' => 'cars.show' ,
]);

Route::resource('users' ,UserController::class)->parameters([
    'users' => 'users.index'
]);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('dashboard' , [DashboardController::class , 'dataChart'])->name('dashboard');

Route::middleware(['auth','admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/',[\App\Http\Livewire\Admin\Admin\AdminIndex::class , 'index'])->name('index');
    Route::get('/user',\App\Http\Livewire\Admin\User\UserIndex::class)->name('user.index')->can('viewAny', \App\Models\User::class);
    Route::get('/role',\App\Http\Livewire\Admin\Role\RoleIndex::class)->name('role.index')->can('viewAny', \App\Models\Role::class);
});
Route::get('/print-users',[PrintController::class , 'index']);
Route::get('/prnpriview',[PrintController::class , 'prnpriview']);
Route::get('users/export/', [UserController::class, 'export']);
Route::get('/print-cars',[PrintController::class , 'index2']);
Route::get('/prnpriview2',[PrintController::class , 'prnpriview2']);
Route::get('cars/export/', [CarController::class, 'export']);


//-----------------

Route::get('/car/create' , [CarController::class , 'create']);
Route::post('/car/create' , [CarController::class , 'store2'])->name('cars.store2');



Route::get('/' , [MessageController::class , 'create'])->name('messages.create');
Route::post('/' , [MessageController::class , 'store'])->name('messages.store');
Route::get('admin/messages' , [MessageController::class , 'index'])->name('messages');
Route::get('messages/{id}' , [MessageController::class , 'show'])->name('messages.show');

