<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\FacebookController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\VocabularyController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('layout.index');
})->name('home');
// profile 
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');
//update profile
Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth');

//vocabulary
Route::get('/vocabulary', [VocabularyController::class, 'index']);

Route::get('/skill', [SkillController::class, 'skillOuterPage'])->name('skill.outerPage');


// Skill Routes
Route::get('/skill/{slug}', [SkillController::class, 'index'])->name('skill.index');

// Course Routes
Route::get('/skill/{skillSlug}/course/{courseSlug}', [CourseController::class, 'showCourse'])->name('course.show');

// Lesson Routes
Route::get('/skill/{skillSlug}/course/{courseSlug}/lesson/{lessonSlug}', [LessonController::class, 'showLesson'])->name('lesson.show');
// Authentication Routes
Route::get('/login', function () {
    return view('layout.login');
})->name('login');



// grammar, vocabulary
Route::get('/{slug}', [SkillController::class, 'grammar'])->name('grammar.page');

//auth google
Route::get('auth/google', [LoginGoogleController::class, 'redirectToGoogle'])->name('auth/google');
Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);

//auth facebook
Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('auth/facebook');
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


// Route hiển thị bài test (load tất cả câu hỏi)
Route::get('/test/1', [TestController::class, 'index'])->name('test.question');

// Route nộp bài

Route::post('/test/submit', [TestController::class, 'submitTest'])->name('test.submit');


//ath database
Route::post('/login', [AuthController::class, 'login'])->name('loginDB');

Route::get('/register/1', function () {
    return view('layout.register');
})->name('registerDB');


//reset password
Route::get('/reset-password/form', [ResetPasswordController::class, 'showForm'])->name('reset-password');
Route::post('/reset-password', [ResetPasswordController::class, 'sendResetLink'])->name('reset-password-post');
Route::get('/reset/after', function () {
    return view('layout.after-reset');
})->name('reset-after');
Route::get('/form-reset-password/{token}', [ResetPasswordController::class, 'showMailForm'])->name('password.reset');
Route::post('/form-reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/send-test-mail', [MailController::class, 'sendTestEmail']);


// comment
Route::post('/lessons/{lessonId}/comments', [CommentController::class, 'store'])
    ->middleware('auth')
    ->name('comments.store');
