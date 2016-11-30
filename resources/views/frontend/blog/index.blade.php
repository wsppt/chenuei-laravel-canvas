@extends('frontend.layout')

@section('title')
    <title>{{ $tag->title or Settings::blogTitle() }} | 个人博客</title>
@stop

@section('unique-js')
    <script src="{{ asset('js/frontend.js') }}" charset="utf-8"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @include('frontend.blog.partials.tag-head')
                @include('frontend.blog.partials.posts')
                @include('frontend.blog.partials.index-pager')
            </div>
        </div>
    </div>
@stop