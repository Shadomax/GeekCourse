@extends('layouts.app')

@section('title', 'GeekCourse')
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">GeekCourse</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
           <ul class="nav navbar-nav">
	      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Link 1</a></li>
                            <li><a href="#">Dropdown Link 2</a></li>
                            <li><a href="#">Dropdown Link 3</a></li>
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

     <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-color: white;">
      <div class="container">
        <h1>GeekCourse</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a class="btn btn-primary btn-sm" href="#" role="button">Sign Up</a>
        <a class="btn btn-primary btn-sm" href="#" role="button">Sign In</a></p>
      </div>
    </div>
@section('content')
  		<!-- Popular Course -->
   		<div class="row">
   			<div class="col-sm-12">
   				<h2 class="text-center">Popular Course</h2>
   			</div>
   		</div>
   		<hr/>
   		<div id="products" class="row list-group">
   		@foreach(range(1,8) as $popularcourse)
        <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="https://s-media-cache-ak0.pinimg.com/originals/88/b7/5c/88b75c597c7431200a16acecc5550ee0.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Basic Laravel
                    </h4>

                        <p><span>Author : Asvarizal Filcha</span></p>
                        
                    	<p class="group inner list-group-item-text">
                        Course Description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Rating : @foreach(range(1,3) as $star)<span class="glyphicon glyphicon-star"></span>@endforeach</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p class="lead">Rp. 2.000.000</p>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-6 col-xs-offset-6">
                        <p style="text-align: right;">
                            <a class="btn btn-primary btn-md" href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span></a>
                            <a class="btn btn-danger btn-md" href="#">
                            <span class="glyphicon glyphicon-heart"></span></a>
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Recommendation Course -->
    <div class="row">
   			<div class="col-sm-12">
   				<h2 class="text-center">Recommendation Course</h2>
   			</div>
   		</div>
   		<hr/>
   		<div id="products" class="row list-group">
   		@foreach(range(1,8) as $recommendedcourse)
       <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="https://s-media-cache-ak0.pinimg.com/originals/88/b7/5c/88b75c597c7431200a16acecc5550ee0.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Basic Laravel
                    </h4>

                        <p><span>Author : Asvarizal Filcha</span></p>
                        
                      <p class="group inner list-group-item-text">
                        Course Description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <p>Rating : @foreach(range(1,3) as $star)<span class="glyphicon glyphicon-star"></span>@endforeach</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p class="lead">Rp. 2.000.000</p>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-xs-offset-6">
                        <p style="text-align: right;">
                            <a class="btn btn-primary btn-md" href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span></a>
                            <a class="btn btn-danger btn-md" href="#">
                            <span class="glyphicon glyphicon-heart"></span></a>
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
      <hr>

      <footer>
        <p>&copy; 2018 GeekCourse, Inc.</p>
      </footer>

@endsection

@section('jquery')
   <script type="text/javascript">
            (function($){
            $(document).ready(function(){
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                    event.preventDefault(); 
                    event.stopPropagation(); 
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
   </script>

@endsection