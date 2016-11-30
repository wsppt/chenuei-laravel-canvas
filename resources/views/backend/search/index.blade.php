@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 搜索</title>
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
                            <li class="active">搜索</li>
                        </ol>
                        <h2><i class="zmdi zmdi-search"></i> 搜索结果 <em>{{ request('search') }}</em></h2>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-condensed table-vmiddle">
                                <thead>
                                    <tr>
                                        <th>正文类型</th>
                                        <th>标题</th>
                                        <th>创建时间</th>
                                        <th>最后修改时间</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(empty($posts->toArray()) && empty($tags->toArray()))
                                        <tr>
                                            <td>没有任何结果。</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @else
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td><i class="zmdi zmdi-book"></i>&nbsp;&nbsp;Post</td>
                                                <td><a href="{{ url('admin/post') }}/{{ $post->id }}/edit">{{ $post->title }}</a></td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('M d, Y') }}</td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('M d, Y') }}</td>
                                            </tr>
                                        @endforeach

                                        @foreach ($tags as $tag)
                                            <tr>
                                                <td><i class="zmdi zmdi-label"></i>&nbsp;&nbsp;Tag</td>
                                                <td><a href="{{ url('admin/tag') }}/{{ $tag->id }}/edit">{{ $tag->title }}</a></td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->created_at)->format('M d, Y') }}</td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->updated_at)->format('M d, Y') }}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop
