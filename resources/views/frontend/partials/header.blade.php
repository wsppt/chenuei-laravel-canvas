<div class="container" id="head-c">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <a title="点击回到主页" href="{{ url('/') }}">
                <img alt="" src="{{ asset('images/canvas-logo.gif') }}" class="cl hidden-xs" style="width: 200px;cursor: pointer;">
            </a>
            <h1><a title="点击回到主页" href="{{ url('/') }}">{{ Settings::blogTitle() }}</a></h1>
            <h3>{{ Settings::blogSubTitle() }}</h3>
            @if(isset($user->email) && strlen($user->email))
                <a title="给我发送e-mail" href="mailto:{{ $user->email }}" target="_blank" id="social"><i class="fa fa-2x fa-envelope"></i></a>
            @endif
            @if(isset($user->github) && strlen($user->github))
                <a title="我的GITHUB主页" href="https://github.com/{{ $user->github }}" target="_blank" id="social"><i class="fa fa-2x fa-github"></i></a>
            @endif
            @if(isset($user->weibo) && strlen($user->weibo))
                <a title="我的微博主页" href="http://weibo.com/{{ $user->weibo }}" target="_blank" id="social"><i class="fa fa-2x fa-weibo"></i></a>
            @endif
            @if(isset($user->qq) && strlen($user->qq))
                <a title="和我QQ联系" href="tencent://message/?uin={{ $user->qq }}&Site=&Menu=yes" target="_blank" id="social"><i class="fa fa-2x fa-qq"></i></a>
            @endif
            @if(isset($user->weixin) && strlen($user->weixin))
                <a target="_blank" id="social"><i class="fa fa-2x fa-weixin"></i></a>
            @endif
        </div>
    </div>
</div>
<hr>