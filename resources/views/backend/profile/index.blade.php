@extends('backend.profile.layout')

@section('profile-content')
    @parent
    @if(isset($data['bio']) && !empty($data['bio']))
        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-equalizer m-r-10"></i> 个性签名</h2>
            </div>
            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    {{ $data['bio'] }}
                </div>
            </div>
        </div>
    @endif

    <div class="pmb-block">
        <div class="pmbb-header">
            <h2><i class="zmdi zmdi-account m-r-10"></i> 基本信息</h2>
        </div>
        <div class="pmbb-body p-l-30">
            <div class="pmbb-view">
                <dl class="dl-horizontal">
                    <dt>全名</dt>
                    <dd>{{ $data['name'] }}</dd>
                </dl>
                @if(isset($data['gender']) && !empty($data['gender']))
                    <dl class="dl-horizontal">
                        <dt>性别</dt>
                        <dd>{{ $data['gender'] }}</dd>
                    </dl>
                @endif
                @if(isset($data['birthday']) && !empty($data['birthday']))
                    <dl class="dl-horizontal">
                        <dt>生日</dt>
                        <dd>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data['birthday'])->format('M d, Y') }}</dd>
                    </dl>
                @endif
            </div>
        </div>
    </div>

    <div class="pmb-block">
        <div class="pmbb-header">
            <h2><i class="zmdi zmdi-phone m-r-10"></i> 联系信息</h2>
        </div>
        <div class="pmbb-body p-l-30">
            <div class="pmbb-view">
                @if(isset($data['mobile']) && strlen($data['mobile']))
                    <dl class="dl-horizontal">
                        <dt>手机号码</dt>
                        <dd>{{ $data['mobile'] }}</dd>
                    </dl>
                @endif
                <dl class="dl-horizontal">
                    <dt>邮箱地址</dt>
                    <dd>{{ $data['email'] }}</dd>
                </dl>
                @if(isset($data['country']) && !empty($data['country']))
                    <dl class="dl-horizontal">
                        <dt>国籍</dt>
                        <dd>{{ $data['country'] }}</dd>
                    </dl>
                @endif
                @if(isset($data['city']) && !empty($data['city']))
                    <dl class="dl-horizontal">
                        <dt>城市</dt>
                        <dd>{{ $data['city'] }}</dd>
                    </dl>
                @endif
                @if(isset($data['address']) && !empty($data['address']))
                    <dl class="dl-horizontal">
                        <dt>住址</dt>
                        <dd>{{ $data['address'] }}</dd>
                    </dl>
                @endif
            </div>
        </div>
    </div>

    @if(isset($data['twitter']) && strlen($data['twitter']) || isset($data['facebook']) && strlen($data['facebook']) || isset($data['github']) && strlen($data['github']) || isset($data['linkedin']) && strlen($data['linkedin']) || isset($data['resume_cv']) && strlen($data['resume_cv']) || isset($data['url']) && strlen($data['url']))
        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-accounts m-r-10"></i> Social Networks</h2>
            </div>
            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    @if(isset($data['github']) && strlen($data['github']))
                        <dl class="dl-horizontal">
                            <dt>GitHub</dt>
                            <dd><a href="http://github.com/{{ $data['github'] }}" target="_blank">{{ $data['github'] }}</a></dd>
                        </dl>
                    @endif
                    @if(isset($data['qq']) && strlen($data['qq']))
                        <dl class="dl-horizontal">
                            <dt>QQ号</dt>
                            <dd> {{ $data['qq'] }}</dd>
                        </dl>
                    @endif
                    @if(isset($data['weixin']) && strlen($data['weixin']))
                        <dl class="dl-horizontal">
                            <dt>微信号</dt>
                            <dd>{{ $data['weixin'] }}</dd>
                        </dl>
                    @endif
                    @if(isset($data['weibo']) && strlen($data['weibo']))
                        <dl class="dl-horizontal">
                            <dt>微博号</dt>
                            <dd>{{ $data['weibo'] }}</dd>
                        </dl>
                    @endif
                    @if(isset($data['url']) && strlen($data['url']))
                        <dl class="dl-horizontal">
                            <dt>个人主页</dt>
                            <dd>{{ $data['url'] }}</dd>
                        </dl>
                    @endif

                </div>
            </div>
        </div>
    @endif
@stop