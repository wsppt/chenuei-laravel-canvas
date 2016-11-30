<footer id="footer">
    {{--Thank you for creating with <a href="http://canvas.toddaustin.io" target="_blank">Canvas</a>&nbsp;&#183;&nbsp; Running {{ App\Models\Settings::canvasVersion() }}--}}

    <ul class="f-menu">
        <li><a href="{{ url('admin') }}">主页</a></li>
        <li><a href="{{ url('admin/post') }}">文章</a></li>
        <li><a href="{{ url('admin/tag') }}">标签</a></li>
        <li><a href="{{ url('admin/upload') }}">媒体</a></li>
        <li><a href="{{ url('admin/tools') }}">工具</a></li>
        <li><a href="{{ url('admin/settings') }}">设置</a></li>
        <li><a href="mailto:chenxuefei_pp@163.com">支持</a></li>
    </ul>
</footer>