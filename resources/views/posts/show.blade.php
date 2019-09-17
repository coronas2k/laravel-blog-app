@extends('layouts.master')

@section('title', htmlspecialchars($post->title))

@section('content')
<div class="col-md-12 blog-main">

@include('layouts.post')

</div><!-- /.blog-main -->
@endsection
