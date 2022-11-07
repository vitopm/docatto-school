@extends('layouts.main')

@section('container')
    <h1 class="mb-3 pb-3 border-bottom">Our Classes</h1>
    @foreach($courses as $course)
        <div class="mb-5">
            <h2>{{$course["name"]}}</h2>
            <p>{{$course["description"]}}</p>
            @if($course["availability"]==="N")
                <button type="button" class="btn btn-outline-dark" disabled>Class full</button>
            @else
                <button type="button" class="btn btn-outline-dark">Apply here!</button>
            @endif
            <!-- <button type="button" class="btn btn-outline-dark" {{($course['availability']==='N')?'disabled':''}}>{{($course['availability']==='Y')?'Apply here!':'Class full'}}</button> -->
        </div>
    @endforeach 
@endsection