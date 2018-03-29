<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
    </head>
    <body style="background-color: #F7F8FA;">
        

        <div class="container">
            @yield('content')
        </div>
              <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        @yield('jquery')
     
    </body>
</html>