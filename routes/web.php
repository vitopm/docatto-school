<?php

use App\Models\Course;
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

    $lecturers = [
        [
            "name" => "Bambang",
            "image" => "https://images2.fanpop.com/image/photos/13400000/Cat-cats-13494223-2304-1728.jpg",
            "role" => "2 years of cat food specialist, currently taking anger management class."
        ],
        [
            "name" => "Johny",
            "image" => "https://images6.fanpop.com/image/photos/34300000/Kitten-cats-34352405-1600-1200.jpg",
            "role" => "Working full time as a math teacher and hide n seek master."
        ],
        [
            "name"=>"Browny",
            "image" => "https://www.europuppy.com/wp-content/uploads/2020/01/xIMG_9625-1.jpg.pagespeed.ic.aB3wA1tr1a.jpg",
            "role" => "Sport lecturer. I love butterfly. NO IM NOT SAD!"
        ],
        [
            "name"=>"Sukehiro",
            "image" => "https://i0.wp.com/wallpapershero.com/wp-content/uploads/sites/13/2014/11/Cat-Sad-Annoyed.jpg?fit=2560%2C1600&ssl=1",
            "role" => "Anger management class lecturer for as long as I could remember. Oh it was the first time I accidentally throw an anvil to my owner."
        ],
        [
            "name"=>"Klarissa",
            "image" => "https://static1.therichestimages.com/wordpress/wp-content/uploads/2015/02/shutterstock_Cute-Dog.jpg",
            "role" => "Music lecturer for 2 months."
        ],
        [
            "name"=>"Bjorn",
            "image" => "https://www.gannett-cdn.com/presto/2019/05/17/USAT/f944f1e2-9719-4da2-b29a-c834269b6d7d-VPC_GRUMPY_CAT_DIED_DESK_THUMB.png?crop=1919,1079,x0,y0&width=1919&height=1079&format=pjpg&auto=webp",
            "role" => "No. (seriously, who is this angry cat?)"
        ]
        
    ];

    $title = "About";

    return view('about', [
        "title" => "About",
        "description"=> "Docatto School has been established since early 2022. Since then, we have produced countless high quality graduates that can play guitar, hide and seek, basketball, and manage their anger (not in the same time). Take a look at our highly competent and internationally certified lecturers below!",
        "lecturers" => $lecturers
    ]);
});

Route::get('/classes', function () {
    return view('classes', [
        'title' => 'Classes',
        "courses" => Course::all()
    ]);
});

// halaman single post

Route::get('classes/{slug}', function($slug){
     return view('class',[
        "title"=> "Single Post",
        "course"=> Course::find($slug)
     ]);
});