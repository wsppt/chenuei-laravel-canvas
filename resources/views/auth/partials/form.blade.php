<form role="form" id="login" method="POST" action="{{ route('auth.login.store') }}">
    {!! csrf_field() !!}
    <div class="form-group fg-line">
        <input type="text" class="form-control"
               name="username" value="{{ old('username') }}" placeholder="用户名">
    </div>
    <div class="form-group fg-line">
        <input type="password" name="password" class="form-control"
               placeholder="密码">
    </div>

    <div class="form-group fg-line">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember">
                <i class="input-helper"></i>
                记住我
            </label>
        </div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary btn-block m-t-10">登录</button>
    <hr>
    <a href="{{ route('auth.password.forgot') }}" class="btn btn-link btn-block m-t-10">忘记密码？</a>
</form>
