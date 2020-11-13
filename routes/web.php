<?php

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

Route::get('companies/all',"\App\Http\Controllers\CompanyController@getCompanies")->name("companies.all");
Route::post('companies/add',"\App\Http\Controllers\CompanyController@createCompany")->name("companies.create");
Route::post('companies/delete/{id}',"\App\Http\Controllers\CompanyController@deleteCompany")->name("companies.delete");
Route::get('companies/edit/{company_id}',"\App\Http\Controllers\CompanyController@editCompany")->name("companies.edit");
Route::get('companies/save',"\App\Http\Controllers\CompanyController@saveCompany")->name("companies.save");

Route::get('employees/all',"\App\Http\Controllers\EmployeeController@getEmployees")->name("employees.all");
Route::post('employees/add',"\App\Http\Controllers\EmployeeController@createEmployee")->name("employees.create");
Route::post('employees/delete/{id}',"\App\Http\Controllers\EmployeeController@deleteEmployee")->name("employees.delete");
Route::get('employees/edit/{employee_id}',"\App\Http\Controllers\EmployeeController@editEmployee")->name("employees.edit");
Route::get('employees/save',"\App\Http\Controllers\EmployeeController@saveEmployee")->name("employees.save");



Route::get('/', function () {
    return view('welcome');
});
