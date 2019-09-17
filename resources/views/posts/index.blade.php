@extends('layouts.master')

@section('title', 'Welcome')

@section('content')


<div class="col-md-8 blog-main">
@if(!$posts->isEmpty())

@foreach($posts as $post)

@include('layouts.post')

@endforeach

<nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

@else

<div class="blog-post">
        <h2 class="blog-post-title">There are no posts!</h2>

        <p>Please check again sooner rather than later for more exciting content!</p>
      </div><!-- /.blog-post -->

@endif
    </div><!-- /.blog-main -->

@include('layouts.sidebar')

@endsection
