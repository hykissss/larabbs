<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'LaraBBS') - LaraBBS论坛</title>
    <meta name="description" content="@yield('description', 'LaraBBS 爱好者社区')" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app" class="{{ route_class() }}-page">

        <!--加载顶部导航区块的子模板-->
        @include('layouts._header')

        <div class="container">

            @include('layouts._message')
            <!--占位符声明，允许继承此模板的页面注入内容-->
            @yield('content')

        </div>

        <!--加载尾部导航区块的子模板-->
        @include('layouts._footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

    @if (app()->isLocal())
        @include('sudosu::user-selector')
    @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>