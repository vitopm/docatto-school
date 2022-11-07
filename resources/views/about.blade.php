@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <h1 class="border-bottom pb-3 mb-3">About Us</h1>
        <h5>{{ $description}}</h5>
        <img src="https://arkvets.com.au/wp-content/uploads/2017/11/cats_dogs_trimmed_ppt_compress.png" class="img-fluid rounded mx-auto d-block" alt="...">
        <p class="text-center">(these pets above aren't the lecturers)</p>
    </div>
    <h2 class="text-center pt-5 border-top">Here is our exceptional lecturers!</h2>
    @foreach($lecturers as $lecturer)
        <div class="mb-5">
            <h3 class="mb-4">{{ $lecturer["name"]}}</h3>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <img src="{{$lecturer['image']}}" alt="" width="200px">
                    </div>
                    <div class="col">
                        <h5>{{ $lecturer["role"]}}</h5>
                    </div>
                </div>
            </div>
        </div> 
    @endforeach

    <h6 class="text-center mb-5 mt-5">While you're down here, take a look at the <a href="/classes">courses</a> we provide.</h6>
@endsection