<div class="pm-overview c-overflow">
    <div class="pmo-pic">
        <div class="p-relative">
            <a href="http://gravatar.com" target="_blank">
                <img class="img-responsive" src="{{ Auth::user()->image_profile() }}">
            </a>
            <div class="dropdown pmop-message">
                <a href="mailto:{{ $data['email'] }}" target="_blank" class="btn bgm-white btn-float z-depth-1">
                    <i class="zmdi zmdi-email"></i>
                </a>
            </div>
            <a target="_blank" class="pmop-edit">
                <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">更新图片</span>
            </a>
        </div>
        <div class="pmo-stat">
            <h2 class="m-0 c-white">{{ $data['name'] }}</h2>
            加入时间 {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data['created_at'])->format('M d, Y') }}
        </div>
    </div>
    <div class="pmo-block pmo-contact hidden-xs">
        <h2>联系信息</h2>
        <ul>
            @if(isset($data['mobile']) && strlen($data['mobile']))
                <li><i class="zmdi zmdi-phone"></i> {{ $data['mobile'] }}</li>
            @endif
            <li><i class="zmdi zmdi-email"></i> <a href="mailto:{{ $data['email'] }}" target="_blank">{{ $data['email'] }}</a></li>
            <li>
                @if(isset($data['address']) && strlen($data['address']) || isset($data['city']) && strlen($data['city']) || isset($data['country']) && strlen($data['country']))
                    <i class="zmdi zmdi-pin"></i>
                @endif
                <address class="m-b-0 ng-binding">
                    @if(isset($data['country']) && !empty($data['country']))
                        {{ $data['country'] }}
                    @endif
                        @if(isset($data['city']) && !empty($data['city']))
                            {{ $data['city'] }},<br>
                        @endif
                    @if(isset($data['address']) && !empty($data['address']) )
                        {{ $data['address'] }},<br>
                    @endif
                </address>
            </li>
        </ul>
    </div>

    @if(isset($data['twitter']) && strlen($data['twitter']) || isset($data['facebook']) && strlen($data['facebook']) || isset($data['github']) && strlen($data['github']) || isset($data['linkedin']) && strlen($data['linkedin']) || isset($data['resume_cv']) && strlen($data['resume_cv']) || isset($data['url']) && strlen($data['url']))
        <div class="pmo-block pmo-contact hidden-xs">
            <h2>社交方式</h2>
            <ul>
                @if(isset($data['qq']) && strlen($data['qq']))
                    <li><i class="zmdi zmdi-twitter-box"></i> {{ $data['qq'] }}</li>
                @endif
                @if(isset($data['weixin']) && strlen($data['weixin']))
                    <li><i class="zmdi zmdi-facebook-box"></i> {{ $data['weixin'] }}</li>
                @endif
                @if(isset($data['github']) && strlen($data['github']))
                    <li><i class="zmdi zmdi-github-box"></i> <a href="http://github.com/{{ $data['github'] }}" target="_blank">{{ $data['github'] }}</a></li>
                @endif
                @if(isset($data['weibo']) && strlen($data['weibo']))
                    <li><i class="zmdi zmdi-linkedin-box"></i> <a href="http://weibo.com/{{ $data['weibo'] }}" target="_blank">{{ $data['weibo'] }}</a></li>
                @endif
                @if(isset($data['url']) && strlen($data['url']))
                    <li><i class="zmdi zmdi-globe"></i> <a href="http://www.{{ $data['url'] }}" target="_blank">{{ $data['url'] }}</a></li>
                @endif
            </ul>
        </div>
    @endif
</div>
