@extends('layouts.main')

@section('container')
    <h1 class="mb-3 pb-3 border-bottom">Our Classes</h1>
    @foreach($classes as $class)
        <div class="mb-5">
            <a href="/classes/{{$class["slug"]}}" >
                <h2>{{$class["name"]}}</h2>
            </a>
            <p>{{$class["description"]}}</p>
            
        </div>
    @endforeach 
@endsection