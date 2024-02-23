<?php

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

Route::get('/', [\App\Http\Controllers\AcceuilController::class, 'welcome'])->name('welcome');
Route::get('/about',[\App\Http\Controllers\AcceuilController::class , 'about'])->name('acceuil.about');
Route::get('/classes',[\App\Http\Controllers\AcceuilController::class , 'classes'])->name('acceuil.classes');
Route::get('/contact',[\App\Http\Controllers\AcceuilController::class , 'contact'])->name('acceuil.contact');
Route::get('/admin',[\App\Http\Controllers\AdminController::class , 'admin'])->name('admin.viewAdmin');

Route::get('/adminCoach',[\App\Http\Controllers\AdminController::class , 'adminCoach'])->name('admin.viewAdminCoach');
Route::post('/adminCoach',[\App\Http\Controllers\AdminController::class , 'adminCoachPost']);
Route::delete('/adminCoach/{id}',[\App\Http\Controllers\AdminController::class , 'destroyCoach']);

Route::get('/adminExercices',[\App\Http\Controllers\AdminController::class , 'exercices'])->name('admin.viewExercices');
Route::post('/adminExercices',[\App\Http\Controllers\AdminController::class , 'exercicesPost']);

Route::get('/adminAbonnement',[\App\Http\Controllers\AdminController::class , 'abonnement'])->name('admin.viewAbonnement');
Route::post('/adminAbonnement',[\App\Http\Controllers\AdminController::class , 'abonnementPost']);


Route::get('/adminClient',[\App\Http\Controllers\AdminController::class , 'adminClient'])->name('admin.viewAdminClient');
Route::get('/adminEquip',[\App\Http\Controllers\AdminController::class , 'equipement'])->name('admin.viewEquipement');





