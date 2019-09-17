@extends('layouts.master')

@section('title', htmlspecialchars($post->title))

@section('content')
<div class="col-md-12 blog-main">

<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->getHumanTime() }} by <a href="#">Mark</a></p>

    <p>{{ $post->body }}</p>
</div><!-- /.blog-post -->


</div><!-- /.blog-main -->
@endsection
