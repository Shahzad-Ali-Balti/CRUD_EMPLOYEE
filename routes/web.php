<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/',[EmployeeController::class,'index'])->name('employees.index');

Route::get('/employees/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employees/store', [EmployeeController::class,'store'])
    ->name('employee.store');
Route::get('/employees/{id}/edit', [EmployeeController::class,'edit'])
    ->name('employee.edit');
Route::put('/employees/{id}/update', [EmployeeController::class,'update'])
    ->name('employee.update');
Route::delete('/employees/{id}/delete', [EmployeeController::class,'destroy'])
    ->name('employee.delete');
Route::get('/employees/{id}/show', [EmployeeController::class,'show']);
Route::get('/storage/employees/{filename}', function ($filename) {
    $path = storage_path('/storage/app/public/employees/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('employees.image');
    