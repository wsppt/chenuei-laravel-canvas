<ul class="pager">
    @if ($tag && $tag->reverse_direction)
        @if ($post->olderPost($tag))
            <li class="previous">
                <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    上一篇 {{ $tag->tag }}
                </a>
            </li>
        @endif
        @if ($post->newerPost($tag))
            <li class="next">
                <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                    下一篇 {{ $tag->tag }}
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    @else
        @if ($post->newerPost($tag))
            <li class="previous">
                <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    上一篇
                </a>
            </li>
        @endif
        @if ($post->olderPost($tag))
            <li class="next">
                <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                    下一篇
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    @endif
</ul>