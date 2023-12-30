<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\JobpageController;
use App\Http\Controllers\Frontend\ResumeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Backend\RecentJobController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ApplyJobController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('user-registration', [AuthController::class, 'registration'])->name('user.registration');

Route::post('user-store', [AuthController::class, 'store'])->name('user.store');

Route::get('/login', [AuthController::class,'loginPage'])->name('login');

Route::post('user-login', [AuthController::class,'postlogin'])->name('user.login');


Route::group(['middleware' => 'userType:user'], function () {






Route::get('/apply/{jobId}', [ApplyJobController::class, 'showApplyForm'])->name('job.applyForm');
Route::post('/apply/{jobId}', [ApplyJobController::class, 'apply'])->name('job.apply');

Route::get('/view-resume', [ApplyJobController::class, 'viewApplications'])->name('job.view.resume');


Route::get('/User/logout', [AuthController::class, 'logout'])->name('user.logout');

Route::get('/profile', [AuthController::class, 'profile'])->name('profile.view');


Route::get('/edit-profile', [ResumeController::class, 'edit'])->name('edit-profile');
Route::post('/update-profile', [ResumeController::class, 'update'])->name('update-profile');


Route::get('/resume', [ResumeController::class, 'resume'])->name('resume');




});



Route::get('/admin/login', [UserController::class, 'loginForm'])->name('admin.login');

Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/logout',[UserController::class, 'logout'])->name('admin.logout');
    Route::get('/admin', [HomeController::class, 'home'])->name('dashboard');

    Route::get('/users',[UserController::class, 'list'])->name('users.list');
    Route::put('/users/approve/{id}', [UserController::class, 'approve'])->name('users.approve');
    Route::put('/users/reject/{id}', [UserController::class, 'reject'])->name('users.reject');

    Route::get('/company',[UserController::class, 'companyList'])->name('company.list');
    Route::get('/users/create',[UserController::class, 'createForm'])->name('users.create');

    Route::post('/users/store',[UserController::class, 'store'])->name('users.store');

    Route::get('Admin/Recentjobpost', [RecentJobController::class, 'recentjob'])->name('recent.job');

    Route::post('Admin/Recentjobpost/store', [RecentJobController::class, 'jobstore'])->name('job.store');

    Route::get('Admin/Recentjoblist', [RecentJobController::class, 'joblist'])->name('recent.joblist');

    Route::get('/category/list', [CategoryController::class, 'list'])->name('category.list');

    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('/category/form', [CategoryController::class, 'createForm'])->name('category.form');

    Route::get('/manage-job',[RecentJobController::class, 'managejob'])->name('manage.job');

    Route::put('/jobPost/approve/{id}', [RecentJobController::class, 'jobApprove'])->name('job_post.approve');

    Route::put('/jobPost/reject/{id}', [RecentJobController::class, 'jobReject'])->name('job_post.reject');



});


Route::group(['middleware' => 'userType:company'], function () {

    Route::get('/employee-dashboard', [EmployeeController::class, 'employeeDashboard'])->name('employee.dashboard');

    Route::get('/employee-dashboard/updateprofile', [EmployeeController::class, 'updateprofile'])->name('employee.profile');

    Route::post('/employee-dashboard/updateprofile/store', [EmployeeController::class, 'einfostore'])->name('employee.profilestore');

    Route::get('/employee-dashboard/createjob', [JobController::class, 'createjob'])->name('employee.createjob');

    Route::post('/employee-dashboard/createjob/store', [JobController::class, 'store'])->name('employee.createjob.store');

    Route::get('/createjob/viewjob', [JobController::class, 'view'])->name('createjob.view');
    Route::get('/quiz-list', [JobController::class, 'create_quiz'])->name('quiz.list');
    Route::get('/quiz-create/{id}', [JobController::class, 'create_mcq'])->name('quiz.create');
    Route::post('/quiz-store/{id}', [JobController::class, 'store_mcq'])->name('quiz.store');




    Route::get('/company/applications', [ApplyJobController::class, 'viewCompanyApplications'])->name('job.view.company.applications');


Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});



Route::get('/', [HomepageController::class, 'home'])->name('homepage');

Route::get('/jobs/{categoryId?}', [JobpageController::class, 'Job'])->name('home.job');


Route::get('/job_details/{id}', [RecentJobController::class, 'JobDetails'])->name('job.details');

Route::get('/job_post/{id}', [JobpageController::class, 'jobpost'])->name('job.post');
Route::get('/online-test/{id}', [JobpageController::class, 'test'])->name('online.test');
Route::post('online-test/{id}', [JobpageController::class, 'submitTest'])->name('submit.test');
Route::get('result/{id}', [JobpageController::class, 'result'])->name('test.result');








