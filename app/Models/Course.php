<?php

namespace App\Models;


class Course 
{
    static $courses = [
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

    public static function all(){
        return collect(self::$courses);
    }

    public static function find($slug){
        $courses = static::all();
        // $course=[];
        // foreach($courses as $c){
        //     if($c['slug']=== $slug){
        //         return $course = $c;
        //     }   
        // }
        return $courses->firstWhere('slug', $slug);
    }

}
