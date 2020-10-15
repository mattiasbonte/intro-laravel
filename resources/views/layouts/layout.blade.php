<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaravEat</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
</head>


<body class="box-border bg-gray-200">
    <!-- HEADER -->
    @include('includes.header')

    <!-- MAIN -->
    <div class="relative mx-auto text-center">
        @yield('menu')
        @yield('reviews')
    </div>

    <!-- FOOTER -->
    @include('includes.footer')

</body>

</html>
