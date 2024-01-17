<html>

<head>
    @yield('title')



    @include('components.head')
</head><!--/head-->


<body>

    @include('components.header')
    @yield('content')
    @include('components.footer')

    @include('components.foot')
</body>

</html>
