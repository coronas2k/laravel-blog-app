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
                <form class="needs-validation" method="POST" action="{{ action('PostsController@store') }}" novalidate>
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror"
                            id="createPostTitle" placeholder="Post Title" name="title" autofocus required>
                        @error('title')
                        @include('layouts.error')
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Post</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" id="body" rows="9"
                            name="body" required></textarea>
                        @error('body')
                        @include('layouts.error')
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Create Post</button>
                    </div>
            </div>
            </form>
            <script>
                (function () {
                    'use strict';
                    window.addEventListener('load', function () {
                        // Fetch all the forms
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop
                        var validation = Array.prototype.filter.call(forms, function (form) {
                            form.addEventListener('submit', function (event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();

            </script>
        </div>
    </div><!-- /.blog-post -->

</div><!-- /.blog-main -->
@endsection
