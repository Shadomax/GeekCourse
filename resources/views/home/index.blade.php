@extends('layouts.app')

@section('title', 'GeekCourse')
@include('layouts.header')
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
    

@endsection

@push('bottom')
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
@endpush