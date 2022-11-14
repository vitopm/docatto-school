<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function allCourse(){
        return view('classes', [
            'title' => 'Classes',
            "courses" => Course::all()
        ]);
    }

    public function detailCourse($slug){
        return view('class',[
            "title"=> "Single Post",
            "course"=> Course::find($slug)
         ]);
    }
}
