@extends('layouts.app')

@section('title', 'GeekCourse')
@include('layouts.header',['category' => $category])
@section('content')
  		<!-- Popular Course -->
   		<div class="row">
   			<div class="col-sm-12">
   				<h2 class="text-center">Popular Course</h2>
   			</div>
   		</div>
   		<hr/>
   		<div id="products" class="row list-group">
   		@foreach($coursePopular as $row)
        @include('home.card', ['title' => $row->title,'desc' => $row->description,'price'=> $row->price,'rating'=> number_format($row->rating,0)]) 
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
   	@foreach($courseRecommendation as $row)
        @include('home.card', ['title' => $row->title,'desc' => $row->description,'price'=> $row->price,'rating' => number_format($row->rating,0)]) 
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