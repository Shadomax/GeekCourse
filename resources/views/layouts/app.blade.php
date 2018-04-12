<html>
    <head>
        <title>@yield('title')</title>
         
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
        @stack('head')
    </head>
    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><span style="font-size: 28px;"><span style="font-weight: bold;">Geek</span>Course</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
           <ul class="nav navbar-nav">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          @foreach($category as $row)
                              <li><a href="{{$row->slug}}">{{$row->name}}</a></li>
                              
                          @endforeach
                            
                            <li class="divider"></li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                                    <li><a href="#">Dropdown Submenu Link 4.4</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                                    <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                                    <li><a href="#">Dropdown Submenu Link 5.3</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
                                                    <li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
          </ul>

           <form class="navbar-form navbar-left">
       <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default " style="height: 34px;" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div><!-- /input-group -->
      </form>

       <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>


        <div class="container">
            @yield('content')
             <hr>

          <footer>
            <p>&copy; 2018 GeekCourse, Inc.</p>
          </footer>
        </div>

              <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        @stack('bottom')
     
    </body>
</html>