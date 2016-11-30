@if (isset($tag->title))
    <hr style="width: 60%">
    <p class="tag-link"><i class="fa fa-fw fa-tag"></i> 标记为 <a href="#">{{ $tag->title or '' }}</a></p>
    <p class="tag-subtitle">" {{ $tag->subtitle }} "</p>
    <hr style="width: 60%">
@endif