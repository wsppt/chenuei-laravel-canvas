@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 文章</title>
@stop

@section('content')
    <section id="main">
        @include('backend.partials.sidebar-navigation')
        <section id="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('admin') }}">主页</a></li>
                            <li class="active">文章</li>
                        </ol>
                        @include('shared.errors')
                        @include('shared.success')
                        <h2>文章&nbsp;
                            <a href="{{ url('admin/post/create') }}"><i class="zmdi zmdi-plus-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="新建一篇新文章"></i></a>
                            <small>点击<span class="zmdi zmdi-edit text-primary"></span> 图标以更新文章内容。 <span class="zmdi zmdi-search text-primary"></span> 图标用以预览。</small>
                        </h2>
                    </div>

                    <div class="table-responsive">
                        <table id="posts" class="table table-condensed table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id">编号</th>
                                    <th data-column-id="title">标题</th>
                                    <th data-column-id="subtitle">副标题</th>
                                    <th data-column-id="slug">固定链</th>
                                    <th data-column-id="published">状态</th>
                                    <th data-column-id="created" data-type="date" data-formatter="humandate" data-order="desc">新建时间</th>
                                    <th data-column-id="updated" data-type="date" data-formatter="humandate">最后更新时间</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">动作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ str_limit($post->subtitle, config('blog.backend_trim_width')) }}</td>
                                        <td>{{ $post->slug }}</td>
                                        <td>{{ $post->is_draft === 1 ? '<span class="label label-primary">Draft</span>' : '<span class="label label-success">Published</span>' }}</td>
                                        <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $post->updated_at->format('Y-m-d') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    @if(Session::get('_new-post'))
        @include('backend.partials.notify', ['section' => '_new-post'])
        {{ \Session::forget('_new-post') }}
    @endif
    @if(Session::get('_delete-post'))
        @include('backend.partials.notify', ['section' => '_delete-post'])
        {{ \Session::forget('_delete-post') }}
    @endif
    @if(Session::get('_update-post'))
        @include('backend.partials.notify', ['section' => '_update-post'])
        {{ \Session::forget('_update-post') }}
    @endif
    @include('backend.post.partials.datatable')
@stop
