<?php

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
    $courses = [
        [
            "name"=> "Cooking class",
            'slug'=>"cooking-class",
            "description" => "Want to become a better home chef or chase even bigger culinary dreams? Sur La Table offers the expert instruction and convenient class options you’ll need to get there. Whether you want to start with the basics to improve essential kitchen techniques or learn how to prepare a Michelin-star-worthy dish, you can find Sur La Table cooking classes to suit your needs. We have options for every age and interest, including couples cooking classes and culinary classes for kids.
            You get to choose the class that works best for you. Enjoy the fun and excitement of an in-store lesson or boost your skills from the comfort of your own kitchen with online cooking classes. You can even host a private cooking class as a fun group activity. Learn more about Sur La Table cooking class options to decide which one is the right fit.
            ",
            "availability"=> "Y"
        ],
        [
            "name" => "Math class",
            'slug' => 'math-class',
            "description"=> "Math is the study of numbers, shapes, and logic. It’s using fractions to double a recipe. It’s applying theoretical reasoning and patterns to understand the movements of atoms. It’s the foundation of every system we have, from money to medicine.

            Math is an academic discipline and an everyday necessity. Whether you’re calculating how long a trip will take or doing advanced data analysis to grow your business, understanding math helps you get ahead.
            
            Innovations in math have powered real-world advancements across society. Engineers, scientists, and medical researchers make the calculations that drive discoveries, from new lifesaving medicines to sustainable building materials.
            
            Math is also fascinating and rewarding in its own right. Professional and amateur mathematicians dive deeply into theoretical subfields such as number theory, learning about previously discovered quantitative concepts and developing new mathematical ideas along the way.",
            "availability" => "N"
        ],
        [
            "name" => "Sport class",
            'slug'=> "sport-class",
            "description" => "Sports are physical activities where people compete as individuals or as part of a team to win or reach an ultimate goal. They can be casual—such as a pick-up game of basketball in a park—or organized, like a professional National Football League (NFL) game. Sports are played for many reasons, including to improve physical fitness, financial gain, social interaction, stress relief, and entertainment. Archeological evidence suggests that almost every ancient culture enjoyed some sort of sports. Through the years, modern society has made it so that people of all ages, genders, and abilities can participate in sports too. For example, parasports are sports that have been modified so that people with disabilities can play, such as wheelchair tennis.",
            "availability" =>"Y"
        ],
        [
            "name" => "Music class",
            "slug" =>"music-class",
            "description"=> "
            This course introduces students to the art and science of listening to music with engagement and understanding, presuming no prior musical knowledge or experience. Students will learn how to listen to music actively and critically, with emphasis on instrumentation, musical form, function, performance practices, cultural influences, and aesthetics. Examples from Western and world music will be used to engage students in discussion and study. Introduction to music reading and elementary music theory: notation, terminology, key and time signatures, rhythm, meter, major scales, diatonic and chromatic intervals and triads and inversions.
             
            ",
            "availability"=> "Y"
        ],
        [
            "name" => "Anger management class",
            "slug"=> "anger-management-class",
            "description"=> "Anger is a major problem for those concerned, those around them and the professionals trying to help. It can wreck the enjoyment potential of people's lives, lead to serious relationship break-ups and, in extreme cases, serious criminal offences. Trying to intervene can be frustrating and worrying.

            This acclaimed course is based on the only anger-management book on the “Books on Prescription” scheme, namely Overcoming Anger and Irritability (Constable and Robinson) and written by the same author (William Davies). The course aims to provide you with the most effective psychological interventions to help angry, irritable and violent people to change.",
            "availability"=> "N"
        ]

    ];

    return view('classes', [
        'title' => 'Classes',
        "courses" => $courses
    ]);
});

// halaman single post

Route::get('classes/{slug}', function($slug){

    $courses = [
        [
            "name"=> "Cooking class",
            'slug'=>"cooking-class",
            "description" => "Want to become a better home chef or chase even bigger culinary dreams? Sur La Table offers the expert instruction and convenient class options you’ll need to get there. Whether you want to start with the basics to improve essential kitchen techniques or learn how to prepare a Michelin-star-worthy dish, you can find Sur La Table cooking classes to suit your needs. We have options for every age and interest, including couples cooking classes and culinary classes for kids.
            You get to choose the class that works best for you. Enjoy the fun and excitement of an in-store lesson or boost your skills from the comfort of your own kitchen with online cooking classes. You can even host a private cooking class as a fun group activity. Learn more about Sur La Table cooking class options to decide which one is the right fit.
            ",
            "availability"=> "Y"
        ],
        [
            "name" => "Math class",
            'slug' => 'math-class',
            "description"=> "Math is the study of numbers, shapes, and logic. It’s using fractions to double a recipe. It’s applying theoretical reasoning and patterns to understand the movements of atoms. It’s the foundation of every system we have, from money to medicine.

            Math is an academic discipline and an everyday necessity. Whether you’re calculating how long a trip will take or doing advanced data analysis to grow your business, understanding math helps you get ahead.
            
            Innovations in math have powered real-world advancements across society. Engineers, scientists, and medical researchers make the calculations that drive discoveries, from new lifesaving medicines to sustainable building materials.
            
            Math is also fascinating and rewarding in its own right. Professional and amateur mathematicians dive deeply into theoretical subfields such as number theory, learning about previously discovered quantitative concepts and developing new mathematical ideas along the way.",
            "availability" => "N"
        ],
        [
            "name" => "Sport class",
            'slug'=> "sport-class",
            "description" => "Sports are physical activities where people compete as individuals or as part of a team to win or reach an ultimate goal. They can be casual—such as a pick-up game of basketball in a park—or organized, like a professional National Football League (NFL) game. Sports are played for many reasons, including to improve physical fitness, financial gain, social interaction, stress relief, and entertainment. Archeological evidence suggests that almost every ancient culture enjoyed some sort of sports. Through the years, modern society has made it so that people of all ages, genders, and abilities can participate in sports too. For example, parasports are sports that have been modified so that people with disabilities can play, such as wheelchair tennis.",
            "availability" =>"Y"
        ],
        [
            "name" => "Music class",
            "slug" =>"music-class",
            "description"=> "
            This course introduces students to the art and science of listening to music with engagement and understanding, presuming no prior musical knowledge or experience. Students will learn how to listen to music actively and critically, with emphasis on instrumentation, musical form, function, performance practices, cultural influences, and aesthetics. Examples from Western and world music will be used to engage students in discussion and study. Introduction to music reading and elementary music theory: notation, terminology, key and time signatures, rhythm, meter, major scales, diatonic and chromatic intervals and triads and inversions.
             
            ",
            "availability"=> "Y"
        ],
        [
            "name" => "Anger management class",
            "slug"=> "anger-management-class",
            "description"=> "Anger is a major problem for those concerned, those around them and the professionals trying to help. It can wreck the enjoyment potential of people's lives, lead to serious relationship break-ups and, in extreme cases, serious criminal offences. Trying to intervene can be frustrating and worrying.

            This acclaimed course is based on the only anger-management book on the “Books on Prescription” scheme, namely Overcoming Anger and Irritability (Constable and Robinson) and written by the same author (William Davies). The course aims to provide you with the most effective psychological interventions to help angry, irritable and violent people to change.",
            "availability"=> "N"
        ]

    ];

    $new_class=[];
    
    foreach($courses as $course){
        if($course['slug']=== $slug){
            $new_class = $course;
        }   
    }

     return view('class',[
        "title"=> "Single Post",
        "class"=> $new_class
     ]);
});