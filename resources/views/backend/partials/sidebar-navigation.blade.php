<aside id="sidebar" class="sidebar c-overflow">
    <div class="profile-menu">
        <a href="">
            <div class="profile-pic">
                <img src="{{ Auth::user()->image_profile() }}">
            </div>
            <div class="profile-info">
                {{ Auth::user()->name }}
                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </a>
        <ul class="main-menu profile-ul">
            <li @if (Request::is('admin/profile')) class="active" @endif><a href="{{ url('admin/profile') }}"><i class="zmdi zmdi-account"></i> 个人信息</a></li>
            <li @if (Request::is('admin/profile/*')) class="active" @endif><a href="{{ route('admin.profile.edit', Auth::id()) }}"><i class="zmdi zmdi-edit"></i> 编辑个人信息</a></li>
            <li><a href="{{ url('auth/logout') }}" name="logout"><i class="zmdi zmdi-power"></i> 登出</a></li>
        </ul>
    </div>
    <ul class="main-menu main-ul">
        <li @if (Request::is('admin')) class="active" @endif><a href="{{ url('admin') }}"><i class="zmdi zmdi-home"></i> 主页</a></li>
        <li @if (Request::is('admin/post*')) class="active" @endif><a href="{{ url('admin/post') }}"><i class="zmdi zmdi-collection-bookmark"></i> 文章 <span class="label label-default label-totals">{{ App\Models\Post::count() }}</span></a></li>
        <li @if (Request::is('admin/tag*')) class="active" @endif><a href="{{ url('admin/tag') }}"><i class="zmdi zmdi-labels"></i> 标签 <span class="label label-default label-totals">{{ App\Models\Tag::count() }}</span></a></li>
        <li @if (Request::is('admin/upload*')) class="active" @endif><a href="{{ url('admin/upload') }}"><i class="zmdi zmdi-collection-folder-image"></i> 媒体</a></li>
        <li @if (Request::is('admin/tools*')) class="active" @endif><a href="{{ url('admin/tools') }}"><i class="zmdi zmdi-wrench"></i> 工具</a></li>
        <li @if (Request::is('admin/settings*')) class="active" @endif><a href="{{ url('admin/settings') }}"><i class="zmdi zmdi-settings"></i> 设置</a></li>
        <li @if (Request::is('admin/help')) class="active" @endif><a href="{{ url('admin/help') }}"><i class="zmdi zmdi-help"></i> 帮助</a></li>
    </ul>
</aside>
