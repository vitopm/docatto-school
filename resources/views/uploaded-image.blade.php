@extends('layouts.main')

@section('container')
    <h1 class="mb-3 pb-3 border-bottom">Upload</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$imageName}} successfully uploaded!</div>

                    <div class="card-body">
                        <p>Title: {{ $title }}</p>
                        <p>Body: {{ $body }}</p>
                        <p>Published at: {{ $published_at }}</p>
                        
                        <!-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif -->
                        <img class= "img-fluid"src="{{ $imagePath }}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <form action="{{ url('/file-upload') }}" method="post" enctype="multipart/form-data">
        @csrf


        <button type="submit" class="btn-primary-my-2">Upload</button>

    </form> --}}

@endsection
