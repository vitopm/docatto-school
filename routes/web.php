<?php

use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Models\Lecturer;
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
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {

    return view('about', [
        "title" => "About",
        "description"=> "Docatto School has been established since early 2022. Since then, we have produced countless high quality graduates that can play guitar, hide and seek, basketball, and manage their anger (not in the same time). Take a look at our highly competent and internationally certified lecturers below!",
        "lecturers" => Lecturer::all()  
    ]);
});

// halaman all course

Route::get('/classes', [CourseController::class, 'allCourse']);

// halaman single post

Route::get('classes/{slug}', [CourseController::class, 'detailCourse']);