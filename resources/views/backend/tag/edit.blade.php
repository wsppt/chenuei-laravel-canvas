@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 编辑标签</title>
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
                            <li class="active">Edit Tag</li>
                        </ol>
                        @include('shared.errors')
                        @include('shared.success')
                        <h2>
                            编辑 <em>{{ $data['title'] }}</em>
                            <small>
                                @if(isset($data['updated_at']))
                                    最后一次在 {{$data['updated_at']->format('M d, Y') }} at {{ $data['updated_at']->format('g:i A') }} 修改
                                @else
                                    最后一次在 {{ $data['created_at']->format('M d, Y') }} at {{ $data['created_at']->format('g:i A') }} 修改
                                @endif
                            </small>
                        </h2>

                    </div>
                    <div class="card-body card-padding">
                        <form class="keyboard-save" role="form" method="POST" id="tagUpdate" action="{{ url('admin/tag/' . $data['id']) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{ $data['id'] }}">

                            @include('backend.tag.partials.form')

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-icon-text">
                                    <i class="zmdi zmdi-floppy"></i> 保存
                                </button>&nbsp;
                                <button type="button" class="btn btn-danger btn-icon-text" data-toggle="modal" data-target="#modal-delete">
                                    <i class="zmdi zmdi-delete"></i> 删除
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    @include('backend.tag.partials.modals.delete')
@stop

@section('unique-js')
    {!! JsValidator::formRequest('App\Http\Requests\TagUpdateRequest', '#tagUpdate'); !!}
    @if(Session::get('_update-tag'))
        @include('backend.partials.notify', ['section' => '_update-tag'])
        {{ \Session::forget('_update-tag') }}
    @endif
@stop
