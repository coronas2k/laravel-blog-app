@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<section>
<div class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Welcome to my blog!</h1>
        <p class="lead text-muted">This is an exciting introduction into the world of Laravel!</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Twitter</a>
            <a href="#" class="btn btn-secondary my-2">Instagram</a>
        </p>
    </div>
    </div>
</section>
@if(!$posts->isEmpty())

@foreach($posts as $post)
<div class="album py-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-2 shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4">{{ $post->title }}</h3>
                        <p class="card-text">{{ $post->body }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">Posted {{ $post->dateToUTC() }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4">There are no posts!</h3>
                        <p class="card-text">Please check again sooner rather than later for more exciting content!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
