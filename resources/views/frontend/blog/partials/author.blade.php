<img style="float: left; width: 60px" class="img-responsive img-circle author-img" src="{{ $user->image_profile() }}" title="{{ $user->name }}">
<div style="overflow: hidden">
    <h4 id="auth-name"><strong>{{ $user->name }}</strong></h4>
    <span class="small" style="margin-top: 0">
        {{ $user->bio }}
        <br>
        @if (!empty($user->email))
            <a href="mailto:{{ $user->email }}" target="_blank" id="social"><i class="fa fa-3x fa-envelope text-muted" style="font-size: 21px"></i></a>
        @endif
        @if (!empty($user->github))
            <a href="http://github.com/{{ $user->github }}" target="_blank" id="social"><i class="fa fa-3x fa-github text-muted" style="font-size: 21px"></i></a>
        @endif
        @if (!empty($user->weibo))
            <a href="http://weibo.com/{{ $user->weibo }}" target="_blank" id="social"><i class="fa fa-3x fa-weibo text-muted" style="font-size: 21px"></i></a>
        @endif
        @if (!empty($user->qq))
            <a href="tencent://message/?uin={{ $user->qq }}&Site=&Menu=yes" target="_blank" id="social"><i class="fa fa-3x fa-qq text-muted" style="font-size: 21px"></i></a>
        @endif
        @if (!empty($user->weixin))
            <a target="_blank" id="social"><i class="fa fa-3x fa-weixin text-muted" style="font-size: 21px"></i></a>
        @endif
    </span>
</div>