<div class="card">
    <div class="card-header">
        <h2>最近的
            <small>最近的发布:</small>
        </h2>

        <br>

        @foreach ($data['recentPosts'] as $post)
            <a href="{{ url('admin/post/' . $post->id . '/edit') }}">{{ $post->title }}</a> <small>{{ $post->created_at->format('M d, Y') }} at {{ $post->created_at->format('g:i A') }}</small>
            <hr>
        @endforeach
    </div>
</div>