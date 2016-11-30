@foreach ($posts as $post)
    <div class="post-preview">
        <h2 class="post-title">
            <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
        </h2>
        <p class="post-meta">
            {{ $post->published_at->diffForHumans() }}
            @unless ($post->tags->isEmpty())
                in {!! implode(', ', $post->tagLinks()) !!}
            @endunless
            &#183; 阅读需要 {{ $post->readingTime() }} 分钟
            &#183; 阅读 {{ \App\Models\SlugViewCount::getViews($post->slug) }} 次
        </p>
        <p class="postSubtitle">
            {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
        </p>
        <p style="font-size: 13px"><a href="{{ $post->url($tag) }}">更多...</a></p>
    </div>
    <hr>
@endforeach
