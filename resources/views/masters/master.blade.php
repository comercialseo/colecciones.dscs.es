<!-- Stored in resources/views/masters/master.blade.php -->

<html>
    <head>
        <title>Colecciones App - @yield('meta-title')</title>
        <meta charset="UTF-8">
        <meta name="description" content="@yield('meta-description')">
        <meta name="keywords" content="@yield('meta-keywords')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @endsection

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>