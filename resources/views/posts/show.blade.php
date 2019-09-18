@extends('layouts.master')

@section('title', htmlspecialchars($post->title))

@section('content')
<div class="col-md-12 blog-main">

<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->getHumanTime() }} by <a href="#">Mark</a></p>

    <p>{{ $post->body }}</p>
</div><!-- /.blog-post -->

@if(!$post->comments->isEmpty())
<div class="card my-5">
  <div class="card-header">
    Comments
  </div>
@foreach($post->comments->sortByDesc('created_at') as $comment)
<div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{ $comment->body }}</p>
      <footer class="blockquote-footer">Posted <cite title="Source Title">{{ $comment->getHumanTime() }}</cite></footer>
    </blockquote>
  </div>
@endforeach
</div>
@endif

</div><!-- /.blog-main -->
@endsection
