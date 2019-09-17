<div class="blog-post">
    <h2 class="blog-post-title"><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
    <p class="blog-post-meta">{{ $post->getHumanTime() }} by <a href="#">Mark</a></p>

    <p>{{ $post->body }}</p>
</div><!-- /.blog-post -->
