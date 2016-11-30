@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | Sign In</title>
@stop

@section('login')
    <section id="main">
        <section id="content">
            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                <div class="card">
                    <br>
                    <div class="card-header" style="text-align: center">
                        <img src="{{ asset('images/favicon.png') }}" style="width: 85px">
                    </div>

                    <div class="card-body card-padding" id="login-ch">
                        <p class="f-20 f-300 text-center">欢迎回来</p>
                        <p class="text-muted text-center">输入您的用户名密码以登录</p>

                        @include('shared.errors')

                        @include('auth.partials.form')

                        <br>
                    </div>
                </div>
                <p class="text-center"><a href="/"><i class="zmdi zmdi-long-arrow-return"></i> 返回主页</a></p>
            </div>
        </section>
    </section>
@endsection

@section('unique-js')
    {!! JsValidator::formRequest('App\Http\Requests\LoginRequest', '#login'); !!}
    @include('backend.shared.components.show-password', ['inputs' => 'input[name="password"]'])
@stop
