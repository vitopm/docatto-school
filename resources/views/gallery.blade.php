@extends('layouts.main')

@section('container')
    <h1 class="mb-3 pb-3 border-bottom">Gallery</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        @foreach($posts as $p)
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{ 'image/'.$p->image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $p->title }}</h5>
                    <p class="card-text">{{ $p->body }}.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Published at {{ date('Y-m-d', strtotime($p->published_at))  }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
