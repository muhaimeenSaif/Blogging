<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-4529508631166774",
                enable_page_level_ads: true
              });
            </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
                @include('includes.mainNav')
                <div class="container">
                    @include('includes.messages')
                    @yield('content')
                </div>
        
                {{-- @include('includes.footer') --}}
        </main>
    </div>
    <script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
