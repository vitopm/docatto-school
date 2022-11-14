

@extends('layouts.main')

@section('container')
    <div class="mt-5 mb-5">
        <h2>{{ $course["name"] }}</h2>
        <p>{{ $course["description"] }}</p>
        @if($course["availability"]==="N")
            <button type="button" class="btn btn-outline-dark" disabled>Class full</button>
        @else
            <button type="button" class="btn btn-outline-dark">Apply here!</button>
        @endif
    </div>

    <a href="/classes">Back to classes list</a>
@endsection