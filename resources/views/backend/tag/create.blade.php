@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 新建标签</title>
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
                            <li><a href="{{ url('admin/tag') }}">标签</a></li>
                            <li class="active">新建标签</li>
                        </ol>
                        @include('shared.errors')
                        @include('shared.success')
                        <h2>创建一个新的标签</h2>
                    </div>
                    <div class="card-body card-padding">
                        <form class="keyboard-save" role="form" method="POST" id="tagUpdate" action="{{ url('admin/tag') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @include('backend.tag.partials.form')

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> 保存</button>
                                &nbsp;
                                <a href="{{ url('admin/tag') }}"><button type="button" class="btn btn-link">取消</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    {!! JsValidator::formRequest('App\Http\Requests\TagCreateRequest', '#tagUpdate'); !!}

    @include('backend.shared.notifications.protip')
@stop