<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentregController;
use App\Http\Controllers\PaymentController;
//use App\Http\Controllers\ClassesController;//
use App\Http\Controllers\TeacherdashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TeacherregController;
use App\Http\Controllers\NewsController;


Route::get('/home-old', function () {
    return view('home-old');
});

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/teacher', function () {
    return view('teacher');
});

Route::get('/about', function () {
    return view('about');
});

Route::any('news-website', [NewsController::class, 'news_website'])->name('news-website');
Route::get('timetable-interface', [ScheduleController::class, 'timetable_interface'])->name('news-website');


Route::get('/indexdashboard', function () {
    return view('indexdashboard');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard-interface', function () {
        return view('dashboard-interface');
    })->name('dashboard-interface');

    Route::get('/teacherprofile', function () {
        return view('teacherprofile');
    })->name('teacherprofile');

    Route::get('/dashboard-teacher', function () {
        return view('dashboard-teacher');
    })->name('dashboard-teacher');

    Route::get('schedule', [ScheduleController::class, 'index'])->name('schedule');
    Route::get('schedule-add', [ScheduleController::class, 'create'])->name('schedule-add');
    Route::POST('schedule-store', [ScheduleController::class, 'store'])->name('schedule-store');
    Route::any('schedule-edit/{id}', [ScheduleController::class, 'edit'])->name('schedule-edit');
    Route::any('schedule-update/{id}', [ScheduleController::class, 'update'])->name('schedule-update');
    Route::any('schedule-destroy/{id}', [ScheduleController::class, 'destroy'])->name('schedule-destroy');

    Route::get('studentreg', [StudentregController::class, 'index'])->name('studentreg');
    Route::get('studentreg-add', [StudentregController::class, 'create'])->name('studentreg-add');
    Route::POST('studentreg-store', [StudentregController::class, 'store'])->name('studentreg-store');
    Route::any('studentreg-edit/{id}', [StudentregController::class, 'edit'])->name('studentreg-edit');
    Route::any('studentreg-update/{id}', [StudentregController::class, 'update'])->name('studentreg-update');
    Route::any('studentreg-destroy/{id}', [StudentregController::class, 'destroy'])->name('studentreg-destroy');

    Route::get('teacherreg', [TeacherregController::class, 'index'])->name('teacherreg');
    Route::get('teacherreg-add', [TeacherregController::class, 'create'])->name('teacherreg-add');
    Route::POST('teacherreg-store', [TeacherregController::class, 'store'])->name('teacherreg-store');
    Route::any('teacherreg-edit/{id}', [TeacherregController::class, 'edit'])->name('teacherreg-edit');
    Route::any('teacherreg-update/{id}', [TeacherregController::class, 'update'])->name('teacherreg-update');
    Route::any('teacherreg-destroy/{id}', [TeacherregController::class, 'destroy'])->name('teacherreg-destroy');

    Route::get('payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('payment-add', [PaymentController::class, 'create'])->name('payment-add');
    Route::POST('payment-store', [PaymentController::class, 'store'])->name('payment-store');
    Route::any('payment-edit/{id}', [PaymentController::class, 'edit'])->name('payment-edit');
    Route::any('payment-update/{id}', [PaymentController::class, 'update'])->name('payment-update');
    Route::any('payment-destroy/{id}', [PaymentController::class, 'destroy'])->name('payment-destroy');

    /*Route::get('classes', [ClassesController::class, 'index'])->name('classes');
    Route::get('classes-add', [ClassesController::class, 'create'])->name('classes-add');
    Route::POST('classes-store', [ClassesController::class, 'store'])->name('classes-store');
    Route::any('classes-edit/{id}', [ClassesController::class, 'edit'])->name('classes-edit');
    Route::any('classes-update/{id}', [ClassesController::class, 'update'])->name('classes-update');
    Route::any('classes-destroy/{id}', [ClassesController::class, 'destroy'])->name('classes-destroy');*/

    Route::get('grade', [GradeController::class, 'index'])->name('grade');
    Route::get('grade-add', [GradeController::class, 'create'])->name('grade-add');
    Route::POST('grade-store', [GradeController::class, 'store'])->name('grade-store');
   /* Route::any('grade-edit/{id}', [GradeController::class, 'edit'])->name('grade-edit');
    Route::any('grade-update/{id}', [GradeController::class, 'update'])->name('grade-update');
    Route::any('grade-destroy/{id}', [GradeController::class, 'destroy'])->name('grade-destroy');*/

    Route::get('subject', [SubjectController::class, 'index'])->name('subject');
    Route::get('subject-add', [SubjectController::class, 'create'])->name('subject-add');
    Route::POST('subject-store', [SubjectController::class, 'store'])->name('subject-store');
   /* Route::any('subject-edit/{id}', [SubjectController::class, 'edit'])->name('subject-edit');
    Route::any('subject-update/{id}', [SubjectController::class, 'update'])->name('subject-update');
    Route::any('subject-destroy/{id}', [SubjectController::class, 'destroy'])->name('subject-destroy');*/

    Route::get('teacherdashboard', [TeacherdashboardController::class, 'index'])->name('teacherdashboard');
    Route::get('teacherdashboard-add', [TeacherdashboardController::class, 'create'])->name('teacherdashboard-add');
    Route::POST('teacherdashboard-store', [TeacherdashboardController::class, 'store'])->name('teacherdashboard-store');
    Route::any('teacherdashboard-edit/{id}', [TeacherdashboardController::class, 'edit'])->name('teacherdashboard-edit');
    Route::any('teacherdashboard-update/{id}', [TeacherdashboardController::class, 'update'])->name('teacherdashboard-update');
    Route::any('teacherdashboard-destroy/{id}', [TeacherdashboardController::class, 'destroy'])->name('teacherdashboard-destroy');

    Route::get('news', [NewsController::class, 'index'])->name('news');
    Route::get('news-add', [NewsController::class, 'create'])->name('news-add');
    Route::POST('news-store', [NewsController::class, 'store'])->name('news-store');
    Route::any('news-edit/{id}', [NewsController::class, 'edit'])->name('news-edit');
    Route::any('news-update/{id}', [NewsController::class, 'update'])->name('news-update');
    Route::any('news-destroy/{id}', [NewsController::class, 'destroy'])->name('news-destroy');
});

