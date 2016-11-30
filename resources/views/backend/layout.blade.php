<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        @include('shared.meta-tags')
        @yield('title')
        @include('backend.partials.backend-css')
    </head>
    <body @if(Auth::check()) class="toggled sw-toggled" @endif>
        @if (Auth::guest())
            @yield('login')
        @else
            @include('backend.partials.header')
            @yield('content')
            @include('shared.page-loader')
            @include('backend.partials.footer')
        @endif
        @include('backend.partials.backend-js')
        @include('backend.partials.search-js')
        @yield('unique-js')
    </body>
</html>
