<div class="card">
    <div class="card-header">
        <h2>欢迎来到后台系统!
            <small>
            </small>
        </h2>
    </div>
    <div class="card-body card-padding">
        <div class="row">
            <div class="col-sm-4">
                <h5>开始</h5>
                <br>
                <a href="https://github.com/austintoddj/canvas#advanced-options" target="_blank" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-invert-colors"></i> Create a Theme</a>
                <br>
                <br>
                <a href="{{ url('admin/profile/' . Auth::user()->id . '/edit') }}" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-account"></i> 更新您的个人信息</a>
                <br>
                <br>
            </div>
            <div class="col-sm-4">
                <h5>接下来</h5>
                <ul class="getting-started">
                    <li><i class="zmdi zmdi-comment-edit"></i> <a href="{{ url('admin/post/create') }}">编写您的第一份博客</a></li>
                    <li><i class="zmdi zmdi-plus-circle"></i> <a href="{{ url('admin/tag/create') }}">创建一个标签</a></li>
                    <li><i class="zmdi zmdi-view-web"></i> <a href="{{ url('/') }}" target="_blank">浏览您的网页</a></li>
                </ul>
                <br>
            </div>
            <div class="col-sm-4">
                <h5>更多操作</h5>
                <ul class="getting-started">
                    <li><i class="zmdi zmdi-disqus"></i> <a href="{{ url('admin/settings') }}">Disqus Integration</a></li>
                    <li><i class="zmdi zmdi-trending-up"></i> <a href="{{ url('admin/settings') }}">Google Analytics Setup</a></li>
                    <li><i class="zmdi zmdi-wrench"></i> <a href="{{ url('admin/tools') }}">Advanced Tools</a></li></a></li>
                </ul>
                <br>
            </div>
        </div>
    </div>
</div>