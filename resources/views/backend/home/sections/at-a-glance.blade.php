<div class="card">
    <div class="card-header">
        <h2>概览
            <small>网站概览</small>
        </h2>
        <br>
        <ul class="getting-started">
            <li>
                <i class="zmdi zmdi-collection-bookmark"></i> <a href="{{ url('admin/post') }}">{{ count($data['posts']) }}{{ str_plural(' Post', count($data['posts'])) }}</a>
            </li>
            <li>
                <i class="zmdi zmdi-labels"></i> <a href="{{ url('admin/tag') }}">{{ count($data['tags']) }}{{ str_plural(' Tag', count($data['tags'])) }}</a>
            </li>
            <li>
                @if($data['status'] === 1)
                    <i class="zmdi zmdi-globe-alt"></i> <a href="{{ url('admin/tools') }}"><span class="label label-success">Status: {{ strtoupper('Active') }}</span></a>
                @else
                    <i class="zmdi zmdi-globe-alt"></i> <a href="{{ url('admin/tools') }}"><span class="label label-warning">Status: {{ strtoupper('Maintenance Mode') }}</span></a>
                @endif
            </li>
            <li>
                @if(isset($data['disqus']) && strlen($data['disqus']))
                    <i class="zmdi zmdi-disqus"></i> <a href="{{ url('admin/settings') }}"><span class="label label-success">Disqus: {{ strtoupper('Enabled') }}</span></a>
                @else
                    <i class="zmdi zmdi-disqus"></i> <a href="{{ url('admin/settings') }}"><span class="label label-danger">Disqus: {{ strtoupper('Disabled') }}</span></a>
                @endif
            </li>
            <li>
                @if(isset($data['analytics']) && strlen($data['analytics']))
                    <i class="zmdi zmdi-trending-up"></i> <a href="{{ url('admin/settings') }}"><span class="label label-success">Google Analytics: {{ strtoupper('Enabled') }}</span></a>
                @else
                    <i class="zmdi zmdi-trending-up"></i> <a href="{{ url('admin/settings') }}"><span class="label label-danger">Google Analytics: {{ strtoupper('Disabled') }}</span></a>
                @endif
            </li>
        </ul>

    </div>
</div>
