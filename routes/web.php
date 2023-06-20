<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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
    return view('authentication.login');
});

Route::post("login-users", function(){
    return redirect()->route("show-all");
})->middleware('check-login-user');

Route::get("show-all-pages", [EmployeeController::class, "showEmployeesForm"])->name("show-all");
Route::get("show-edit-pages", [EmployeeController::class, "showEditForm"]);
Route::get("show-save-pages", [EmployeeController::class, "showSaveForm"]);
Route::get("show-detail-pages", [EmployeeController::class, "showDetailForm"]);
Route::post("save-employees", [EmployeeController::class, "saveEmployee"]);
