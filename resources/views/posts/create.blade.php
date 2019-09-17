@extends('layouts.master')

@section('title', 'New Post')

@section('content')
<div class="col-md-12 blog-main">

    <div class="blog-post">
            <div class="card mt-3 card-square">
                <div class="card-header">
                    Create a Post
                </div>
                <div class="card-body">
                <form method="POST" action="{{ action('PostsController@store') }}">
                @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="createPostTitle" placeholder="Post Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="body">Post</label>
                        <textarea class="form-control" id="body" rows="9" name="body"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Create Post</button>
                    </div>
                </div>
                </form>
            </div>
    </div><!-- /.blog-post -->

</div><!-- /.blog-main -->
@endsection
