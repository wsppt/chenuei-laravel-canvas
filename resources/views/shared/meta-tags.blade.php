<script type="text/javascript">
    var _speedMark = new Date();
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Facebook Open Graph Tags -->
{{--<meta name="og:type" content="blog">--}}
{{--<meta name="og:site_name" content="{{ Settings::blogTitle() }}">--}}
@yield('og-title')
@yield('og-image')
@yield('og-description')

<!-- Twitter Cards -->
{{--<meta name="twitter:card" content="{{ Settings::twitterCardType() }}" />--}}
{{--<meta name="twitter:site" content="{{ $user->twitter or ''}}" />--}}
{{--<meta name="twitter:title" content="{{ Settings::blogTitle() }}" />--}}
{{--<meta name="twitter:description" content="{{ Settings::blogDescription() }}" />--}}
{{--<meta name="twitter:image" content="{{ url('/images/favicon.png') }}" />--}}
@yield('twitter-card')

<!-- SEO Tags -->
<meta name="keywords" content="{{ Settings::blogSeo() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="{{ Settings::blogAuthor() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="{{ Settings::blogDescription() }}">
<meta name="baidu-site-verification" content="6IoBEXnL7u" />

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">