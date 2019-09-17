@extends('layouts.master')

@section('title', $postTitleEscaped)

@section('content')
<div class="col-md-12 blog-main">

<div class="blog-post">
        <h2 class="blog-post-title">{{ $postTitle }}</h2>
        <p class="blog-post-meta">{{ $postRealTime }} by <a href="#">Mark</a></p>

        <p>{{ $postBody }}</p>
      </div><!-- /.blog-post -->

</div><!-- /.blog-main -->
@endsection
