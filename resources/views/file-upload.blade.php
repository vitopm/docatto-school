@extends('layouts.main')

@section('container')
    <h1 class="mb-3 pb-3 border-bottom">Upload</h1>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add picture to gallery') }}</div>

                    <div class="card-body">
                        <form action="{{ url('/file-upload') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="image" class="form-label"> Post image</label>
                                <input type="file" class="form-control" name="image" id="image" {{ old('image') }}>

                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Post Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                {{-- memberikan pesan warning --}}
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="">Post Body</label>
                                <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" value="{{ old('body') }}">{{ old('body') }}</textarea>
                                @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Publish At</label>
                                <input type="date" name="published_at" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at') }}">
                                @error('published_at')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
