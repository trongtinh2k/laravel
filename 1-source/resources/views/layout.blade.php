<html>
<head>
    <title>App Name -@yield('title')</title>

    @include('header')

    <body>
        <div class="getTrainers">
            @yield('content')
        </div>

    @include('footer')
    </body>
</head>
</html>