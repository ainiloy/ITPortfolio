<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Courses2Controller;
use App\Http\Controllers\Projects2Controller;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Contact2Controller;
use App\Http\Controllers\LoginController;

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

// Front End
Route::get("/", [HomeController::class, 'HomeIndex']);
Route::post('/contactSend', [HomeController::class, 'ContactSend']);
Route::get('/Courses',[CoursesController::class, 'CoursePage']);
Route::get('/Projects',[ProjectsController::class, 'ProjectPage']);
Route::get('/Contact', [ContactController::class, 'ContactPage']);

// Admin

Route::get("/admin", [AdminController::class, 'adminIndex'])->middleware('loginCheck');
Route::get("/visitor", [VisitorController::class, 'VisitorIndex'])->middleware('loginCheck');

// Services
Route::get("/service", [ServiceController::class, 'ServiceIndex'])->middleware('loginCheck');
Route::get("/getServicesData", [ServiceController::class, 'getServiceData'])->middleware('loginCheck');
Route::post("/ServiceDelete", [ServiceController::class, 'ServiceDelete'])->middleware('loginCheck');
Route::post("/ServiceDetails", [ServiceController::class, 'getServiceDetails'])->middleware('loginCheck');
Route::post("/ServiceUpdate", [ServiceController::class, 'ServiceUpdate'])->middleware('loginCheck');
Route::post("/ServiceAdd", [ServiceController::class, 'ServiceAdd'])->middleware('loginCheck');


//Course
Route::get("/courses", [Courses2Controller::class, 'CoursesIndex'])->middleware('loginCheck');
Route::get("/getCoursesData", [Courses2Controller::class, 'getCoursesData'])->middleware('loginCheck');
Route::post("/CoursesDelete", [Courses2Controller::class, 'CoursesDelete'])->middleware('loginCheck');
Route::post("/CoursesDetails", [Courses2Controller::class, 'getCoursesDetails'])->middleware('loginCheck');
Route::post("/CoursesUpdate", [Courses2Controller::class, 'CoursesUpdate'])->middleware('loginCheck');
Route::post("/CoursesAdd", [Courses2Controller::class, 'CoursesAdd'])->middleware('loginCheck');

// Admin Panel Projects Management
Route::get('/project', [Projects2Controller::class, 'ProjectIndex'])->middleware('loginCheck');
Route::get('/getProjectData',[Projects2Controller::class, 'getProjectData'])->middleware('loginCheck');
Route::post('/ProjectDetails',[Projects2Controller::class, 'getProjectDetails'])->middleware('loginCheck');
Route::post('/ProjectDelete',[Projects2Controller::class, 'ProjectDelete'])->middleware('loginCheck');
Route::post('/ProjectUpdate', [Projects2Controller::class, 'ProjectUpdate'])->middleware('loginCheck');
Route::post('/ProjectAdd', [Projects2Controller::class, 'ProjectAdd'])->middleware('loginCheck');

//Review
Route::get('/review', [ReviewController::class, 'ReviewIndex'])->middleware('loginCheck');
Route::get('/getReviewData', [ReviewController::class, 'getReviewData'])->middleware('loginCheck');
Route::post('/ReviewDetails', [ReviewController::class, 'getReviewDetails'])->middleware('loginCheck');
Route::post('/ReviewDelete', [ReviewController::class, 'ReviewDelete'])->middleware('loginCheck');
Route::post('/ReviewUpdate', [ReviewController::class, 'ReviewUpdate'])->middleware('loginCheck');
Route::post('/ReviewAdd', [ReviewController::class, 'ReviewAdd'])->middleware('loginCheck');


// Contacts
Route::get('/contacts', [Contact2Controller::class, 'ContactIndex'])->middleware('loginCheck');
Route::get('/getContactData',  [Contact2Controller::class, 'getContactData'])->middleware('loginCheck');
Route::post('/ContactDelete', [Contact2Controller::class, 'ContactDelete'])->middleware('loginCheck');

//LogIn

Route::get('/login', [LoginController::class, 'LoginIndex']);
Route::post('/onLogin', [LoginController::class, 'onLogin']);
Route::get('/Logout', [LoginController::class, 'onLogout']);
