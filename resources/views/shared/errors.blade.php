@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong><i class="zmdi zmdi-close-circle"></i>&nbsp;很抱歉！ </strong>您的输入有错误！
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif