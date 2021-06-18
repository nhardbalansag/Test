<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\web\cms\{StudentController, MainController, SubjectController, StudentSubjectController};

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

Route::get('/', [MainController::class, 'index'])->name('studentlist');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('student')->group(function () {
    Route::get('edit-student', [StudentController::class, 'editStudent'])->name('editStudent');
    Route::get('create-subject', [SubjectController::class, 'createSubject'])->name('createSubject');
    Route::get('add-subject-student', [StudentSubjectController::class, 'addsubjectstudent'])->name('addsubjectstudent');
});
