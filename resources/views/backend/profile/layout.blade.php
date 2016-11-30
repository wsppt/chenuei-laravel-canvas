@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 个人信息</title>
@stop

@section('content')
    <section id="main">
        @include('backend.partials.sidebar-navigation')
        <section id="content">
            <div class="container container-alt">
                <div class="block-header">
                    <h2>个人信息</h2>
                    <ul class="actions">
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="{{ url('admin/profile') }}">刷新个人信息</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card" id="profile-main">
                    @include('backend.profile.partials.sidebar')
                    <div class="pm-body clearfix">
                        @section('profile-content')
                            <ul class="tab-nav tn-justified">
                                <li class="{{ Route::is('admin.profile.index') ? 'active' : '' }}">
                                    <a href="{{ url('admin/profile') }}">个人信息</a>
                                </li>
                                <li class="{{ Route::is('admin.profile.edit') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/profile') }}/{{ Auth::id() }}/edit">编辑</a>
                                </li>
                                <li class="{{ Route::is('admin.profile.privacy') ? 'active' : '' }}">
                                    <a href="{{ url('admin/profile/privacy') }}">安全</a>
                                </li>
                            </ul>
                            @if(Session::has('errors') || Session::has('success'))
                                <div class="pmb-block">
                                    <div class="pmbb-header">
                                        @include('shared.errors')
                                        @include('shared.success')
                                    </div>
                                </div>
                            @endif
                        @show
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop