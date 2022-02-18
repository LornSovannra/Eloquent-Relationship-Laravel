<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/user", [UserController::class, "Home"]);
Route::post("/user", [UserController::class, "Create"])->name("create_user");

Route::get("/role", [RoleController::class, "Home"]);
Route::post("/role", [RoleController::class, "Create"])->name("create_role");

Route::get("/role-user", [RoleUserController::class, "Home"]);
Route::get("/create-role-user", [RoleUserController::class, "Create"])->name("create_role");
Route::post("/role-user", [RoleUserController::class, "Save"])->name("save_role");
Route::post("/delete-role-user/{user_id}/{role_id}", [RoleUserController::class, "Delete"])->name("delete_role");

Route::get("/company", [CompanyController::class, "Home"]);
Route::post("/company", [CompanyController::class, "Create"]) -> name("create_company");

Route::get("/employee", [EmployeeController::class, "Home"]);
Route::post("/employee", [EmployeeController::class, "Create"])-> name("create_employee");