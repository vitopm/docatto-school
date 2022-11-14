@extends('layouts.main')

@section('container')
    <h1 class="mb-3 pb-3 border-bottom">Our Courses</h1>
    @foreach($courses as $course)
        <div class="mb-5">
            <a href="/classes/{{$course["slug"]}}" >
                <h2>{{$course["name"]}}</h2>
            </a>
            <p>{{$course["description"]}}</p>
            
        </div>
    @endforeach 
@endsection